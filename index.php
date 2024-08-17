<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="1.js"></script>
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/fontawesome.min.css">
<link rel="stylesheet" href="style.css">
<title>Hi! I'm RA</title>

</head>
<body>

   <div class="loader">
        <div></div>
    </div>

   <div class="content">

<div class="header">

<a href="#RA" ><button>Hi! I'm RA <i class="fa-solid fa-venus"></i></button></a>
<a href="#About" ><button>About Me <i class="fa-solid fa-arrow-trend-down"></i></button></a>
<a href="#Education" ><button>Education <i class="fa-solid fa-book-open-reader"></i></button></a>
<a href="#Project" ><button>Project <i class="fa-solid fa-code-branch"></i></button></a>
<a href="#Contact" ><button>Contact <i class="fa-solid fa-address-book"></i></button></a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
  <div id="RA">
    <br><br>
      <img src="img/2.png"/><hr>
	     <h2><i class="fa-solid fa-venus"></i> Rachel Anne A. Tamayo - <small><i style="color:rgba(242, 64 , 68, 1);" >IT Student</i></small> </h2>
  </div>   
	</div>

  <div class="card">
      <div id="About">
        <h2>About Me <i class="fa-solid fa-arrow-trend-down"></i></h2>
        
      <div class="fakeimg"><h3><i class="fa-solid fa-user"></i> I am...</h3><blockquote><p>Hi! I'm Rachel, a 20-year-old IT student at one of the National Engineering Universities in the Philippines. My childhood dream is to become a CPA however it is more exciting to try various things and engage more with technology since today is a digital era. Here I am, exploring and learning from the IT field.</p></blockquote></div><br>
      
      <div class="fakeimg"><h3><i class="fa-solid fa-laptop-code"></i> Coding</h3><blockquote><p>My first language is ActionScript which is an OOP language used for making 2D animations and games. Recently, making websites piqued my curiosity so I've been trying to learn the fundamentals of HTML, CSS and JavaScript.</p></blockquote></div><br>
      
      <div class="fakeimg"><h3><i class="fa-solid fa-bed"></i> Hobbies</h3><blockquote><p>My hobbies change over time, but lately I've been enjoying sleeping, which helps me increase my weight.</p></blockquote></div>
    </div>
  </div>
</div>


  <div class="rightcolumn">
    <div class="card">
      <div id="Education">
      <h2>Education <i class="fa-solid fa-book-open-reader"></i></h2>


<div class="fakeimg">
<ul class="a">
    <li>Batangas State University Alangilan Campus</li>
        <ul class="b">
          <li>Bachelor of Science in Information Technology</li>
          <li>2020 to present</li>
        </ul>
    <li>Alitagtag Senior High School</li>

        <ul class="b">
          <li>Information and Communications Technology</li>
          <li>Class of 2020</li>
        </ul>

    <li>Dalipit Elementary Schhol </li>
        <ul class="b">
          <li>Class of 2014</li>
        </ul>
</ul>
</div>
  
    </div>
  </div>

    <div class="card">
      <div id="Project">
      <h2>Project <i class="fa-solid fa-code-branch"></i></h2>
      <div class="fakeimg">
           <div class="aligned"><img class ="a" src="img/proj2.png" alt="">
           <span>The Adventure Time themed E-game was my first programming project with ActionScript as the programming language. It was developed four years ago in the Macromedia Flash. The fact that I'm not good in terms of arts, the graphics are poor however it works just fine.</span></div>
      </div><br>

      <div class="fakeimg">
           <div class="aligned"><img class ="a" src="img/proj4.png" alt="">
           <span>Three years ago, a website for TVL 12 in ASHS was created, and a similar website for the Municipality of Alitagtag was created for a college project on Introduction to Computer Programming.</span></div></div>
    </div></div>


<div class="card">
  <div id="Contact">
    <h2>Contact <i class="fa-solid fa-address-book"></i></h2>
    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->
    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-phone"></i>+63 9462 535 785</div>
        <div><i class="fas fa-envelope"></i>racheltamayo. 0929@gmail.com</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div><br>
      <div class="contact-form">
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form><br><br><br>
      </div>
    </div>
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
    </div>
  </div>
</div></div>









<script>  
        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }; </script>




<audio controls autoplay loop id="myaudio">
<source src="aud/ms2.mp3" type="audio/mpeg">
<source src="aud/ms2.ogg" type="audio/ogg">
<source src="aud/ms2.wav" type="audio/wav">
</audio>

<script>var audio = document.getElementById("myaudio");
audio.volume = 0.3;</script>




</body>
<div class="footer">

<a href="https://www.instagram.com/rchlanne_tmy/" >
  <i class="fa-brands fa-instagram" style="font-size:24px;"></i></a> 
<a href="https://github.com/racheltamayo">
  <i class="fa-brands fa-github" style="font-size:24px;"></i></a><br>
  <i class="fa-regular fa-copyright"></i> 2022 | tamy<br>
  <a href ="index.php">Back to Top</a>
</div>

</div>
   <script>
        $(window).on('load',function(){
            $(".loader").fadeOut(2000);
            $(".content").fadeIn(2000);
        });
    </script>
</html>
