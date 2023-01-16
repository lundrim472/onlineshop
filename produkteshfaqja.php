

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUKTET - INFINITY SHOES</title>
    <style>

.msfoto img{
    width: 100px;
    height: 50px;
}

.media-sociale
{
    background-color: aliceblue;
}
*
{
box-sizing: border-box;
margin:0 ;
padding: 0%;
}

body 
{
color: white;
background-color: rgb(16, 15, 15);
}

a
{
color: black;
text-decoration: none;
transition: 1s;
}


button
{
background-color: rgb(240, 234, 234);
color: white;
cursor: pointer;
height: 25px;
border: none;
border-bottom-right-radius: 5px;
width: 150px;
}

button:hover 
{
background-color: rgb(203, 191, 191);   
color: black;
transition: 1.5s ease;
}
.informimi
{
display: flex;
flex-direction: row;
justify-content: space-between;   
padding: 5px;
}

.infm i{
color: black;
}

.infm
{
background-color: aqua;
}

.container 
{
display: flex;
justify-content: space-between;
flex-direction: row;
}
.counter-grid
{
display: grid;
grid-template-columns: 1fr 1fr ;
grid-column-gap: 20px;
width: 100%;
position: relative;

}

.counter-img 
{
width: 500px;
height: 300px;
margin: 0%;
padding: 0%;
}

.counter-item 
{
display: block;
position: relative;
margin-bottom: 10px;
}
#ne-veti 
{
width: 100%;
height:auto;
background-image:url(fotografite/fotoegjate.jpg);
background-position: 0%;
background-size: cover;
}


@keyframes slide-up {
0%   { left:0px; top:0px; opacity: 0;}
25%  { left:200px; top:0px; opacity: 0.2;}
50%  { left:200px; top:0px; opacity: 0.4;}
75%  {left:100px; top: 00px; opacity: 0.6;}
100% { left:0px; top:0px; opacity: 1;}

}

.hebs
{
width: 100px;
height: 80px;
}

.navigimi 
{
display: flex;
justify-content: space-between;
flex-direction: row;
}

.navigimi-djathte , .navigimi-djathte a
{
color:white;
font-size: 17px;
padding: 20px;
}

.aktivizuar
{
background-color: orangered;
color: white;
transition: 1.2s ease;
}

.filteri a:hover{
background-color: orangered;
color: white;
transition: 1.2s ease;
}

.aktivizuar:hover{
background-color: rgb(146, 63, 63);
}

/*klasa slide-im te mos shieht*/
.slide-im
{
display: none;
}


/*fotografite te kene gjatesi 600px dhe gjeresi 100%*/
img
{
width: 100%;
height: 600px;
}

.produkt-detaje img 
{
height:400px;
}

/*klasa fotografite-permbajtja*/
.fotografite-permbajtja
{
/*te kete  pozicion relativ*/
position: relative;

/*gjeresi 100%*/
width: 100%;
}

/*klasa pershkrimi*/
.pershkrimi
{
/*te keteposzite absolute*/
position: absolute;

/*gjeresi 100%*/
width: 50%;
/*opacity 0.8*/
opacity: 0.8;
padding:0px;
height:120px;

top:0;
margin-top:300px;
margin-left:30px;


/*teksti te jete ne qender*/
text-align: center;

/*prapavije blue e holle*/
background-color: rgb(221, 221, 242) ;

/*poshte 8px*/
bottom: 8px;
}

/*klasa numerimi*/
.numerimi
{
color:white;
position: absolute;
top:0;
}

/*klasa piket-kalimi , te vendoset ne qender*/
.piket-kalimi
{
text-align: center;
}

/*klasa piket*/
.piket
{
/*hapsirat 3px 10px 3px 10px*/
padding-top: 3px;
padding-bottom: 3px;
padding-right: 10px;
padding-left: 10px;

/*prapavija e verdhe*/
background-color: yellow;
}

/*klasa active*/
.active
{
/*prapavija e portokallt*/
background-color: orange;
}

