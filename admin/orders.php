<!DOCTYPE html>
<html>
<?php
include ('adminpartials/session.php');
include ('adminpartials/head.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php
include ('adminpartials/header.php');
include ('adminpartials/aside.php');

?>
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          
            <div class="col-sm-9">
            
            <?php
                include ('../partials/connect.php');
                $sql = "SELECT * FROM orders";
                $results = $connect->query($sql);
                while($final=$results->fetch_assoc()){?>
                <a href="ordershow.php?pro_id=<?php echo $final['id']?>">
                    <h3><?php echo $final['id'] ?><br> Phone : <?php echo $final['phone']?> <br> Total - <?php echo $final['total']?></h3><br>
                </a>
                
                <a href="orderdelete.php?del_id=<?php echo $final['id']?>"><button style="color:red;">Delete</button></a><hr>
                <?php }
            ?>

            </div>
            
            <div class="col-sm-3">
                
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <?php
  include ('adminpartials/footer.php');
  ?>
</body>
</html>
