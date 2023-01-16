<?php 
include 'db.php';

if(isset($_GET['deleteid'])){
    //$id=$_GET['deleteid'];
    $name_order= $_GET['deleteid'];

    $sql="delete from `tabela` where name_order=$name_order";

    $result=mysqli_query($con, $sql);

    if($result){
        echo 'u fshit';
        header('refresh');
    }

    else 
    {
        die(mysqli_error($con));
    }
}

?>