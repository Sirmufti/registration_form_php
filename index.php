<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	

	 <div class="modernForm">
      <div class="imageSection">
        <div class="image">
          <div class="overlay"></div>
          <img src="https://i.ibb.co/wRWNy8q/pexels-yuri-manei-2272854.jpg" alt="pexels-yuri-manei-2272854">
        </div>
        <div class="textInside">
          <h1>Bring Your Music Along</h1>
          <p class="tagLine">try Unlimited</p>
        </div>
        <div class="service">
          <p><span class="price">muftinet</span>.com</p>
        </div>
      </div>
      <div class="contactForm">
        <h1>Registration Form</h1>
        
        <form action="includes/signup.inc.php" method="post">
          <div class="name">
            <label for="fullName">Full Name:</label>
            <input type="text" name="fullname" id="fullName" placeholder="Muftaw Wahab Ayinla"/>
            <div class="iconName"><i class="fa-solid fa-user"></i></div>
          </div>

          <div class="name">
            <label for="email">Your Email:</label>
            <input type="email" name="email" id="email" placeholder="muftinet1@gmail.com" />
            <div class="iconName"><i class="fa-solid fa-envelope"></i></i></div>
          </div>

          <div class="name">
            <label for="fullName">Username:</label>
            <input type="text" name="username" id="username" placeholder="muftinet"/>
            <div class="iconName"><i class="fa-solid fa-user"></i></div>
          </div>

          <div class="name">
            <label for="Password">Password:</label>
            <input type="password" name="password" id="password" />
            <div class="iconName"><i class="fa-solid fa-lock"></i></div>
          </div>

          <div class="name">
            <label for="Password">Confirm Password:</label>
            <input type="password" name="pwdRepeat" id="password" required />
            <div class="iconName"><i class="fa-solid fa-lock"></i></div>
          </div>

          <div class="checkbox">
            <input type="checkbox" id="checkbox" name="checkbox" required>
            <label for="checkbox">By signing up, you agree to the
             <p><a href="#">Play Term of Service</p></label>
          </div>

          <input type="submit" name="submit" value="Register">
        </form>
      </div>
    </div>

  <script src="script.js">
  	
  </script>

</body>
</html>