.counter-img:hover
{
transform: scale(1.1);
transition: 1.2s;
}



@media only screen and (min-width:300px){
.mediasociale{
    padding-left: 30%;
    display: grid;
    grid-template-columns: 1fr;
}
.fundi  
{
padding-left: 30%;
display: grid;
grid-template-columns: 1fr;
width: 100%;
}
.pershkrimi
{
/*te keteposzite absolute*/
position: absolute;

/*gjeresi 100%*/
width: 50%;
/*opacity 0.8*/
opacity: 0.8;
padding:0px;
height:300px;

top:0;
margin-top:250px;
margin-left:30px;


/*teksti te jete ne qender*/
text-align: center;

/*prapavije blue e holle*/
background-color: rgb(221, 221, 242) ;

/*poshte 8px*/
bottom: 8px;
}

.navigimi-djathte 
{
display: flex;
flex-direction: column;
}

.informimi{
display: flex;
flex-direction: column;
}
#ne-veti 
{
width: 100%;
height: 1300px;
background-image: url(fororgrafite/fotoegjate.jpg);
background-position: 50%;
background-size: cover;
}
.container 
{
display: flex;
justify-content: space-between;
flex-direction: column;
}

.counter-grid
{
display: grid;
grid-template-columns: 1fr;
grid-column-gap: 20px;
width: 100%;
position: relative;

}

.navigimi , .informimi
{
display: flex;
justify-content: space-between;
flex-direction: column;
padding-left: 40%;
}

.navigimi a 
{
width: 120px;
}
.counter-img 
{
width: 100%;
height: 300px;
margin: 0%;
padding: 0%;
}#rr-id-grid 
{
display: grid;
grid-template-columns: 1fr;
}
.rradhitja 
{
display: grid;
grid-template-columns: 1fr;
}
.pershkrimi-linje
{
display: flex;
flex-direction: column;
}

.kutia
{

display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
align-content: center;
width: 100%;
padding: 50px;
}

.oferta 
{
display: grid;
grid-template-columns: 1fr;
}

}


