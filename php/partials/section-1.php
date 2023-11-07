<div class="divform mx-40 my-10">

  

  <form  method="POST" action="customers.json" class="form flex flex-col  flex-wrap w-80">

    <img src="../asset/img/hackers-poulette-logo.png" alt="logo" class="log objet-center object-cover h-96 w-96">

    <label class="text-customwhite mx-10 " for="name">Name:</label>
    <input class="text-customgray mx-10 " type="text" id="name" name="name" required aria-describedby="nameError">
    <div id="nameError" class="error" aria-live="polite"></div>


    <label class="text-customwhite mx-10" for="lastname" required>Lastname:</label>
    <input class="text-customgray mx-10" type="text" id="lastname" name="lastname"><br>

    <label class="text-customwhite mx-10" for="country" required>Country:</label>
    <input class="text-customgray mx-10" type="text" id="country" name="country"><br>

    <label class="text-customwhite mx-10" for="email" required>Email:</label>
    <input class="text-customgray mx-10" type="email" id="email" name="email"><br>

    <label class="text-customwhite mx-10" for="subject">Subject:</label>
    <select name="subject" id="subject" class="mx-10" >
      <option class="text-customgray" value="subject0" selected>Select a subject</option>
      <option class="text-customgray" value="subject1">Technical problem</option>
      <option class="text-customgray" value="subject2">Administrative problem</option>
      <option class="text-customgray" value="subject3">Other problem</option>
    </select><br>

    <label class="text-customwhite mx-10" for="message" required>Message:</label>
    <textarea class="text-customgray mx-10 h-40" id="message" name="message"></textarea><br>

    <input class="bg-customindigo text-customwhite mx-10" type="submit" value="Submit" name="submit">

    <?php
      session_start();

      function requireField($inputArray) {
        $errorMessage = "Please complete all fields of the form.";
        $successMessage = "Thank you for your message";

        foreach ($inputArray as $input) {
          if (empty($input)) {
            echo "<script>alert('$errorMessage');</script>";
            return false;
          }
        }

        echo "<script>alert('$successMessage');</script>";
        return true;
      }

      function validateEmail($email) {
        $errorMessage = "Please enter a valid email address.";
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "<script>alert('$errorMessage');</script>";
          return false;
        }
        
        return true;
      }

      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["submit"])) {
        $name = isset($_POST["name"]) ? $_POST["name"] : "";
        $lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : "";
        $country = isset($_POST["country"]) ? $_POST["country"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $subject = isset($_POST["subject"]) ? $_POST["subject"] : "";
        $message = isset($_POST["message"]) ? $_POST["message"] : "";
    
        if ($subject === 'subject0') {
          echo "<script>alert('Please select a valid subject');</script>";
      } else {
        $formdata = array(
            'name' => $name,
            'lastname' => $lastname,
            'country' => $country,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        );
    
        $customers = file_get_contents('customers.json');
        $customersArray = json_decode($customers, true);
    
        $customersArray[] = $formdata;
    
        file_put_contents('customers.json', json_encode($customersArray));
    
        echo "<script>alert('Thank you for your message.');</script>";
    }
  }
    ?>
  </form>
</div>

