<?php
   include 'header.php';
?>
<style>
 body{
   background-image:url(fruits.jpg);
 }

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: center;
  margin: auto;
}
.mySlides {display:none;}
h1 
{ color:   #F11540 ;
font-family: 'Trocchi', serif;
 font-size: 35px;
 font-weight: normal; line-height: 48px; margin: 0; }
h3
{ color:    #FA5777  ;
font-family: 'Trocchi', serif;
 font-size: 35px;
 font-weight: normal; line-height: 48px; margin: 0; }

</style>
<body id="myPage">
   <div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
 <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Admin</a>
 </div>
 </div>
<br>
<br><br><br><br>
  <center> <header style="color:black"> <h1>Welcome to MediCare</h1>
   <h3>Find right kind of solutions for your ailments </h3>
    </header>
   <center>
<form action="search.php" method="POST">
<input type="text" name="search" placeholder="What are you looking for?" class="searchterm"><br/><br/>
   <button type="submit" name="submit-search" class="searchbutton"> Search </button>
</form>
</center>
</center>
<br><br><br><br><br><br>
<h1>Health Articles</h1>
 &nbsp; &nbsp; <a href="article1.html"><img src="art.jpg"  width="400px" height="300px" style="border:5px solid black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="art2.jpg" width="400px" height="300px" style="border:5px solid black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="art3.jpg" width="400px" height="300px" style="border:5px solid black">
<main>
   <footer style="color:white" class="copy">&copy; copyrights 2020 </footer></center>
</main>


<script async>(function(w, d) { w.CollectId = "5eafc99da9846e4e4724377a"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>

</body>
</html>