<?php
require_once 'controller/controller.php';
if(isset($_GET['action']))
{
    $action=$_GET['action'];
    if($action=="updat")
    {
        aff_updateAction();
    }
    else if($action=="updateact")
    {
        
        updateAction();
    }
    else if($action=="add")
    {
        
        aff_addAction();
    }
    else if($action=='store')
    {
       storeAction();
    }
    else if($action=='remove')
    {
       delAction();
    }

}
else
{
    listUsersAction();  
}