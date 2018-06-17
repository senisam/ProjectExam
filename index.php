<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Space craft</title>
    <!-- Boostrap style sheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheet2.css">
</head>

    <body>
    <div class="nav">
  <nav>
    <a href="#section1">Home page</a>
    <a href="#section2">SpaceX craft</a>
    <a href="#section3">About US</a>
    <a href="#section4">Contact US</a>
    <a href="#section5">Contact Form</a>
  </nav>
</div>
          
        
<div id="section1" class="section">
  <div class="text-wr">
    <div id="banner"> 
             <div class="cover_image">
                 <img src= "homepage%20cover_1.svg" alt="cover image">
             </div>
             
             <div class="element">
             <img src="homepage%20cover_3.svg" alt="Space image">
             </div>
             <div class="title">
              <h1> Our next SpaceX Craft mission </h1> 
                 
            <div id="clockdiv">
            <div>
                <span class="days" id="day"></span>
                <div class="smalltext"><h2>Days</h2></div>
            </div>
            <div>
                <span class="hours" id="hour"></span>
                <div class="smalltext"><h2>Hours</h2></div>
            </div>
            <div>
                <span class="minutes" id="minute"></span>
                <div class="smalltext"><h2>Minutes</h2></div>
            </div>
            <div>
                <span class="seconds" id="second"></span>
                <div class="smalltext"><h2>Seconds</h2></div>
            </div>
            </div>

                <div id="launchTime"></div>
              <button class="btn" type="button" id="myButton"> <a href="#">Join Us</a></button>
           </div>
        </div> 
  </div>
</div>
 

        
<div id="section2" class="section">
       
       <div id="rocket"></div> 
       <div id="rocketImage">
           <img src="Flacon%201.svg" alt="Falcon1 Image">
           <img src="Flacon%209.svg"  alt="Falcon9 image">
           <img src="Flacon%20heavy.svg" alt="Falcon Hevay">
           <img src="falcon%20big%20heavy.svg" alt=" Falcon big heavy">
    
    </div>
      
 </div>
        
     <div id="section3" class="section">
      <div class="text-wr">
      
       <div id="cloud" class="cloud_1">
            <h4>SpaceX designs, manufactures and launches advanced rockets and spacecraft. </h4>
            <button class="btn btn_readMore" type="button" id="myButton"> <a href="http://www.spacex.com/falcon9">Read More</a></button>
      </div>
      
      <div id="cloud" class="cloud_2">
           <h4>The company was founded in 2002 <br>to revolutionize space technology, with the ultimate goal of enabling people to live on other planets.
          </h4>
          <button class="btn btn_readMore" type="button" id="myButton"> <a href="http://www.spacex.com/about">Read More</a></button>
     </div>
    
      
       
    </div>
        
    </div>
    
      
      
<div id="section4" class="section">
  <div class="text-wr">
     <div id="contact_us">
         <button class="btn_contact" ><a href="#section5">Contact us </a> </button>   
     </div>
      

    <div class="social_media">
     <ul>
         <li><a href="#" class="fa fa-facebook"></a></li>
         <li><a href="#" class="fa fa-twitter"></a></li>
         <li><a href="#" class="fa fa-google"></a></li>
         <li><a href="#" class="fa fa-instagram"></a></li>
     </ul>
 </div>


  </div>
</div>
        
        
<div id="section5" class="section">
  <div class="text-wr">
            <div class="contactform">
            <h2> Contact Form</h2>
        </div>
        <div class="form_container">
            <form onsubmit="return validateForm()" name="myForm";>
            <div class="col">
              <input type="text" name="firstName" id="firstName" placeholder="First name">
             <span class="error" id="firstNameError">This field cannot be blank</span>
            </div>
             <div class="col">
              <input type="text" name="lastName" id="lastName" placeholder="Last name">
             <span class="error" id="lastNameError">This field cannot be blank</span>
            </div>
             <div class="col">
            <input type="text" name="phone" id="phoneNumber" placeholder="Phone number">
             <span class="error" id="phoneError">This field cannot be blank</span>
            </div>
             <div class="col">
              <input type="text" name="email" id="eMail" placeholder="Email adress">
             <span class="error" id="emailError">This field cannot be blank</span>
            </div>
            <div class="col">
               <a href="sucess.html"><input class="btn_form" type="submit" name="Submit" id="mySubmit" value="Submit"></a> 
               
            </div>
            </form>
        </div>
        </div>
        
    
  </div>

  
        
        <script src="script2.js">
        
        </script>
        
    </body>



</html>





