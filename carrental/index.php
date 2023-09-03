<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="styleindex.css">
 
  <title>carrental-Home Page</title>
</head>
<style>
  body{
    background-image: url("wholebg.png");
  background-size: cover; /* Adjust the image scaling */
  background-repeat: no-repeat;
  background-attachment: fixed;
  }
  .purple-box{
  background-color:purple;
  margin: 25px 50px 25px 50px;
  height:30%;
  
  

}.carousel-inner > .item > img, .carousel-inner > .item > a > img {
  width: 100%;
}
ul {
list-style-type: none;
padding: 2px;
overflow: hidden;


}
.purple-box h1{
  color:orange;
  font-weight: bold;
  float: left;
  padding: 5px;
  margin:20px;

}
.purple-box li a{
  color:white;
  font-variant: small-caps;
  font-weight: bold;
  float: right;
  padding:5px;
  margin:30px;
  text-decoration:none;
  font-family: Serif;
}
.purple-box li a:hover{
  color:orange;
  text-decoration:none;

}.carousel-caption{
  top: 40%;
  font-size: 40px;
  font-family: Fantasy;


}.carousel-caption button{
  font-family: Serif;
}
.About {
  
  text-align: center;
  padding-top: 5%;
}

.About h2{
font-family: Fantasy;
color:orange;
font-weight: bolder;
font-size:60px;

}
.About h1{
font-family: Fantasy;
font-size:70px;

}
.About img{
height: fit-content;


}.About p{
text-align: center;
font-size: 20px;
font-family: serif;
font-weight: lighter;


}
.About .text{
            font-weight: 300;
            align-content: center;
            display: flex;
            justify-content: center;
            margin-left: 25%;
            width: 50%;
            flex-wrap: wrap;
            justify-content: center;
          
            text-align: justify;
}
.About .card-horizontal {
display: center;
flex: 1 1 auto;

}
.About .card_container {
  padding-top: 5%;
width: 35%;
height: 60%;

margin: auto;
display: grid;
grid-template-columns: repeat(3,1fr);
grid-gap: 30px;
}
.About .card_container p{
font-family: Fantasy;
color:rgb(13, 13, 70)
}

/* Remove extra left and right margins, due to padding */
.About.row {margin: 12px;

}.About.card{
float: left;
}

/* Clear floats after the columns */
.About .row:after {
content: "";
display: table;
clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
.column {
  width: 100%;
  display: block;
  margin-bottom: 20px;
}
}

/* Style the counter cards */
.card {
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
padding: 16px;
text-align: center;
background-color: #f1f1f1;
}
  
  .form-container {
 
  margin: 0 200px;
  padding: 3px;
  
}.input-box select {
    width: 100%;
    height:100%; /* Adjust the width as needed */
  }

/* Style input boxes container */
.input-box-container {
  display: flex;
  flex-wrap: wrap;
  gap: 50px;
  margin-bottom: 10px;
}

.input-box {
  flex: 1;
  display: flex;
  flex-direction: column;
}

.input-box span {
  margin: 0px;
  
}

.input-box input,
.input-box button {
  padding: 8px;
  border: 1px solid #ccc;
 
  outline: none;
}

/* Style the submit button */
.input-box .btn {
  display: block;
  margin-top: 20px;
  margin-left: 5px;
  width: 80%;
  padding: 5px;
  background-color: black;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

/* Style the submit button on hover */
.form-container .btn:hover {
  background-color: rgb(255, 165, 0);
  border-color:black;
  border-style: solid;
  border-width: 1px;
}.types{
   text-align: center;
    margin-bottom:30px;
    padding-top: 5%;
}
.types h2{
  font-family: Fantasy;
  color:orange;
  font-weight: bolder;
  font-size:60px;
  
}
.types h1{
  font-family: Fantasy;
  font-size:70px;

}.grid-item .btn{
  background: transparent;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 5px;
  text-align: center;

}.grid-container {
  display: grid;
  grid-template-columns:auto auto auto ;

  padding: 10px;
}
.grid-item {
  display: flex;
 margin-left:20%;
  align-items: stretch;
  padding: 10px;
  font-size: 25px;
  text-align: center;
}.grid-item  a{
 color:black;
  text-decoration:none;
  font-family: Serif;
}
.grid-item  a:hover{
  box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.6);
}.cardH{
  font-size:30px;
  font-weight:20px;
  
}
.review{
  text-align: center;
    margin-bottom:30px;
    padding-top: 5%;
}
.review h2{
  font-family: Fantasy;
  color:orange;
  font-weight: bolder;
  font-size:60px;
  
}
.review h1{
  font-family: Fantasy;
  font-size:70px;

}
  </style>
<body>

<div class="purple-box">
  <ul>
    <h1>Royal Cars</h1>
    
   <li> |</l1i>
    <li><a href="signin.php">REGISTER/LOGIN</a></li>
    
    <li><a href="#">CONTACT</a></li>
    <li><a href="#">SERVICES</a></li>
    <li><a href="#">ABOUT</a></li>
    

</ul>
</div>