@media only screen and (min-width:800px){
.mediasociale{
    padding-left: 20%;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
}
.fundi{
padding-left: 20%;
display: grid;
grid-template-columns: 1fr 1fr 1fr;
width: 100%;
}
.pershkrimi-linje
{
display: flex;
flex-direction: column;
}
.informimi{
display: flex;
flex-direction: column;
}
.navigimi-djathte 
{
display: flex;
flex-direction: column;
}
.pershkrimi
{
/*te keteposzite absolute*/
position: absolute;

/*gjeresi 100%*/
width: 50%;
/*opacity 0.8*/
opacity: 0.8;
padding:0px;
height:120px;
right: 0;
float: right;

/*teksti te jete ne qender*/
text-align: center;

/*prapavije blue e holle*/
background-color: rgb(221, 221, 242) ;

/*poshte 8px*/
bottom: 8px;
}

.navigimi, .informimi
{
display: flex;
justify-content: space-between;
flex-direction:  column;
padding-left: 40%;
}
.counter-grid
{
display: grid;
grid-template-columns: 1fr 1fr;
grid-column-gap: 20px;
width: 100%;
position: relative;
}

.container 
{
display: flex;
justify-content: space-between;
flex-direction: column;
}

#ne-veti 
{
width: 100%;
height: 1200px;
background-image: url(fororgrafite/fotoegjate.jpg);
background-position: 0%;
background-size: cover;
}
.rradhitja 
{
display: grid;
grid-template-columns: 1fr 1fr;
}
.pershkrimi-linje
{
display: flex;
flex-direction: row;
}

.kutia
{

display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
align-content: center;
width: 100%;
padding: 50px;
}

.oferta 
{
display: grid;
grid-template-columns: 1fr 1fr ;
}



}
@media only screen and (max-width: 1000px) {
img 
{
width: 100%;
}
}
@media only screen and (min-width:1200px){
.fundi{
padding-left: 20%;
display: grid;
grid-template-columns: 1fr 1fr 1fr;
width: 100%;
}
.oferta 
{
display: grid;
grid-template-columns: 1fr 1fr 1fr 1fr;
}
.pershkrimi-linje
{
display: flex;
flex-direction: row;
}
.informimi{
display: flex;
flex-direction: row;
}
.navigimi-djathte 
{
display: flex;
flex-direction: row;
}
.pershkrimi{
/*te keteposzite absolute*/
position: absolute;

/*gjeresi 100%*/
width: 50%;
/*opacity 0.8*/
opacity: 0.8;
padding:0px;
height:120px;

top:0;
margin-top:300px;
margin-left:30px;


/*teksti te jete ne qender*/
text-align: center;

/*prapavije blue e holle*/
background-color: rgb(221, 221, 242) ;

/*poshte 8px*/
bottom: 8px;
}

.counter-grid
{
display: grid;
grid-template-columns: 1fr 1fr ;
grid-column-gap: 20px;
width: 100%;
position: relative;

}
.container 
{
display: flex;
justify-content: space-between;
flex-direction: row;
}
#ne-veti 
{
width: 100%;
height: auto;
background-image: url(fororgrafite/fotoegjate.jpg);
background-position: 0%;
background-size: cover;
}
.navigimi 
{
display: flex;
justify-content: space-between;
flex-direction: row;
padding: 0%;
}
.informimi
{
display: flex;
flex-direction: row;
justify-content: space-between;   
padding: 5px;
}

.rradhitja 
{
display: grid;
grid-template-columns: 1fr 1fr 1fr 1fr;
justify-content: center;
align-items: center;
align-content: center;
height: 400px;
margin-left: 10%;
}

.kutia
{

display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
align-content: center;
width: 100%;
padding: 50px;
}

.numeruesi-produkt 
{
display: flex;
flex-direction: column;
flex-wrap: nowrap;
justify-content: center;
align-items: center;
align-content: center;

}

.numeruesi-produkt img
{
width: 200px;
height: 150px;
}

.numeruesi-produkt img , .numeruesi
{
display: flex;
flex-direction: row;
flex-wrap: nowrap;
justify-content: center;
align-items: center;
align-content: center;
}

}
.numeruesi-produkt img
{
width: 200px;
height: 150px;
}
.oferta, .oferta-pjesa-pare
{
display: flex;
justify-content: center;
align-items: center;
flex-direction: row;
}

.pershkrimi-oferta-pare
{
display: flex;
justify-content: center;
align-items: center;
flex-direction: column; 
}

.produkti-oferte-fotografi
{
width: 300px;
height: 200px;
}

.produktet-levizese {
max-width: 1000px;
display: flex;
flex-direction: row;
justify-content: center;
margin: 0 auto;
}

.oferta 
{
display: flex;
flex-direction: row;
flex-wrap: nowrap;
justify-content: stretch;
align-items: stretch;
}

.produktet-levizese
{
max-width: 1000px;
display: flex;
justify-content: center;
margin:0 auto
}

.shigjeta
{
width: 40px;
height: 30px;
margin:0px 15px;
margin-top: 100px;
}

.section
{
width:100%;
margin:0 auto;
display:flex;
justify-content: flex-start;
align-items: center;
flex-wrap: nowrap;
overflow-x: auto;
}


.section .korniza-produkti
{
flex:0 0 auto;
cursor:pointer;
margin:5px;
overflow:hidden;
transform: scale(.95);
transition: all .3s;
}

.korniza-produkti img 
{
width: 200px;
height: 200px;
}

.jeshile
{
color:green;
font-size: 20px;
font-weight: 1000;
text-decoration: none;
}

.produkti-detaje p 
{
color:red;
}

.produkti-detaje 
{
background-color: lightgray;
width: 200px;
border: solid lightgray 1px;
text-align: center;
}

.kuqe 
{
text-decoration: line-through;
font-weight: 700;
}


