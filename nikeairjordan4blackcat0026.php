<?php
include("db.php");

if(isset($_POST['submit'])){
    $numriser = $_POST['numriser'];
    $name_order = $_POST['name_order'];
    $lastname_order=$_POST['lastname_order'];
    $sasia=$_POST['sasia'];
    $madhesia=$_POST['madhesia'];
    $cmimi=$_POST['cmimi'];
    $number_phone_order=$_POST['number_phone_order'];
    $adress_home=$_POST['adress_home'];
    $message_option=$_POST['message_option'];
    $email_order=$_POST['email_order'];
    $fotografia = $_POST['fotografia'];

    $sql="INSERT INTO `tabela`(`numriser`, `name_order`, `lastname_order`, `sasia`, `madhesia`, `cmimi`, `number_phone_order`, `adress_home`, `message_option`, `email_order`) VALUES ('$numriser','$name_order','$lastname_order', '$sasia', '$madhesia', '$cmimi', '$number_phone_order', '$adress_home', '$message_option', '$email_order')";

    $result = mysqli_query($con,$sql);

    if($result)
    {
        echo "<script>alert('Porosia + $name_order')</script>";
    }

    else 
    {
        die(mysqli_error($con));
    }
}


?>

<!DOCTYPE html>
<html>
    <head>   <style> 
*
{
    box-sizing: border-box;
    margin:0;
    padding: 0%;
}

body
{
  
color: white;
background-color: rgb(16, 15, 15);
margin:15px;
}

.majt img 
{
    width: 300px;
    height: 400px;
}

.ndarja 
{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-content: space-between;
    align-items: stretch;
}


.majt , .djatht 
{
    width:100%
}

.majt 
{
    padding: 30px;
    width:50%;
}
.djatht 
{
    margin-left:0%;
}


.permbajtja-fotografite-levizese
{
    position:relative;
    line-height:50px;
}
.para , .prapa 
{
    cursor:pointer;
    width:200px;
}

.pershkrimi p
{
    font-size:20px;
    width:1000px;
}
a 
{
    font-size : 18px;
    font-weight: bold;
    padding:50px;
    margin:10px;
}

.pika 
{
    text-align:center;
    padding:5px;
    margin-top:10px;
}


.forma
{
    display: flex;
	flex-direction: row;
	flex-wrap: nowrap;
	justify-content: space-around;
	align-items: stretch;
	align-content: stretch;
}

.forma-majt label
{
    margin-top:40px;
}

.forma-majt
{
    margin-top:-40px;
}

.forma-djatht, .forma-majt 
{
    display: flex;
	flex-direction: column;
	flex-wrap: nowrap;
	justify-content: space-around;
	align-items: stretch;
	align-content: stretch;
}

.djatht input, label , button , textarea, select
    {
        margin-left:0%;
    }

@media only screen and (min-width:300px) {

    .djatht input, label , button , textarea, select
    {
        margin-left:30%;
    }
    .para , .prapa 
{
    cursor:pointer;
    width:200px;
}

.majt{
    margin-left:10%;
}
.pershkrimi p
{
    font-size:20px;
    line-height:20px;
    width:300px;
}
a 
{
    font-size : 18px;
    font-weight: bold;
    padding:0px;
    margin:0px;
}

.pika 
{
    text-align:center;
    padding:5px;
    width:400px;
}
.ndarja 
{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-content: space-between;
    align-items: stretch;
}

.forma
{
    display: flex;
	flex-direction: column;
	flex-wrap: nowrap;
	justify-content: space-around;
	align-items: stretch;
	align-content: stretch;
}

.forma-djatht, .forma-majt 
{
    display: flex;
	flex-direction: column;
	flex-wrap: nowrap;
	justify-content: space-around;
	align-items: stretch;
	align-content: stretch;
}
}


