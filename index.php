<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="images/IMG_20231105_202217_434-removebg.png">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="CSSFiles/Normalize.css" />
  <!-- Font Awesome Library -->
  <link rel="stylesheet" href="CSSFiles/all.min.css" />
  <!-- Main Template CSS File (stylesheet) -->
  <link rel="stylesheet" href="CSSFiles/home.css">
  <title>Heraf</title>
  <style>
    /* Apply CSS to hide the input field */
    #inputData {
      display: none;
    }

	.button {
      background-size: cover; /* Ensure the background image covers the entire button */
      background-position: center; /* Center the background image */
      background-repeat: no-repeat; /* Do not repeat the background image */
      border: none; /* Remove the default button border */
      color: white; /* Text color */
      padding: 15px 30px; /* Padding for better appearance */
      font-size: 16px; /* Font size */
      cursor: pointer; /* Add a pointer cursor on hover */
      outline: none; /* Remove the default focus outline */
      border-radius: 10px; /* Add some border-radius for rounded corners */
      transition: background-color 0.3s , transform 0.3s; /* Add a smooth transition for background color */

      /* Optional: Add some box-shadow for a nice lift effect */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
	  min-width: 100%;
	  min-height: 250px;
    }

    /* Change the background color on hover for a nice effect */
    .button:hover {
      background-color: rgba(0, 0, 0, 0.5); /* Add a semi-transparent black overlay on hover */
	  transform: scale(1.1, 1.1);
	  filter: grayscale(50%);
	  opacity: 0.5;
	  transition: 1s;
    }
  </style>

</head>

