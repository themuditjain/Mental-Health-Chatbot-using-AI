<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        .form-all { 
            border: 6px  #264B67;
            border-style: solid;
            background-color: #ffffff;
            max-width: 752px;
            width: 100%;
            color: #264B67;
            margin-top: 110px !important;
        }
        .form-all{
            font-family: Inter, sans-serif;
            font-size: 16px;
        }
        .form-all{
            position: relative;
        }
        .form-all{
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-position: center top;
            background-repeat: repeat;
        }
        .form-all{
                display: flex;
                flex-direction: column;
                width: 100%;
                max-width: 752px;
        }
        .form-all{
            border-radius: 3px;
            box-shadow: 0 4px 4px rgb(87 100 126 / 21%);
            background-color: #fff;
            max-width: 752px;
        }
        .form-all {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            margin: 72px auto;
            width: 100%;
        }
        .form-subhead{
            font-size: 18px;
        }
        .form-all{
        padding-inline-start: 40px;
        padding-top: 40px;
        padding-bottom: 40px;
        padding-left: 40px;
        padding-right: 40px;
        }
        .form-all, .form-all {
            background-color: #ffffff;
        }
        .form-all, .form-all {
            background-color: #ffffff;
        }
        .form-all:before {
            background: none;
        }
        .form-all:before {
            top: -100px;
            background-position: top center;
        }
        .form-all:before {
            content: "";
            display: inline-block;
            height: 90px;
            position: absolute;
            background-size: 90px 90px;
            background-repeat: no-repeat;
            width: 100%;
        }
        *, *:after, *:before {
            box-sizing: border-box;
        }
        .btn {
                border-color: whitesmoke;
                border-style: solid;
                width: 60px !important;
                height: 30px!important;
        }
        body {
            font-family: Inter,sans-serif;
            font-size: 16px;
            background-color: #f3f3fe;
            color: #2c3345;
        }
    </style>