@media only screen and (min-width:800px) {
    .para , .prapa 
{
    cursor:pointer;
    width:20px;
}

.majt{
    margin-left:00%;
}

.djatht input, label , button , textarea, select
    {
        margin-left:0%;
    }
.para 
{
    right:0%;
}
.ndarja 
{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-content: space-between;
    align-items: stretch;
}

.forma
{
    display: flex;
	flex-direction: row;
	flex-wrap: nowrap;
	justify-content: space-around;
	align-items: stretch;
	align-content: stretch;
}

.forma-djatht, .forma-majt 
{
    display: flex;
	flex-direction: column;
	flex-wrap: nowrap;
	justify-content: space-around;
	align-items: stretch;
	align-content: stretch;
}

.djatht

{
    margin-left:0%;
}
}

.rreshti , .kolona
{
    display:flex;
    flex-direction:column;

}


input , select, textarea, button 
{
    width:150px;
    border-radius:10px;
    padding:5px;
    border-color:blue;
    border:solid blue 2px;
}

button 
{
    background-color:green;
    color:white ;
    border:none;

}

button:hover
{
    background-color:yellowgreen;
    color:black;
    cursor:pointer;
}

label
{
    color:white;
}

.navigimi , .navigimi a
{
    color:white;
    font-size: 17px;
    padding: 5px;
}

.navigimi a:hover, .aktivizuar
{
    background-color: orangered;
    color: white;
    transition: 1.2s ease;
}

@media only screen and (min-width: 300px) {
.navigimi 
{
    display:flex;justify-content:center; flex-direction:column; align-items:center; width:300px;
}
}

@media only screen and (min-width: 800px) {
.navigimi{display:flex;justify-content:center; flex-direction:column; align-items:center; width:300px;}
}

@media only screen and (min-width: 1200px) {
.navigimi{display:flex;justify-content:center; flex-direction:row; width:500px;}
}

    </style>
<title>NIKE AIR JORDAN 4 BLACK CAT</title>
    </head>
    <body>
        
    <header>
        <div class="permbajtja">
            <h1>INFINITY SHOES</h1>
        </div>
    </header>

    <div class="navigimi">
    <a href="index.html">Produktet</a>
            <a href="index.html">Oferta</a>
            <a href="index.html">Orari</a>
            <a href="index.html">Rreth Nesh</a>
            <a href="kontakti.html" class="aktivizuar">Kontakti</a>
        </div>

    <div class="ndarja">
        
        <div class="majt">
             
        <div class="permbajtja-fotografite-levizese" id="permbajtja-fotografite-levizese">
            
           
            <div class="slide-im" id="slide-im">
               
               
                <div class="numrat" id="numrat">
                    1/3
                </div>
                
        <a class="prapa" onclick="tjetra(-1)" id="prapa">&#10094;</a>

<a class="para" onclick="tjetra(1)" id="para">&#10095;</a>
<br>

                <img src="kepucet/nikeairjordan4blackcat/3.jfif" alt="shkembi ne korce">

                <div class="pershkrimi" id="pershkrimi">
                    <p>NIKE AIR JORDAN 4 BLACK CAT</p>
                </div> 

            </div>

            <div class="slide-im" id="slide-im">

                <div class="numrat" id="numrat">
                    2/3
                </div> 
                
                
        <a class="prapa" onclick="tjetra(-1)" id="prapa">&#10094;</a>

<a class="para" onclick="tjetra(1)" id="para">&#10095;</a>
<br>
                 
                <img src="kepucet/nikeairjordan4blackcat/1.jfif" alt="Kodra ne brezovice">

                <div class="pershkrimi" id="pershkrimi">
                    <p>NIKE AIR JORDAN 4 BLACK CAT</p>
                </div>
            </div>

            
            <div class="slide-im" id="slide-im">

                <div class="numrat" id="numrat">
                    3/3
                </div> 
                
                
        <a class="prapa" onclick="tjetra(-1)" id="prapa">&#10094;</a>

