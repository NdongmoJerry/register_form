
<?php 

include('config.php');

if(isset($_POST['submit'])){ 

    $name = $_POST['name'] ;
    $email = $_POST['email'];
    $number = $_POST['number'];
    $role = $_POST['role'];
    $referer = $_POST['referer'];
    $mostlike = $_POST['mostlike'];
    $improve = $_POST['improve'];
    $comment = $_POST['comment'];

    $sql_insert_registration = "INSERT INTO registration( name, email, number, role, referer, mostlike, improve, comment )
    VALUES('$name','$email','$number', '$role', '$referer', '$mostlike', '$improve', '$comment')";

    mysqli_query($conn,$sql_insert_registration) or die(mysqli_error($conn));
    
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" type="text/css">
  <title>Document</title>
</head>
<body>
  <div class="container">
  <header class="header">
  <h1 id="title" class="text-center">Survey Form</h1>
  <p id="description" class="description text-center">Thank you for taking the time to help us improve the platform</p></header>
<form id="survey-form" method="POST" action="">
<div class="form-group">
    <label>name</label><input type="text" name="name" class="form-control" placeholder="Enter your name" required>
</div>
<div class="form-group">
    <label>email</label><input type="email" name="email" class="form-control" placeholder="Enter your email" required >
</div>
<div class="form-group">
     <label name="number">number</label><input type="number" name="number" class="form-control" min="13" max="99" placeholder="Age" required >
</div>
<div class="form-group">
   <p>Which option best discribes your current role</p>
   <select class="form-control" name="role" id="dropdown" required>
   <option disabled selected value>select current role</option>
   <option value="student">Student</option>
   <option value="full-time-job">Full time job</option>
   <option value="full-time-learner">Full time learner</option>
   <option value="other">Other</option>
<option value="prefer-not-to-say">Prefer not to say</option>
</select>
</div>
<div class="form-group">
  <p>Would you recommend to a friend?</p>
  <label><input type="radio" class="inline" name="referer" value="definately">Definately</label>
  <label><input type="radio" class="inline" name="referer" value="maybe">Maybe</label>
  <label><input type="radio" class="inline" name="referer"  value="not-sure">Not sure</label>
</div>
<div form-control>
<p>What is your favorite feature of codding?
</p>
<select id="most-like" class="form-control" name="mostlike">
    <option disabled selected value>select an option</option>
    <option value="challengies">challengies</option>
    <option value="projects">projects</option>
    <option value="community">community</option>
    <option value="open-source">open source</option> 
</select>
</div>
<div class="form-group">
      <p>What would you like to see improved?</p>
      <label><input type="checkbox" name="improve" value="font-end">Front-end Projects</label>
      <label><input type="checkbox" name="improve" value="back-end">Back-end Projects</label>
      <label><input type="checkbox" name="improve" value="data">Data Visualization</label>
      <label><input type="checkbox" name="improve" value="chalengies">Challengies</label>
</div>
<div class="form-group"></div>
         <p>Any comments or suggestions?</p>
         <textarea name="comment" id="comment" value="comment" placeholder="comment here"></textarea>
</div>
<div class="form-group" id="button">
            <button type="submit" name="submit" class="submit-button">Submit</button>
  </div>
</form>
</div>
</body>
</html>

