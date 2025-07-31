<?php
if(!isset($_SESSION)){
session_start();
ob_start();
}
?>  


<?php
$_SESSION['teachers_id']=1;
if(isset($_GET['id'])) {
    $_SESSION['teachers_id']=$_GET['id'];

}

echo "<script>window.location = '../teacher-info/'</script>";
?>