.section .korniza-produkti:hover
{
transform: scale(1);
cursor: pointer;
}
.section::-webkit-scrollbar
{
height: 5px;
width: 2px;
border: 1px solid dodgerblue;
background-color: black;
}

.section::-webkit-scrollbar-track
{
--webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}

.section::-webkit-scrollbar-thumb
{
background-color: white;
width: 100px;
outline: 1px solid #eee;
}



.produkti
{
margin-bottom: 30px;
width: 150px;
}

.produkti img 
{
width: 200px;
height: 200px;
}

#fshehjaShfaqja {
display: none;
}


.shfaqja 
{
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
}

a
{
    padding:10px;
}

#search 
{
    margin-bottom:20px;
    margin-left:0%;
    padding:10px;
    border-radius:15px;
}

@media only screen and (min-width:300px) {
.produktet 
{
display: grid;
grid-template-columns: 1fr ;
margin-left: 30%;
}
.kerkimi , #search
{
    display: flex;
	flex-direction: column;
	flex-wrap: nowrap;
	justify-content: center;
	align-items: center;
	align-content: center;
}
}
@media only screen and (min-width:800px) {
.produktet 
{
display: grid;
grid-template-columns: 1fr 1fr;
margin-left: 15%;
}

}
@media only screen and (min-width:1200px) {
.produktet 
{
display: grid;
grid-template-columns: 1fr 1fr 1fr 1fr;
margin-left: 10%;
}
}

img 
{
    transform: scale(1);
    cursor:pointer;
}

