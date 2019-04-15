<?php
/**
 * Created by PhpStorm.
 * User: bikal
 * Date: 15/4/19
 * Time: 11:10 AM
 */
include_once("classes/Crud.php");
include_once("classes/Validation.php");

$crud = new Crud();

$validation = new Validation();

if($_POST['update']){

    $id = $crud->escape_string($_POST['id']);
    $name = $crud->escape_string($_POST['name']);
    $age = $crud->escape_string($_POST['age']);
    $email= $crud->escape_string(($_POST['email']));
    //validation class
    $msg = $validation->check_empty($_POST,array('name','age','email'));
    $check_age = $validation->is_age_valid($_POST['age']);
    $check_email = $validation->is_email_valid($_POST['email']);

    if($msg) {

        echo $msg;

        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

    }elseif(!$check_age){
        echo 'Please provide proper age';
    }elseif(!$check_email){
        echo 'Please provide proper email';
    }else{
        $result = $crud->execute("UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");
        header("Location: index.php");
    }




}
