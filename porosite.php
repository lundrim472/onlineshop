
<?php 
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pororsite</title>
    <style>

*
        {
            box-sizing:border-box;
            margin:0;
            padding:0;
            color:white;
        }

        body 
        {
            background:black;
        }
        table , tr, td, th, tbody, thead 
        {
            border:solid white 1px;
            padding:20px;
            color:white;
        }

        th, td
        {
            width:500px;
        }

        .container 
        {
            margin-top:50px;
            display:flex;
            justify-content:center;
            margin: 50px;
        }

        button 
        {
            background-color: red;
            color:white;
            border:none;
            width:100%;
            padding:5px;
            cursor:pointer;
            transition: 1s ease;
            height: 50px;
        }

        button:hover 
        {
            background-color:orangered;
        }

        a 
        {
            text-align:center;
            text-decoration:none;
        }
        </style>
</head>
<body>

<h1 style="text-align:center">POROSITE ONLINE</h1>
<button onclick="print()">Printo !</button>
    <div class="container">
      

        <table>
            <thead>
                <tr>
                    <th>PRODUKTI</th>
                    <th>EMRI</th>
                    <th>MBIEMRI</th>
                    <th>SASIA</th>
                    <th>MADHESIA</th>
                    <th>CMIMI</th>
                    <th>NUMRI TELEFONIT</th>
                    <th>ADRESA</th>
                    <th>MESAZHI</th>
                    <th>EMAIL</th>
                    <th>OPERACIONI</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $sql="Select * from `tabela`";
                    $result = mysqli_query($con, $sql);
                    if($result)
                    {
                        /*$row = mysqli_fetch_assoc($result);
                        echo $row['name'];*/
                        while($row=mysqli_fetch_assoc($result))
                        {
                            $numriser = $row['numriser'];
                            $name_order = $row['name_order'];
                            $lastname_order=$row['lastname_order'];
                            $sasia=$row['sasia'];
                            $madhesia=$row['madhesia'];
                            $cmimi=$row['cmimi'];
                            $number_phone_order=$row['number_phone_order'];
                            $adress_home=$row['adress_home'];
                            $message_option=$row['message_option'];
                            $email_order=$row['email_order'];
                        

                            /*
                            
    $id = $_POST['id'];
    $nrtavoline=$_POST['nrtavoline'];
    $sasia=$_POST['sasia'];*/ 

                            echo '<tr>
                            <td>'.$numriser.'</td>
                            <td> '.$name_order.'</td>
                            <td> '.$lastname_order.'</td>
                            <td> '.$sasia.'</td>
                            <td> '.$madhesia.'</td>
                            <td> '.$cmimi.'</td>
                            <td> '.$number_phone_order.'</td>
                            <td> '.$adress_home.'</td>
                            <td> '.$message_option.'</td>
                            <td> '.$email_order.'</td>
                            <td>
                            <button><a href="delete.php?deleteid='.$name_order.'">fshije</a></button>
                            </td>
                            </tr>
                            ';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>