img:hover 
{
    transform: scale(1.2);
    transition:1s ease;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="informimi">
        <div class="infd">
            <i class="bi bi-envelope"></i>
            <p>support@gmail.com</p>
        </div>
        <div class="infmm">
            <i class="bi bi-telephone"></i>
            <p>1234567890</p>
        </div>
        
        <div class="infm" style="color: black;">
                <i class="bi bi-instagram"></i>
                <i class="bi bi-facebook"></i>
                <i class="bi bi-linkedin"></i>
        </div>
    </div>
    <div class="navigimi">
        <div class="navigimi-majte">
            <h1 style="text-transform: capitalize;">INFINITY SHOES</h1>
        </div>


        <div class="navigimi-djathte">
            <a href="index.html">Ballina</a>
            <a href="index.html">Produktet</a>
            <a href="index.html">Oferta</a>
            <a href="index.html">Orari</a>
            <a href="index.html">Rreth Nesh</a>
            <a href="kontakti.html" class="aktivizuar">Kontakti</a>
        </div>

       
    </div>

            <div class="kerkimi" style="margin-bottom:20px;">
                <form action="#" onsubmit="return false" >
                    <input type="text" id="search" placeholder="Kerko produkte...">
                    <br>
                    <div class="filteri"   style="display:none;">
                        <a href="#" class="btn aktivizuar" data-filter="tegjitha"  style="display:none;">Te gjitha</a>
                        <a href="#" class="btn" data-filter="adidas"  style="display:none;">Adidas</a>
                        <a href="#" class="btn" data-filter="nike"  style="display:none;">Nike</a>
                        <a href="#" class="btn" data-filter="jordan"  style="display:none;">Jordan</a>
                    </div>
                </form>
            </div>
    
    
            <div class="permbajtjaProdukte" style="display:block;">

<div class="produktet" style="color:black;">

    <div class="produkti">
        <img src="kepucet/nikeairjordan4/1.jpeg" alt="testature corsair" id="corsair" style="cursor: pointer;">
        <div class="produkti-detaje">
            <h2>Nike Air Jordan 4</h2>
             <p>
                <span id="mac-produkte-cmimi-vjeter" class="kuqe">205 &euro;</span>
                <span id="mac-produkte-cmimi-ri" class="jeshile">147 &euro;</span>
            </p>
            <button><a href="nikeairjordan4.php" target="_blank">Shto në shportë</a>
            </button>
        </div>
    </div>

    <div class="produkti">
    <img src="kepucet/nikeairuptempo2/1.jfif" alt="testature corsair" id="corsair" style="cursor: pointer;">
        <div class="produkti-detaje">
            <h2>Nike Air UpTempo</h2>
             <p>
                <span id="mac-produkte-cmimi-vjeter" class="kuqe">205 &euro;</span>
                <span id="mac-produkte-cmimi-ri" class="jeshile">147 &euro;</span>
            </p>
            <button><a href="nikeairUpTempo0023.php" target="_blank">Shto në shportë</a>
            </button>
        </div>
    </div>

    <div class="produkti">
    <img src="kepucet/nikeairuptempo/1.jfif" alt="testature corsair" id="corsair" style="cursor: pointer;">
        <div class="produkti-detaje">
            <h2>Nike Air UpTempo</h2>
             <p>
                <span id="mac-produkte-cmimi-vjeter" class="kuqe">205 &euro;</span>
                <span id="mac-produkte-cmimi-ri" class="jeshile">147 &euro;</span>
            </p>
            <button><a href="nikeairUpTempo0022.php" target="_blank">Shto në shportë</a>
            </button>
        </div>
    </div>

    <div class="produkti">
    <img src="kepucet/nikeairmax2021blue/1.jfif" alt="testature corsair" id="corsair" style="cursor: pointer;">
        <div class="produkti-detaje">
            <h2>Nike Air Max 2021 Blue</h2>
             <p>
                <span id="mac-produkte-cmimi-vjeter" class="kuqe">180 &euro;</span>
                <span id="mac-produkte-cmimi-ri" class="jeshile">122 &euro;</span>
            </p>
            <button><a href="nikeairmax2021blue0013.php" target="_blank">Shto në shportë</a>
            </button>
        </div>
    </div>

    <div class="produkti">
    <img src="kepucet/nikeairmax95/1.jfif" alt="testature corsair" id="corsair" style="cursor: pointer;">
        <div class="produkti-detaje">
            <h2>Nike Air Max 95</h2>
             <p>
                <span id="mac-produkte-cmimi-vjeter" class="kuqe">180 &euro;</span>
                <span id="mac-produkte-cmimi-ri" class="jeshile">117 &euro;</span>
            </p>
            <button><a href="nikeairmax95_0007.php" target="_blank">Shto në shportë</a>
            </button>
        </div>
    </div>

    <div class="produkti">
    <img src="kepucet/timberlandclassic/1.jfif" alt="testature corsair" id="corsair" style="cursor: pointer;">
        <div class="produkti-detaje">
            <h2>Timberland Classic</h2>
             <p>
                <span id="mac-produkte-cmimi-vjeter" class="kuqe">235 &euro;</span>
                <span id="mac-produkte-cmimi-ri" class="jeshile">155 &euro;</span>
            </p>
            <button><a href="timberlandclassic0014.php" target="_blank">Shto në shportë</a>
            </button>
        </div>
    </div>

    <div class="produkti">
    <img src="kepucet/nikeairjordan4universityblue/1.jfif" alt="testature corsair" id="corsair" style="cursor: pointer;">
        <div class="produkti-detaje">
            <h2>Nike Air Jordan 4 University Blue</h2>
             <p>
                <span id="mac-produkte-cmimi-vjeter" class="kuqe">225 &euro;</span>
                <span id="mac-produkte-cmimi-ri" class="jeshile">145 &euro;</span>
            </p>
            <button><a href="nikeairjordan4universityblue0019.php" target="_blank">Shto në shportë</a>
            </button>
        </div>
    </div>

    <div class="produkti">
    <img src="kepucet/nikeairjordan4metalicred/1.jfif" alt="testature corsair" id="corsair" style="cursor: pointer;">
        <div class="produkti-detaje">
            <h2>Nike Air Jordan 4 Metalic Red</h2>
             <p>
                <span id="mac-produkte-cmimi-vjeter" class="kuqe">225 &euro;</span>
                <span id="mac-produkte-cmimi-ri" class="jeshile">145 &euro;</span>
            </p>
            <button><a href="nikeairjordan4metalicred0017.php" target="_blank">Shto në shportë</a>
            </button>
        </div>
    </div>

    <div class="produkti">
    <img src="kepucet/nikeairjordan4blackmilitary/1.jfif" alt="testature corsair" id="corsair" style="cursor: pointer;">
        <div class="produkti-detaje">
            <h2>Nike Air Jordan 4 Black Military</h2>
             <p>
                <span id="mac-produkte-cmimi-vjeter" class="kuqe">225 &euro;</span>
                <span id="mac-produkte-cmimi-ri" class="jeshile">145 &euro;</span>
            </p>
            <button><a href="nikeairjordan4blackmilitary0025.php" target="_blank">Shto në shportë</a>
            </button>
        </div>
    </div>

    <div class="produkti">
    <img src="kepucet/nikeairjordan4blackmilitary/1.jfif" alt="testature corsair" id="corsair" style="cursor: pointer;">
        <div class="produkti-detaje">
            <h2>Nike Air Jordan 4 Black Cat</h2>
             <p>
                <span id="mac-produkte-cmimi-vjeter" class="kuqe">225 &euro;</span>
                <span id="mac-produkte-cmimi-ri" class="jeshile">145 &euro;</span>
            </p>
            <button><a href="nikeairjordan4blackcat0026.php" target="_blank">Shto në shportë</a>
            </button>
        </div>
    </div>

</div>

</div>

<script>
const butoni = document.querySelectorAll('.btn');
const dyqaniproduktet = document.querySelectorAll('.produkti');
for(var i=0; i<butoni.length; i++){
    butoni[i].addEventListener('click',(e) =>{
        //nese perdoruesi nuk klikon ne njarje ateher 
        //ta vazhdoje punen sipas deshires
        /*
        nese i kemi butonat edhe nese klikon majtas produktet te shkojn nga majtas dhe
        anasjelltas
        ne momentin qe nuk klikon ne buton ta vazhdoj punen e vete 
        */
        e.preventDefault();

        //titujt i filtrojme
        const filter = e.target.dataset.filter;

        console.log(filter);

        /*
        nese dyqaniproduktet 
        per secilin produkt te miren te dhenat
        ora , kemisha, fustane

        pra emrin e dyte qe e kemi vendosur ne klase
        */
        dyqaniproduktet.forEach((product) =>{
            //nese filteri eshte i barabart me te gjitha
            if(filter==='tegjitha'){
                //produktet brenda tij te shfaqen ne blocl
                product.style.display = 'block'
            }

            //nese e marr nje permbajtje te filtrohet sipas klases
            else if(product.classList.contains(filter)){
                //produktet brenda tij te shfaqen ne blocl
                product.style.display = 'block'
            }

            //tjeter
            else{
                //produktet tjera ti fsheh
                product.style.display = 'none'
            }
        })
    } )
};

const search = document.getElementById('search');
const tedhenateproduktit = document.querySelectorAll('.produkti-detaje h2');
    search.addEventListener('keyup', filtroproduktet);

function filtroproduktet(e){
    
    //kur diksuh shkrun me shkronja te ndryshme te nihen si te vogla
    const text = e.target.value.toLowerCase();

    //per cdo te dhene te miret funksioni qe i merr product

    tedhenateproduktit.forEach(function(product){

        //e kemi rkiju var item ku merr vleren e vleres se pare nga permbajtja e textit
        const item = product.firstChild.textContent;

        //nese elementi konvertohet me te vogla , 
        if(item.toLowerCase().indexOf(text) != -1){
            //nese ka vlere me ate shkronje te shfaqet
            product.parentElement.parentElement.style.display = 'block';
        }
        //nese ska vlere te mos shfaqet
        else{
            product.parentElement.parentElement.style.display = 'none'
        }
    })
}
</script>
</body>
</html>