<a class="para" onclick="tjetra(1)" id="para">&#10095;</a>
<br>
                 
                <img src="kepucet/nikeairjordan4blackcat/4.jfif" alt="Kodra ne brezovice">

                <div class="pershkrimi" id="pershkrimi">
                    <p style="text-transfrom:uppercase">NIKE AIR JORDAN 4 BLACK CAT</p>
                </div>
            </div>

            
            

        </div> 


        
        <div class="pikat-naviguese" style="display:none;">
            
            <span class="pika" id="pika" onclick="tani(1)">Shkembi</span>

            
            <span class="pika" id="pika" onclick="tani(2)">Kodra</span>

        </div>
        <div class="pikat-naviguese">
            <span class="pika" id="pika">145 &euro;</span>
        </div>
        </div>

        <div class="djatht">

             <h1 style="text-align:center; text-transform:capitalize;">NIKE AIR JORDAN 4 BLACK CAT</h1>
            <h1 style="text-align:center; text-transform:capitalize;">Porosite , Pagesa behet me para ne dore (cash)</h1>
         <form action="form-process.php" method="POST">

            <div class="forma">
            
            <div class="forma-majt" style=" text-transform:capitalize;">
         <label for="numriser" style="color:black;display:none;">id</label> 

   
                
                <input type="text" name="numriser"id="numriser" class="form-control" required style="width:200px; color:black;display:none; z-index:-100;" value="NIKE AIR JORDAN 4 BLACK CAT ID#0026">
                <label for="name_order" style="color:white;">firstname</label> 
                
                <input type="text" name="name_order" id="name_order" class="form-control" required  style="width:200px; color:black;">
                <label for="lastname_order" style="color:white;">lastname</label> 
            
                
            <input type="text" name="lastname_order" id="lastname_order" class="form-control" required style="width:200px; color:black;" >
          
            <label for="sasia" style="color:white;">Sasia</label> 
            
           
            <select name="sasia" id="sasia" style="color:black;width:200px;;">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <label for="madhesia" style="color:white;">madhsia</label> 
                
                <select name="madhesia" id="madhesia" style="color:black;width:200px;">
                <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                </select>
        </div>
        <div class="forma-djatht">
        <label for="cmimi" style="color:black;display:none;">Phone</label> 
                
                <input type="tel" name="cmimi" id="cmimi" class="form-control" required style="width:200px; color:black; display:none;" value="145" > 
                <label for="number_phone_order" style="color:white;">Phone</label> 
                
                <input type="tel" name="number_phone_order" id="number_phone_order" class="form-control" required style="width:200px; color:black;" > 
                <label for="email_order" style="color:white;">Email</label> 
                <br>
                <input type="email_order" name="email_order" id="email_order" class="form-control" required style="width:200px;color:black;">
               
                <label for="adress_home" style="color:white;">Adress</label> 
                
                
                <textarea name="adress_home" id="adress_home" class="form-control" cols="40" rows="10" required style="resize:none; padding:10px; width:200px; color:black; height:150px;"></textarea>
                <label for="message_option" style="color:white;">Message</label> 
                
                
                <textarea name="message_option" id="message_option" class="form-control" cols="40" rows="10" required style="resize:none; padding:10px; width:200px; color:black; height:150px;"></textarea>
              
            </div>
        </div>
        <button class="submit"type="submit" name="submit"style="color:black; margin-left:200px;">Submit</button>

        
        </form>
    </div>
    <script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

<script>
const fotografite = document.getElementsByClassName('slide-im');

const piket = document.getElementsByClassName('pika')

let pozita = 1;

shfaqja(pozita);

function tjetra(numerimi)
{
    shfaqja(pozita += numerimi);
}


function tani(numerimi)
{
    shfaqja(pozita=numerimi);
}

function shfaqja(numerimi)
{
    var i;

    if(numerimi > fotografite.length)
    {
        pozita = 1;
    };

    if(numerimi < 1)
    {
        pozita = fotografite.length; 
    }

    for(i=0; i<fotografite.length; i++)
    {
        fotografite[i].style.display = 'none';
    }

    for(i=0; i<piket.length; i++)
    {
        piket[i].className = piket[i].className.replace(" active" , " ");
    }

    fotografite[pozita-1].style.display = 'block';

    piket[pozita-1].className += " active";
};

</script>

    </body>
</html>