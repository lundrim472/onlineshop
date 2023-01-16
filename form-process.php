<?php
include("db.php");
extract($_POST);
$sql = "INSERT INTO `tabela`(`numriser`, `cmimi`,`name_order`,`lastname_order`, `sasia` ,  `madhesia` ,`number_phone_order`, `adress_home`, `message_option`, `email_order`) VALUES ('".$numriser."', '".$cmimi."','".$name_order."','".$lastname_order."', '".$sasia."', '".$madhesia."', '".$number_phone_order."','".$adress_home."', '".$message_option."', '".$email_order."')";
$result = $con->query($sql);
if(!$result){
    die("Couldn't enter data: ".$con->error);
}
echo "<script>alert('Ju faleminderit qe na zgjodhet neve , ketu keni te dhenat e porosise !')</script> ";
echo "<h1 style='text-align:center;'>Detajet E Porosise Suaj!</h1>";
$total = $cmimi * $sasia;
//header("Location:index.php");
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikimi</title>
    <style>
        body 
        {
            background:black;
            color:white;
        }
    </style>
</head>
<body>
    <h3 style="text-align:center;">Per cdo lajm tjeter ju njoftojme permes emailit !</h3>
<table border="1" style="width:100%; text-align:center;">
<p style="text-align:center;">Ju faleminderit <span style="text-decoration:underline; font-weight:bold; font-size:20px;"><?php echo $name_order?></span> per porosine!</p>
    <tr>
        <td>Produkti</td>
        <td>Cmimi</td>
        <td>Sasia</td>
        <td style="background-color:red; color:white;">Totali</td>
    </tr>
    <tr>
        <td><?php echo $numriser;?></td>
        <td><?php echo $cmimi;?> &euro;</td>
        <td><?php echo $sasia;?></td>
        <td style="background-color:red; color:white;"><?php echo $total;?> &euro;</td>
    </tr>
</table>
</body>
</html>