<body>
  <!-- start header -->
  <header>
    <div class="container">
      <!-- left -->
      <div class="logo">
        <img src="images/IMG_20231105_202217_434-removebg.png" alt="Logo">
      </div>
      <i class="fas fa-bars toggle-menu"></i>
      <div class="links">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#sur">Survices</a></li>
          <li><a href="#about">About</a></li>
        </ul>
        <a href="<?php if (session_status() == PHP_SESSION_NONE) {session_start();} if (isset($_SESSION['user'])){echo "profile.php";} else {echo "login.php";} ?>">
          <i class="fa-solid fa-user" ></i>
        </a>
      </div>
    </div>
  </header>
  <!-- end header -->
  
  <!-- start section 1  -->
  <section>
    <div class="lay"></div>
    <div class="content center">
      <h1>Repair and
        Maintenance
        Services</h1>
      <p>A platform to help you find a suitable craftsman</p>
      <div class="search">
        <i class="fa-solid fa-magnifying-glass"></i>
        
      
	  <form action="search.php" method="post">
			<input type="search" class="center" name="name" placeholder="   electrician ,Computer engineer ,Mechanical ,carpenter,Broker,............................................ ">
			<button type="submit">Search</button>
		</form>
		</div>
    </div>
  </section>
  <script>
    let BtnSearch = document.querySelector('[BtnSearch]')
    console.log(BtnSearch)
    BtnSearch.onclick = () => {
      window.location.href = "search.php"
    }
  </script>
  <!-- end section 1  -->

  <!-- start section 2 -->
  <div class="section2" id="sur">
    <div class="container">
      <h2 class="special-heading">our Services</h2>
      <div class="content">
        <!-- =================================================================== -->
        <div class="card">
		<form action="search.php" method="post">
			<input type="text" id="inputData" name="name" value="Carpenter">
			<button class="button" type="submit" style="background-image: url('images/carpenter-4015109.jpg');"></button>
		</form>
          <div class="info">
            <h3>Carpenters Department</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Ipsa nobis magnam aperiam quis! Quae possimus repudiandae perspiciatis voluptate,
              excepturi dignissimos, harum totam ipsum, facilis deserunt ab explicabo unde vitae fugit!</p>
          </div>
        </div>
        <!-- =================================================================== -->
        <div class="card">
		<form action="search.php" method="post">
			<input type="text" id="inputData" name="name" value="Mechanical">
			<button class="button" type="submit" style="background-image: url('images/man-362150.jpg');"></button>
		</form>
          <div class="info">
            <h3>Mechanical Department</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Ipsa nobis magnam aperiam quis! Quae possimus repudiandae perspiciatis voluptate,
              excepturi dignissimos, harum totam ipsum, facilis deserunt ab explicabo unde vitae fugit!</p>
          </div>
        </div>
        <!-- =================================================================== -->
        <div class="card">
		<form action="search.php" method="post">
			<input type="text" id="inputData" name="name" value="Electrician">
			<button class="button" type="submit" style="background-image: url('images/electrician-2755683.jpg');"></button>
		</form>
          <div class="info">
            <h3>Electricians Department</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Ipsa nobis magnam aperiam quis! Quae possimus repudiandae perspiciatis voluptate,
              excepturi dignissimos, harum totam ipsum, facilis deserunt ab explicabo unde vitae fugit!</p>
          </div>
        </div>
        <!-- =================================================================== -->
        <div class="card">
		<form action="search.php" method="post">
			<input type="text" id="inputData" name="name" value="Blacksmith">
			<button class="button" type="submit" style="background-image: url('images/pexels-tima-miroshnichenko-5846143.jpg');"></button>
		</form>
          <div class="info">
            <h3>blacksmith</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Ipsa nobis magnam aperiam quis! Quae possimus repudiandae perspiciatis voluptate,
              excepturi dignissimos, harum totam ipsum, facilis deserunt ab explicabo unde vitae fugit!</p>
          </div>
        </div>
        <!-- =================================================================== -->
        <div class="card">
		<form action="search.php" method="post">
			<input type="text" id="inputData" name="name" value="Painter">
			<button class="button" type="submit" style="background-image: url('images/pexels-blue-bird-7218525.jpg');"></button>
		</form>
          <div class="info">
            <h3>painter</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Ipsa nobis magnam aperiam quis! Quae possimus repudiandae perspiciatis voluptate,
              excepturi dignissimos, harum totam ipsum, facilis deserunt ab explicabo unde vitae fugit!</p>
          </div>
        </div>
        <!-- =================================================================== -->


      </div>
    </div>
  </div>
  <!-- end section 2 -->



  <!-- start footer  -->
  <footer>
    <div class="container">
      <div class="content">

        <div class="card">
          <h3>Connect with us</h3>
          <p></p>
          <div class="ourMail">
            <i class="fa-solid fa-envelope"></i>
            <span>Heraf@gmail.com</span>
          </div>
        </div>
        <!-- =================================================================== -->
        <div class="card">
          <h3>Our service</h3>
          <p><span style="font-weight: bold;">Heraf :</span> is a platform that provides a space for artisans of all
            shapes and professions to offer their services</p>
        </div>
        <!-- =================================================================== -->
        <div id="about" class="card">
          <h3>About US</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Ipsa nobis magnam aperiam quis! Quae possimus repudiandae perspiciatis voluptate,
            excepturi dignissimos, harum totam ipsum, facilis deserunt ab explicabo unde vitae fugit!</p>
        </div>
        <!-- =================================================================== -->
      </div>
      <hr>
      <h2>ERROR 404 TEAM </h2>
      <p style="font-size: 0.9em;">
        <i class="fa-solid fa-copyright"></i> 2023
      </p>
    </div>
  </footer>
  <!-- end footer  -->
</body>

<!-- script for click on fas fa-bars toggle-menu in phone screen  -->
<!-- script for click on fas fa-bars toggle-menu in phone screen  -->
<script>
  let BtnList = document.getElementsByClassName("fas fa-bars toggle-menu")[0]
  let links = document.querySelector('[class="links"]')


  window.addEventListener("resize", function () {
    if (window.innerHeight <= 768) {
      links.style.display = "none"
      BtnList.onclick = () => {
        links.style.cssText = "display: flex; flex-direction: column; position:absolute; top:100%; left:0; width: 100%;background-color: #00000075; "
      }
      links.onmouseleave = () => {
        links.style.display = "none"
      }
    }
    if (window.innerWidth > 768) {
      links.style.cssText = "display: flex; position: relative; "
      links.onmouseleave = () => {
        links.style.display = "display: flex; position: relative; "
      }
    }
  })

  //click on card of job
  let card=document.querySelectorAll('[jobs="jobs"]')
for (let i = 0; i < card.length; i++) {
  card[i].onclick=()=>{
    console.log(card[i].name);
    window.location.href="search.php"}
  }


</script>

</html>
