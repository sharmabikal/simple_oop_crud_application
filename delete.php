<?php
/**
 * Created by PhpStorm.
 * User: bikal
 * Date: 15/4/19
 * Time: 11:10 AM
 */

include_once("classes/Crud.php");

$crud = new Crud();

$id = $crud->escape_string($_GET['id']);

$result = $crud->delete($id, 'users');

if($result){
    header('Location:index.php');
}

?>
