<?php 
include 'db.php';

if(isset($_GET['deleteid'])){
    //$id=$_GET['deleteid'];
    $number_phone_order= $_GET['deleteid'];

    $sql="delete from `tabela`";

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