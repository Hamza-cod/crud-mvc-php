<?php

// $dbConnect = mysqli_connect($dns,$user,"",$db);
function connDb()
{
    return new PDO(dsn: 'mysql:dbname=stagiaires;hostname=localhost', username: 'root', password: '', options: []);
}
function getListUsers() 
{
    return connDb()->query('SELECT * FROM stagiaire')->fetchAll(mode:PDO::FETCH_OBJ);
}

// add user in database
function addUser($name,$pnom,$email)
{
    $query = connDb()->prepare("INSERT INTO stagiaire(name,pnom,email)VALUES (?,?,?)");
    $query->execute([$name,$pnom,$email]);
    
    
}
function delUser ($id)
{
    $query = connDb()->prepare("DELETE FROM stagiaire WHERE id = '$id'");
    $query->execute();
}
function affUpdUser($id) 
{
    return connDb()->query("SELECT * FROM stagiaire WHERE id = '$id'")->fetch(mode:PDO::FETCH_OBJ);
}
function updateUser ($name,$pnom,$email,$id)
{
    $query = connDb()->prepare("UPDATE stagiaire SET name='$name',pnom='$pnom',email='$email'  WHERE id = '$id'");
    $query->execute();
}