<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/styles/form.css">
</head>
<body>
    <section id="contact">
        <div class="contact-box">
          <div class="contact-links">
            <h2>CONTACT US</h2>
            <div class="links">
              <div class="link">
                <a><img src="https://i.postimg.cc/m2mg2Hjm/linkedin.png" alt="linkedin"></a>
              </div>
              <div class="link">
                <a><img src="https://i.postimg.cc/YCV2QBJg/github.png" alt="github"></a>
              </div>
              <div class="link">
                <a><img src="https://i.postimg.cc/W4Znvrry/codepen.png" alt="codepen"></a>
              </div>
              <div class="link">
                <a><img src="https://i.postimg.cc/NjLfyjPB/email.png" alt="email"></a>
              </div>
            </div>
          </div>
          <div class="contact-form-wrapper">
            <form action="form.php" method="post">
              <div class="form-item">
                <input for="name" type="text" name="name" required>
                <label name="name">Name:</label>
              </div>
              <div class="form-item">
                <input for="email" type="text" name="email" required>
                <label name="email">Email:</label>
              </div>
              <div class="form-item">
                <textarea for="message" class="textareaa" name="message" rows="10" required></textarea>
                <label name="message">Provide some information regarding your query...</label>
              </div>
              <button type="submit" class="submit-btn" name="send" value="Send">Send</button> 
            </form>
          </div>
        </div>
      </section>
</body>
</html>


<?php

include("../Admin/includes/db.php");

if (isset($_POST['send'])) {

	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$message = mysqli_real_escape_string($con, $_POST['message']);

		$query = "insert into contact (name,email,message)
		values ('$name','$email','$message')";

		$run_contact_query = mysqli_query($con, $query);
		echo "<script>alert('SucessFully Inserted');</script>";
		echo "<script>window.open('form.php','_self')</script>";
}
?>