<?php
if(empty($_SESSION['email'] AND $_SESSION['password'])){
    echo "<script>alert('Please Login');
    window.location.href='customerforms.php';
    </script>";
}
?>