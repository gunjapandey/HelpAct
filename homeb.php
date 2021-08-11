<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
body{
background-image : url('download.jpg');
background-repeat: no-repeat;
background-size: 1500px 700px;
}

.navbar {
  width: 100%;
  
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #C0C0C0;
  text-shadow: 2px 2px #000000;
  text-shadow:3px 3px 3px black;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }

  .logo
    {
      position: absolute;
      top: 60px;
      left: 80px;
    }
}
.button {

  display: inline-block;
  border-radius: 4px;
  background-color: #ffcc00;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 500px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  box-shadow: 5px 3px 3px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {

  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
body{ 
    text-align: center; 
     
  font-family: sans-serif; 
  font-weight: 100; 
} 
h1{ 
  color: #ffcc00; 
  font-weight: 100; 
  font-size: 40px; 
  margin: 40px 0px 20px; 
  font-family: cursive;
  text-shadow: 2px 2px #000000;
  text-shadow:3px 3px 3px black;
} 
 #clockdiv{ 
    text-shadow: 2px 2px #000000;
  text-shadow:3px 3px 3px black;
  font-family: cursive;
  color: #fff; 
    display: inline-block; 
    font-weight: 100; 
    text-align: center; 
    font-size: 30px; 

} 
#clockdiv > div{ 
    padding: 10px; 
    border-radius: 3px; 
    background: #ffcc00; 
    display: inline-block; 
} 
#clockdiv div > span{ 
    padding: 15px; 
    border-radius: 3px; 
    background: #00816A; 
    display: inline-block; 
} 
smalltext{ 
    padding-top: 5px; 
    font-size: 16px; 
} 
</style>
<body>
<h1 style="color:white;font-family:cursive;">H E L P A C T</h1>
<h3 style="color:white;text-shadow: 2px 2px #000000;
  text-shadow:3px 3px 3px black;font-family: cursive;">Don't turn your back to those in need.</h3>
<div class="navbar">
  <a class="active" href="home.html"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="search.html"><i class="fa fa-fw fa-search"></i> Search</a> 
  <a href="contact.html"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="login.php"><i class="fa fa-fw fa-user"></i> Login</a>
  <a href="volunteer.html"><i class="fa fa-fw fa-user"></i> Become a volunteer</a>
  
</div>
<center><button class="button" onclick='location.href="donator.html"'; style="vertical-align:middle;margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:2%;text-shadow: 2px 2px #000000;
  text-shadow:3px 3px 3px black;font-family: cursive;"><span>I would like to donate.</span></button></center>

  <center><button class="button" onclick='location.href="fundraiser.html"'; style="vertical-align:middle;margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:2%;text-shadow: 2px 2px #000000;
  text-shadow:3px 3px 3px black;font-family: cursive;"><span>I would like to start a fundraiser.</span></button></center>

  <center><button class="button" onclick='location.href="Volunteer.html"'; style="vertical-align:middle;margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:2%;text-shadow: 2px 2px #000000;
  text-shadow:3px 3px 3px black;font-family: cursive;"><span>Become a Volunteer.</span></button></center>


<p id="demo"></p> 
</body>
</html> 