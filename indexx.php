<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel = "stylesheet" href = "stylee.css">
</head>
<body>
    
        <!-- nav bar -->
        
    <nav> 
        <div class = "container main-nav flex">
            <a href = "#" class="company-logo">
                <img src = "./deshpics/worklogo.jpg" alt = "company logo">
            </a>
            <div class = "nav-links">
                <ul class = "flex">
                    <li><a href="#" class = "hover-link">Home</a></li>
                    <li><a href="booking.php" class = "hover-link">Location</a></li>
                    <li><a href="#" class = "hover-link">Types Of Workspace</a></li>
                    <li><a href="signin.php" class = "hover-link secondary-button">Log in</a></li>
                    <li><a href="Signup.html" class = "hover-link primary-button">Sign up</a></li>
                    <li><a href="feedback.html" class = "hover-link secondary-button">Feedback</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- header section -->
    <header>
        <div class = "container header-section flex">
            <div class = "header-left">
            <h2>Workspace Confidently</h2>
            <p>"Whether you’re a team of one, a growing startup or a Fortune 500 company – we have flexible solutions for all the ways you work."</p>
            </div>
            <div class = "header-right">
              <img src = "./deshpics/img 4.jpg" alt ="hero image">
            </div>
        </div>
    </header>

    <!-- companies section -->
    <section class = "companies-section">
        <div class = "container">
            <div class = "companies-header">
                <h2 class ="companies-heading-text">The world's best companies & startup hire our Workspace.</h2>
            </div>
            <div class = "logos flex">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;     
            <img class = "logo"  src ="./deshpics/zomato.jpg"   alt = " ">&emsp;&emsp;&emsp;&emsp;
            <img class = "logo"  src ="./deshpics/airtable.png" alt = " ">&emsp;&emsp;&emsp;&emsp;
            <img class = "logo"  src ="./deshpics/zoom.png"     alt = " ">&emsp;&emsp;&emsp;&emsp;
            <img class = "logo"  src ="./deshpics/zepto.jpg"    alt = " ">&emsp;&emsp;&emsp;&emsp;
            <img class = "logo"  src ="./deshpics/blinkit.jpg"  alt = " ">&emsp;&emsp;&emsp;&emsp;
            <img class = "logo"  src ="./deshpics/box8.jpg"     alt = " ">&emsp;&emsp;&emsp;&emsp;
         </div>
         </div>
        </div>
    </section>
    
    <!-- features-section -->

    <section class = "features-section">
        <div class = "container">
            <div class = "features-header">
                <h2 class="features-heading-text">Prime Features Of Our Workspace</h2>

                <div class = "features-area flex">
                
                    <div class="features-card flex">
                       <img src ="./deshpics/hypen.jpg" width = "80" height="90" alt ="">
                       <h4>Office Space</h4>
                       <p>Smartly connected with all your prime facilites & a workspace fully covered with extreme glass so no sound passes inside the space .</p>
                </div>

                    <div class="features-card flex">
                        <img src ="./deshpics/prime.png" width = "80" height="90" alt ="">
                        <h4>Prime Location</h4>
                        <p>Space is just connected within 3 min walking distance from Metro Station & 5 min walking distance from Public Transport.</p>
                    </div>

                    <div class="features-card flex">
                            <img src ="./deshpics/transparent.jpg" width = "80" height="90" alt ="">
                            <h4>Affordability</h4>
                            <p>Easy to afford & enjoy space beneficiries & with you can also take prime facilities.</p>
                        </div>
         
                    <div class="features-card flex">
                             <img src ="./deshpics/car.jpg" width = "80" height="90" alt ="">
                             <h4>Parking</h4>
                              <p>Parking in our workspace use sensor based technology , & intelligent devices watching your vechicle movement.</p>
                    </div>
            </div>
    </section>
        <!-- examples-section -->

        <section class="examples-section">
            <div class="container">
                <div class = "examples-header flex">
                    <h2 class="examples-heading-text">One Platform,Endless Possibilities</h2>
                </div>
                
                <!-- <div class = "examples-area flex">
                    <a href = "#" class = "examples-card" href = "#">
                    <h3 class="card-text">Dedicated Task</h3>
                    <p class="card-text">Your own desk in a shared office.</p>                  
                    </a>

                    <a href = "#" class = "examples-card" href = "#">
                    <h3 class="card-text">Can user complete a task in my software interface ?</h3>                        
                    </a>

                    <a href = "#" class = "examples-card" href = "#">
                    <h3 class="card-text">Can user complete a task in my software interface ?</h3>                        
                    </a>
            
                    <a href = "#" class = "examples-card" href = "#">
                    <h3 class="card-text">Can user complete a task in my software interface ?</h3>            
                </a>
                </div> -->
            </div>
        </div>
    </section>
    <!-- cta-section -->
    <section class = "cta-section">
    <div class="container flex cta-section-container">
        <h2>Start Booking , Right Now</h2>
        <p>Book Our Workspace , & Enjoy Your Work With Beneficiries Facities</p>
        <a href = "booking.php" class="primary-button">Get Started</a>
    </div>
    </section><br/><br/><br/>
    
    <!--footer-->

    <footer> 
        <h2>About Us :</h2>
        <div>
          <h3 class="footer__headline">Navigation</h3><br/>
          <ul class="footer__list">
            <li>Home</li><br/>
            <li>Location</li><br/>
            <li>Types Of Workspace</li><br/>
          </ul>
        </div>
        <div>
          <h3 class="footer__headline">Follow Us</h3><br/>
          <ul class="footer__list">
            <li>Facebook</li><br/>
            <li>Instagram</li><br/>
            <li>Twitter</li><br/>
          </ul>
        </div>
        <div>
          <h3 class="footer__headline">Contact</h3><br/>
          <ul class="footer__list">
            <li>Adress  : Barakamba Road,New Delhi</li><br/>
            <li>Phone   : +012 - 9968075985</li><br/>
            <li>Email   : workspacehub@gmail.com</li><br/>
            <li>Website : workhub.com</li><br/>
          </ul>
        </div>
      </footer>
    <div class = "subfooter"></div>
    <div class ="spacer" style="height : 4vh;"></div>
    <script src="https://kit.fontawesome.com/b8d8e06eae.js" crossorigin="anonymous"></script>
</body>
</html>