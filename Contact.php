<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church of the Word</title>
    <link rel="icon" href="res/photos/img001.jpg">
    <link rel="stylesheet" href="res/css/home.css">
    <link rel="stylesheet" href="res/css/contact.css">
    <script src="https://kit.fontawesome.com/4211a110a1.js"crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <!-- <img src="" alt="Image here" class="imgnav"> -->
        <center><a href="Home.php"><H1 class="h1nav">CHURCH OF THE WORD</H1></a></center>
        <div class="nav">
            <ul>
                <a href="Home.php"><li><i class="fa fa-home" > </i>     <b>HOME</b></li></a>
                <a href="Services.php"><li><i class="fa fa-user" aria-hidden="true"> </i>     <b>SERVICES</b></li></a>
                <a href="About.php"><li><i class="fa-solid fa-address-card"> </i>     <b>ABOUT US</b></li></a>
                <a href="Contact.php"><li><i class="fa fa-mobile" aria-hidden="true"> </i>     <b>CONTACT US</b></li></a>
            </ul>
    </div>
    </header>
    <!-- <hr> -->

<div class="fullform">
<div class="formleft">
    <img src="/res/photos/1-3.jpg" alt="">
</div>
<div class="formright">
    <form class="conform" action="contactphp.php" method="POST">
        <h3 class="title">Contact us</h3>
        <div class="input-container">
            <label for="name">Name :    </label>
          <input type="text" id="name" name="name" class="input" pattern="[A-Za-z]+" placeholder="Name" required />
        </div>
        <div class="input-container">
          <label for="email">Email :  </label>
          <input type="email" id="email" name="email" class="input" placeholder="Email address" required />
          <br>
        </div>
        <div class="input-container">
            <label for="phone">Phone :  </label>
          <input type="tel" id="phone" name="phone" class="input" placeholder="Phone Number" pattern="[0-9]+" required>
        </div>
        <div class="input-container">
            <label for="message">Message :  </label>
          <textarea id="message" name="message" class="input" placeholder="Type your thoughts"></textarea>
        </div>
        <div class="input-container">
        <button inputtype="submit" value="SEND" class="btn">SEND</button>
        </div>
      </form>
      </div>
      </div>


      <!-- <form class="conform" action="contactphp.php" method="POST">
<Table>
<tr><td><h3 class="title">Contact us</h3></td></tr>
<tr> <td><label for="name">Name :    </label> </td> <td><input type="text" id="name" name="name" class="input" pattern="[A-Za-z]+" placeholder="Name" required /> </td> </tr>
<tr> <td><label for="email">Email :  </label> </td> <td><input type="email" id="email" name="email" class="input" placeholder="Email address" required /> </td> </tr>
<tr> <td><label for="phone">Phone :  </label> </td> <td><input type="tel" id="phone" name="phone" class="input" placeholder="Phone Number" pattern="[0-9]+" required> </td> </tr>
<tr> <td><label for="message">Message :  </label> </td> <td><textarea id="message" name="message" class="input" placeholder="Type your thoughts"></textarea> </td> </tr>
<tr><td><button inputtype="submit" value="SEND" class="btn">SEND</button></td></tr>
</Table>
</form> -->
















<!-- DARKMODE -->

<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script id="darkmode">
        const options = {
    bottom: '5%', // default: '5%'
    right: '10%', // default: '10%'
    left: '2%', // default: '2%'
    time: '0.7s', // default: '0.3s'
    mixColor: '#fff', // default: '#fff'
    backgroundColor: '#fff',  // default: '#fff'
    buttonColorDark: '#000',  // default: '#100f2c'
    buttonColorLight: '#fff', // default: '#fff'
    saveInCookies: true, // default: true,
    label: "🌓", // default: ''
    autoMatchOsTheme: true // default: true
    }
    const darkmode = new Darkmode(options);
    darkmode.showWidget();
    </script>


<!-- DARKMODE -->






      <footer>
        <div class="container">
            <div class="row">
                <div class="column">
                    <H2>Company :</H2>
                    <ul>
                        <a href="About.php"><li>About Us</li></a>
                        <a href="Contact.php"><li>Contact Us</li></a>
                    </ul>
                </div>
                <div class="column">
                    <H2>Services & Offerings :</H2>
                    <ul>
                        <a href="Services.php"><li>Service and Church timings</li></a>
                        <a href="Home.php#slider3"><li>Prayer Requests</li></a>
                        <a href="Donations.php"><li>Donate to us</li></a>
                        <!-- <li><a href="">returns</a></li> -->
                    </ul>
                </div>
                <div class="column">
                    <H2>Follow us :</H2>
                    <div class="sociallinks">
                        <a href="https://www.youtube.com/@churchoftheword9636"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <center><p class="rights">&copy CopyRights Reserved 2023</p></center>
        </div><br>
    </footer>
</body>
</html>