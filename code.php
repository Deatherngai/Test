<?php
session_start();
include('dbcon.php');
if(isset($_POST['update_content'])){
    $key = $_POST['key'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $updateData = [
        'fname'=>$first_name,
        'lname'=>$last_name,
        'email'=>$email,
        'phone'=>$phone,
    ];

    $ref_table = 'contacts/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
    if($updatequery_result){
        $_SESSION['status'] = "Contact Updated Successfully";
        header('Location: index.php');
    }else{
        $_SESSION['status'] = "Contact Not Updated";
        header('Location: index.php');

    }
}


if(isset($_POST['save_content'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $postData = [
        'fname'=>$first_name,
        'lname'=>$last_name,
        'email'=>$email,
        'phone'=>$phone,
    ];

    $ref_table = "contacts";
    $postRef_restult = $database->getReference($ref_table)->push($postData);

    if($postRef_restult){
        $_SESSION['status'] = "Add Contact Successfully";
        header('Location: index.php');
    }else{
        $_SESSION['status'] = "Contact Not Added";
        header('Location: index.php');

    }
}
?>