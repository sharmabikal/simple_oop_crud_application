<?php
/**
 * Created by PhpStorm.
 * User: bikal
 * Date: 15/4/19
 * Time: 11:09 AM
 */

include_once("classes/Crud.php");
$crud = new Crud();
$id = $crud->escape_string($_GET['id']); // getting id

$result = $crud->getData("SELECT * FROM users WHERE id=$id");

foreach($result as $res){
    $name = $res['name'];
    $age = $res['age'];
    $email = $res['email'];
}

?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit-Data-Form</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- admin Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">



    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<div class="wrapper">
<!-- Horizontal Form -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Form</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="edit_action.php" method="post" name="form1" class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Name:</label>

                <div class="col-sm-10">
                    <input value="<?php echo $name;?>" type="text" class="form-control" name="name" placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Email:</label>

                <div class="col-sm-10">
                    <input value="<?php echo $email;?>" type="text" class="form-control"  name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Age:</label>

                <div class="col-sm-10">
                    <input value="<?php echo $age;?>" type="text" name="age" class="form-control"  placeholder="Age">
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">

            <a href="index.php">Home</a>
            <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
            <button type="submit" name="update" value="Update" class="btn btn-info pull-right">Update</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>
</div>
</body>
</html>