<div class="form-container">
  <form action="">
    <div class="input-box-container">
      <div class="input-box">
        <span>Source</span>
        <select  name="" id="">
        <option value="" disabled selected>Select source</option>
          <option value="place1">Ruby</option>
          <option value="place2">New Town</option>
          <option value="place3">Jadavpur</option>
          <option value="place3">Kalighat</option>
          <option value="place3">Gariahat</option>
          <option value="place3">Garia</option>
          <option value="place3">Hazra</option>
          <option value="place3">Lake Town</option>
          <option value="place3">Biswa Bangla</option>
          <option value="place3">Patuli</option>
          <!-- Add more options as needed -->
        </select>
      </div>
      <div class="input-box">
        <span>Destination</span>
        <select name="" id="">
        <option value="" disabled selected>Select Destination</option>

        <option value="place1">Ruby</option>
          <option value="place2">New Town</option>
          <option value="place3">Jadavpur</option>
          <option value="place3">Kalighat</option>
          <option value="place3">Gariahat</option>
          <option value="place3">Garia</option>
          <option value="place3">Hazra</option>
          <option value="place3">Lake Town</option>
          <option value="place3">Biswa Bangla</option>
          <option value="place3">Patuli</option>
          <!-- Add more options as needed -->
        </select>
      </div>
      <div class="input-box">
        <span>Pick-Up Date</span>
        <input type="date" name="" id="">
      </div>
      <div class="input-box">
        <span>Return Date</span>
        <input type="date" name="" id="">
      </div>
      <div class="input-box">
        <input type="submit" name="" id="" class="btn">
      </div>
      
    </div>
    
  
  
  </form>
</div>

<div class="container">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="2ndcar.jpeg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
        
         <h4>Rent Car</h4>
         <h1>Best Rental Cars <br> At Your Location</h1>
         <button type="button" class="btn btn-warning">BOOK NOW</button>

        </div>
      </div>

      <div class="item">
        <img src="2ndcar.jpeg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
        <h4>Rent Car</h4>
         <h1>Best Rental Cars <br> At Your Location</h1>
         <button type="button" class="btn btn-warning">BOOK NOW</button>
        </div>
      </div>
    
      <div class="item">
        <img src="2ndcar.jpeg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
        <h4>Rent Car</h4>
        <B> <h1>Best Rental Cars <br> At Your Location</h1><B>
         <button type="button" class="btn btn-warning">BOOK NOW</button> 
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="About">
    <h2>01</h2>
 <h1>Welcome to Royal cars</h1>
 <img src="about.png" alt="about image">
 <div class="text"><p>Welcome to Royal Cars, your trusted source for premium car rentals.
   With a passion for delivering exceptional experiences, we offer a diverse fleet of well-maintained 
   vehicles that cater to every journey. From city explorations to cross-country adventures, our 
   commitment to quality, convenience, and customer satisfaction sets us apart. Discover freedom on 
    the road with Royal cars.</p></div>

<div class="card_container">
  <div class="column">
    <div class="card">
    <p>24/7 <br>service<br> support</p>
    </div>
  </div>

  <div class="column">
    <div class="card" style="background-color:orange;">
    
      <p>car<br> reservation<br> anytime</p>
      
    </div>
  </div>
  
  
  <div class="column">
    <div class="card">
    <p>Lots of<br> Pickup <br>Location</p>
    </div>
  </div>
</div>


</div>

<div class="types">
<h2>02</h2>
<h1>Available Cars</h1>
<div class="grid-container">
<div class="grid-item">
  <a href="" class="btn">
    <img class="cardImg" src="audi.jpeg" alt="Card image" style="width:100% ,height:50%">
    <div class="cardB">
      <h4 class="cardH">Audi A4</h4>
      <p class="cardT">Ac fare: Rs 36/km & Rs5600/day<br>
      Non-Ac fare: Rs 21/km & Rs2600/day
    </p>
      
    </div>
    </a>
  </div>

  <div class="grid-item">
  <a href="" class="btn">
    <img class="cardImg" src="hyun.jpeg" alt="Card image" style="width:100% ,height:50%">
    <div class="cardB">
      <h4 class="cardH">Hyundai Creta</h4>
      <p class="cardT">Ac fare: Rs 22/km & Rs2900/day<br>
      Non-Ac fare: Rs 16/km & Rs1900/day
    </p>
      
    </div>
    </a>
  </div>
  <div class="grid-item">
  <a href="" class="btn">
    <img class="cardImg" src="bmw.jpg" alt="Card image" style="width:100% ,height:50%">
    <div class="cardB">
      <h4 class="cardH">BMW 6 Series</h4>
      <p class="cardT">Ac fare: Rs 39/km & Rs6500/day<br>
      Non-Ac fare: Rs 30/km & Rs5000/day
    </p>
      
    </div>
    </a>
  </div>

  

  <div class="grid-item">
  <a href="" class="btn">
    <img class="cardImg" src="audi.jpeg" alt="Card image" style="width:100% ,height:50%">
    <div class="cardB">
      <h4 class="cardH">Audi A4</h4>
      <p class="cardT">Ac fare: Rs 36/km & Rs5600/day<br>
      Non-Ac fare: Rs 21/km & Rs2600/day
    </p>
      
    </div>
    </a>
  </div>
  <div class="grid-item">
  <a href="" class="btn">
    <img class="cardImg" src="ranger.jpeg" alt="Card image" style="width:100% ,height:50%">
    <div class="cardB">
      <h4 class="cardH">Land Rover Ranger Rover</h4>
      <p class="cardT">Ac fare: Rs 41/km & Rs6100/day<br>
      Non-Ac fare: Rs 32/km & Rs4000/day
    </p>
      
    </div>
    </a>
  </div>
  <div class="grid-item">
  <a href="" class="btn">
    <img class="cardImg" src="audi.jpeg" alt="Card image" style="width:100% ,height:50%">
    <div class="cardB">
      <h4 class="cardH">Audi A4</h4>
      <p class="cardT">Ac fare: Rs 36/km & Rs5600/day<br>
      Non-Ac fare: Rs 21/km & Rs2600/day
    </p>
      
    </div>
    </a>
  </div>

</div>        
</div>


<div class="review">
<h2>03</h2>
<h1>Our Customer </h1>
</div>





    
</body>

<a href="logout.php" class="btn btn-warning">Logout</a>

</html>