<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ChatBot</title>
  <link rel="icon" href="robot.png">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../static/styles/design.css">
  <link rel="stylesheet" href="../static/styles/utilities.css">
  <script src="../static/scripts/index.js"></script>
  <script type="text/javascript">
    function myFunction(){
    window.history.forward();
    function noBack() {
        window.history.forward();
    }
    }
</script>
</head>
<body>
  <header>
    <div class="container">
    <nav class="flex items-center justify-between ">
      <div class="left flex items-center">
        <div class="branding">
          <img src="../static/images/logo.svg" alt="logo">
        </div>
        <div class="links">
          <a href="#about">About</a>
          <a href="#services">Services</a>
          <a href="#need">Need</a>
          <a href="feedback.php">Feedback</a>
        </div>
      </div>
      <div class="right">
        <a href="form.php">
          <button class=" after_btn btn btn-primary">Contact Us</button>
        </a>
      </div>
      <div class="right">
        <a href='../includes/logout.php'><button class=" after_btn btn btn-primary" onclick="myFunction()">Logout</button></a>
      </div>
    </nav>
    <div class="hero flex  items-center justify-between spacing">
      <div class="left flex-1 justify-center spacing">
        <image src="../static/images/robot.png"></image>
      </div>
      <div style="font-size: larger;" class="right flex-1 spacing">
        <br><br><br>
        <h6>Welcome to Doodle</h6>
        <h1>This is a Mental<span><br>Health ChatBot</br></span></h1>
        <p><h3>Hola !</h3>I m a<b style="color: chartreuse;"> Artificially Intelligent </b> Chatbot
          and I give you overall assesed Mental Health<b style="color: chartreuse;"> analysis</b> according to your responses !!!!!</p>   
          <div>
            <a href="chatbot.php">
              <button class="btn btn-secondary"> Wanna Chat with Me !</button>
            </a>
          </div>
      </div>
    </div>
  </div>
  <section class="container_2">
    <a name="about">
      <div class="trans_cls">
        <h1>About<span style="color:coral"> ChatBot</span> >>></h1>
        <div style="font-size: larger;">This bot is made using <span style="color:coral"> Artificial Intelligence and Neural Network .</span>
          Instead of using canned responses, the neural network of generative models is a <span style="color:coral"> deep learning model </span>dedicated to handling a set of sequences. The pattern detection to derive a desirable 
          response grows stronger and accurate as the chatbot 
          runs through each layer in the <span style="color:coral"> AI neural network.</span>
        </div>
      </div>
    </a>
    <br><br><br>
    <a name="services">
      <div class="trans_cls">
        <h1>What <span style="color:rgb(224, 211, 25);">do</span> we <span style="color:rgb(224, 211, 25);">provide </span>??..</h1>
        <p style="font-size: larger;">We provide a A.I assesed analysis of your Mental health which helps the individual to take early precautions if he / she is found with some mental problems amd if you want us to keep you updated on new areas of <span style="color:rgb(224, 211, 25);">Mental Health </span>then Fill up the form ASAP.</p>     
      </div>
    </a>
    <br><br><br>
    <a name="need">
      <div class="trans_cls">
        <h1><span style="color: rgb(162, 90, 8);">Good </span>Mental <span style="color: rgb(162, 90, 8);">Health !!!</span> But Why ???</h1>
        <p>
          <ul type="none" class="list" style="text-align:center ;font-size: larger;">
            <li>Reduction in anxiety.</li>
            <li>Improved moods.</li>
            <li>Clearer thinking.</li>
            <li>A greater sense of calm or inner peace.</li>
            <li>Increased self-esteem.</li>
            <li>Reduced risk of depression.</li>
            <li>Improvements in relationships.</li>
          </ul>
        </p>
      </div>
    </a>
    <br><br><br>
  </section>
  </header>
</body>
</html>