</head>
<body>
    <form action="" method="post">
    <div class="form-all">
        <label for="" class="form-head">
            <h1> <b>Session Feedback form</b> </h1>
        </label>
        <label for="" class="form-subhead">
            <b>Thank you for taking the time to provide your honest feedback! We are always looking for ways to improve and your comments help me do so.&nbsp;&nbsp;</b>
        </label>
        <br><br>
        <div class="form-name">
            <label for="" class="form-name1"><b>Name</b></label>
            <br>
            <label for="" class="form-firstname"><b>First Name</b></label>
            <input type="text" class="form-firstn" name="firstname" id="name" data-defaultvalue="" autocomplete="section-input_47 given-name" size="10" value="" data-component="first" aria-labelledby="label_47 sublabel_47_first" required>
            <label for="" class="form-lastname"><b>Last Name</b></label>
            <input type="text" class="form-lastn" name="lastname" id="name" data-defaultvalue="" autocomplete="section-input_47 given-name" size="10" value="" data-component="first" aria-labelledby="label_47 sublabel_47_first" required>
        </div>
        <br><br>
        <div class="form-satisfy">
            <label for="" class="form-satisfy"><b>How satisfied were you with your session?</b></label>
            <br>
            <input type="radio" class="form-radio" name="satisfy" value="1" required>
            <label for=""> 1 (Not Much)</label>
            <br>
            <input type="radio" class="form-radio" name="satisfy" value="2" required>
            <label for=""> 2</label>
            <br>
            <input type="radio" class="form-radio" name="satisfy" value="3" required>
            <label for=""> 3</label>
            <br>
            <input type="radio" class="form-radio" name="satisfy" value="4" required>
            <label for=""> 4</label>
            <br>
            <input type="radio" class="form-radio" name="satisfy" value="5" required>
            <label for=""> 5 (Very Satisfied)</label>
        </div>
        <br><br>
        <div class="form-relax">
            <label for="" class="form-relax"><b>How relaxed were you during your session?</b></label>
            <br>
            <input type="radio" class="form-radio" name="relax" value="1" required>
            <label for=""> 1 (Not Much)</label>
            <br>
            <input type="radio" class="form-radio" name="relax" value="2" required>
            <label for=""> 2</label>
            <br>
            <input type="radio" class="form-radio" name="relax" value="3" required>
            <label for=""> 3</label>
            <br>
            <input type="radio" class="form-radio" name="relax" value="4" required>
            <label for=""> 4</label>
            <br>
            <input type="radio" class="form-radio" name="relax" value="5" required>
            <label for=""> 5 (Very Satisfied)</label>
            <br>
        </div>
        <br><br>
        <div class="form-improve">
            <label for="" class="form-improve"><b>What aspects could be improve?</b></label><br>
            <textarea class="form-textarea custom-hint-group form-custom-hint" name="improve" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_11" data-customhint="Type here..." customhinted="true" placeholder="Type here..." spellcheck="false" required></textarea>
        </div>
        <br><br>
        <div class="form-favorite">
            <label for="" class="form-favorite"><b>What was/were your favorite part(s)?</b></label><br>
            <textarea class="form-textarea custom-hint-group form-custom-hint" name="favorite" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_11" data-customhint="Type here..." customhinted="true" placeholder="Type here..." spellcheck="false" required></textarea>
        </div>
        <br><br>
        <div class="form-measure">
            <label for="" class="form-measure"><b>How did this measure up to your expectations?</b></label><br>
            <textarea class="form-textarea custom-hint-group form-custom-hint" name="measure" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_11" data-customhint="Type here..." customhinted="true" placeholder="Type here..." spellcheck="false" required></textarea>
        </div>
        <br><br>
        <div class="form-experience">
            <label for="" class="form-experience"><b>Knowing you'll continue to see results over the next few days, what results have you experienced already?</b></label><br>
            <textarea class="form-textarea custom-hint-group form-custom-hint" name="experience" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_11" data-customhint="Type here..." customhinted="true" placeholder="Type here..." spellcheck="false" required></textarea>
        </div>
        <br><br>
        <div class="form-anotherses">
            <label for="" class="form-anotherses"><b>Would you look for another session with us in the future?</b></label>
            <br>
            <input type="radio" class="form-radio" name="anotherses" value="Yes!" required>
            <label for=""> Yes!</label>
            <br>
            <input type="radio" class="form-radio" name="anotherses" value="No thanks!" required>
            <label for=""> No thanks!</label>
            <br>
            <input type="radio" class="form-radio" name="anotherses" value="May be!" required>
            <label for=""> May be!</label>
        </div>
        <br><br>
        <div class="form-recommend">
            <label for="" class="form-recommend"><b>Would you recommend us to your friend?</b></label>
            <br>
            <input type="radio" class="form-radio" name="recommend" value="Yes!" required>
            <label for=""> Yes!</label>
            <br>
            <input type="radio" class="form-radio" name="recommend" value="No!" required>
            <label for=""> No!</label>
            <br>
            <input type="radio" class="form-radio" name="recommend" value="May be!" required>
            <label for=""> May be!</label>
        </div>
        <br><br>
        <div class="form-follow">
            <label for="" class="form-follow"><b>Would you like us to follow-up via email in regards to your responses?</b></label>
            <br>
            <input type="radio" class="form-radio" name="follow" value="Yes!" required>
            <label for=""> Yes!</label>
            <br>
            <input type="radio" class="form-radio" name="follow" value="No!" required>
            <label for=""> No!</label>
        </div>
        <br>
        <div class="form-submit">
            <button type="submit" class="btn"  style="background-color: #182747 ;color:#EEEEEE" name="submit" value="Submit">
                Submit
            </button>
        </div>
    </div>
</form>
</body>
</html>

<?php 


include("../Admin/includes/db.php");

if (isset($_POST['submit'])) {

	$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
	$satisfy = mysqli_real_escape_string($con, $_POST['satisfy']);
	$relax = mysqli_real_escape_string($con, $_POST['relax']);
	$improve = mysqli_real_escape_string($con, $_POST['improve']);
	$favorite = mysqli_real_escape_string($con, $_POST['favorite']);
	$measure = mysqli_real_escape_string($con, $_POST['measure']);
	$experience = mysqli_real_escape_string($con, $_POST['experience']);
	$anotherses = mysqli_real_escape_string($con, $_POST['anotherses']);
	$recommend = mysqli_real_escape_string($con, $_POST['recommend']);
	$follow = mysqli_real_escape_string($con, $_POST['follow']);

		$query = "insert into feedback (firstname,lastname,satisfy,relax,improve,favorite,measure,experience,anotherses,recommend,follow)
		values ('$firstname','$lastname','$satisfy','$relax','$improve','$favorite','$measure','$experience','$anotherses','$recommend','$follow')";

		$run_contact_query = mysqli_query($con, $query);
		echo "<script>alert('SucessFully Inserted');</script>";
		echo "<script>window.open('feedback.php','_self')</script>";
}

?>