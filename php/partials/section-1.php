<form  method="POST" action="" class="form flex flex-col justify-center content-center">

  <label class="text-customwhite mx-10 " for="name">Name:</label>
  <input class="text-customgray mx-10" type="text" id="name" name="name"><br>

  <label class="text-customwhite mx-10" for="lastname">Lastname:</label>
  <input class="text-customgray mx-10" type="text" id="lastname" name="lastname"><br>

  <label class="text-customwhite mx-10" for="country">Country:</label>
  <input class="text-customgray mx-10" type="text" id="country" name="country"><br>

  <label class="text-customwhite mx-10" for="email">Email:</label>
  <input class="text-customgray mx-10" type="email" id="email" name="email"><br>

  <label class="text-customwhite mx-10" for="subject">Subject:</label>
  <select name="subject" id="subject" class="mx-10" >
    <option class="text-customgray" value="subject0">Select a subject</option>
    <option class="text-customgray" value="subject1">Technical problem</option>
    <option class="text-customgray" value="subject2">Administrative problem</option>
    <option class="text-customgray" value="subject3">Other problem</option>
  </select><br>

  <label class="text-customwhite mx-10" for="message">Message:</label>
  <textarea class="text-customgray mx-10 " id="message" name="message"></textarea><br>

  <input class="bg-customindigo text-customwhite mx-10" type="submit" value="Submit">
</form>

<?php

function requireField($input) {
  $errorMessage = "Please complete all fields of the form.";
  $successMessage = "Thank you for your order";
  $message = "";

  if (empty($input)) {
      echo "<script>alert('$errorMessage');</script>";
  } else {
      echo "<script>alert('$successMessage');</script>";
      unset($_SESSION['shoppingCart']);
      $totalPrice = 0;
  }
}



function validateEmail($email) {
  $errorMessage = "Please enter a valid email address.";
  $successMessage = "Thank you for your order";

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<script>alert('$errorMessage');</script>";
  }
}


if (isset($_GET["submit"])) {

  $name = isset($_GET["name"]) ? $_GET["name"] : "";
  $lastname = isset($_GET["lastname"]) ? $_GET["lastname"] : "";
  $country = isset($_GET["country"]) ? $_GET["country"] : "";
  $email = isset($_GET["email"]) ? $_GET["email"] : "";
  $subject = isset($_GET["subject"]) ? $_GET["subject"] : "";
  $message = isset($_GET["message"]) ? $_GET["message"] : "";



  requireField($name AND $lastname AND $country AND $email AND $message AND $subject);
  validateEmail($email);
}

?>
