<?php
include 'model/Model.php'; 
function listUsersAction()
{
    $user =getListUsers();
    require_once "views/viewStag.php";
}
function aff_addAction()
{
    require 'views/add.php';
}
function storeAction()
{
    $name = trim($_POST['nom']);
    $pnom = trim($_POST['pnom']);
    $email = trim($_POST['email']);
    addUser($name,$pnom,$email);
    header("location:index.php");
}
function delAction(){
    $id =$_GET['id'];
    delUser($id);
    header("location:index.php");
}
function updateAction(){
    $id =$_GET['id'];
    $name = trim($_POST['name']);
    $pnom = trim($_POST['pnom']);
    $email = trim($_POST['email']);
  
    updateUser($name,$pnom,$email,$id);
    header("location:index.php"); 
}
function aff_updateAction(){
    $id =$_GET['id'];
    $userupd =affUpdUser($id);
    // var_dump(affUpdUser($id));
    require_once "views/updateView.php";

    // header("location:index.php");
}

?>