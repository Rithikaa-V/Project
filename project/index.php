<?php

include 'config.php';

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `messages` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `messages`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>My Personal Portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/mystyle.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user-image.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am rithikaa </h3>
      <span data-aos="fade-up">post graduate student</span>
      <p data-aos="fade-up">A passionate learner, a dedicated student and a travel enthusiast.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Here is my quick and short personal details for your reference.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span>Rithikaa V </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> r1i2t3h4i@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Tamil Nadu, India </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +91 1234567890</h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 21 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> Fresher </h3>
      </div>

      <a href="#" class="btn" data-aos="fade-up">view my resume</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>80%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & certifications</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2022 - 2024 )</span>
               <h3>Master of Computer Applications</h3>
               <p>Currently pursuing at a reputed College</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2022 )</span>
               <h3>B.Sc Mathematics with CA</h3>
               <p>Graduated from a reputed college</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2017 - 2019 )</span>
               <h3>High Schooling</h3>
               <p>Completed from a reputed Higher Secondary School</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">certifications</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2023 )</span>
               <h3>joy of computing using python</h3>
               <p>certification course from IIT Madras involving python.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2023 )</span>
               <h3>UI design and development</h3>
               <p>designing course from a reputed institution.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2019 )</span>
               <h3>soft skill development</h3>
               <p>certification course from IIT Kharagpur about soft skills.</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>web development</h3>
         <p>Dealing with the visual and interactive elements that users see and interact with. It involves working with HTML, CSS, and JavaScript.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>graphic design</h3>
         <p>Develop logos, color palettes, typography styles, and other visual elements that represent the brand's personality and values.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>Project Documentation</h3>
         <p>Documentation which provides client information, details on visibilities, architecture, workflow, algorithms and methods involved in a project.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->



<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+91 1234567890</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>r1i2t3h4i@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Tamil Nadu, India</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Rithikaa V</span> </div>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>