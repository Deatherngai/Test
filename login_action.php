<?php
session_start();
include('dbcon.php');

$account = $_POST['account'];
$password = $_POST['password'];

$ref_table = "Account";
$fetchdatat = $database->getReference($ref_table)->getValue();

if($fetchdatat>0){
$i = 1;
foreach($fetchdatat as $key => $row){
    if(str_contains(($row['account']),($_POST['acccount'])) & str_contains(($row['account']),($_POST['acccount']))){
    $_SESSION['message']="Sign-in Successful";
    header('Location: index_login.php');
    }else{
        $_SESSION['message']="";
        header('Location: login.php');

}
}
}
    
?>