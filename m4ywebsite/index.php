<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CST</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<body>
 <!-- navigation -->
 <div class="s3_navigation">
    <div class="topnav">
        <img class="logo" src="images/logo.jpeg">
        <a href="#contact">Contact</a> <a href="#about">About</a><a href="#imp">Services</a>
        <a class="active" href="#">Home</a>
    </div>
</div>
 <!-- Main -->
 <div class="main">
    <h1>M4Y</h1>
    <h2>Made4you Pvt Ltd</h2>
</div>
 <!-- About -->
 <div class="abt-s" id="about">
    <div class="container">
        <h1 class="abt1">About</h1>
        <p class="abtp">
            M4Y is a digital service provider that aims to provide software,
designing and marketing solutions to individuals and
businesses. <br>At M4Y, it is believed that service and quality is the
key to success.<br> Founded and Funded by Graphic designers
from Jahirathu Junction, M4Y has now set a new path towards
Digital Solutions.
        </p>
    </div>
</div>

<br>
<!---services--->
<div class="imp1" id="imp">
    <section class="imp">
      <div class="h1"><h5> Services Provided by M4Y group Pvt Ltd </h5><br>
       <div class="row">
         <div class="div col-lg-4 col-md-4 col-1">
           
           <h2 class="h2">Development</h2>
           <p class="p">We develop responsive, functional and super-fast websites.
            We keep User Experience in mind while creating websites. A website should load
            quickly and should be accessible even on a small view-port and slow internet
            connection.</p>
         </div>
           <div class="div2 col-lg-4 col-md-4 col-1">
               
               <h2 class="h2">Consultancy </h2>
               <p class="p">We are here to provide you with expert advice on your design and
                development requirements.
                </p>
           </div>
           <div class="div col-lg-4 col-md-4 col-1">
               
               <h2 class="h2">Videos</h2>
               <p class="p">We create a polished professional video that impresses your audience.
            </p>
           </div>
       </div>
     </div>
   </section>
 </div>
  <!-- Contact -->
  <div class="footer" id="contact">
    <div class="container">

        
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text">
                    we would love to hear it from you on your
                    query and Contact form-Fields-Name, phone number, email, write your message here
                </p>

                <div class="info">
                   
                    <div class="information">
                        <img src="images/email.png" class="icon" alt="" />
                        <p>abc09@gmail.com</p>
                    </div>
                    <div class="information">
                        <img src="images/phone.png" class="icon" alt="" />
                        <p>123-456-789</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form method="POST" name="contact" action="contactus.php" autocomplete="off">
                    <h3 class="title">Contact us</h3>
                    <div class="input-container">
                        <input type="text" name="name" class="input" required/>
                        <label for="">Fullname</label>
                        <span>Fullname</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input" required/>
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-container">
                        <input type="number" name="phone" class="input" required/>
                        <label for="">Phone</label>
                        <span>Phone</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input" required></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>
                    <input type="submit" value="Send" class="btn" />
                </form>
            </div>
        </div>
    </div>

</div>
<!--whatsapp-->
<div class="whatsapp">
    <a href="https://api.whatsapp.com/send?phone=91123456789&text=Hello this is the starting message" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float" style="font-size: 50px;color: green;"></i>
    <p>Chat with us, and
        get quotation as soon as possible</p>
    </a>
        </div>
    </body>
    
    </html>

