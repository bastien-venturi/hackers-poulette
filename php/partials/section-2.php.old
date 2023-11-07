<div class="divform mx-40 my-10">

  

  <form  method="POST" action="customers.json" class="form flex flex-col  flex-wrap w-80">

    <img src="../asset/img/hackers-poulette-logo.png" alt="logo" class="log objet-center object-cover h-96 w-96">

    <label class="text-customwhite mx-10" for="name">Name:</label>
    <input class="text-customgray mx-10" type="text" id="name" name="name" required aria-describedby="nameError">
    <div id="nameError" class="error" aria-live="polite">
      <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["Submit"]) && empty($name)) {
        echo "Please enter a name.";
      } ?>
    </div><br>

    <label class="text-customwhite mx-10" for="lastname">Lastname:</label>
    <input class="text-customgray mx-10" type="text" id="lastname" name="lastname" required aria-describedby="nameError">
    <div id="nameError" class="error" aria-live="polite">
      <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["Submit"]) && empty($lastname)) {
        echo "Please enter a lastname.";
      } ?>
    </div><br>

    <label class="text-customwhite mx-10">Gender:</label>
    <div class="mx-10">
      <label for="male" class="text-customwhite">Male</label>
      <input type="radio" id="male" name="gender" value="male" required>

      <label for="female" class="text-customwhite">Female</label>
      <input type="radio" id="female" name="gender" value="female" required>

      <label for="other" class="text-customwhite">Other</label>
      <input type="radio" id="other" name="gender" value="other" required>
    </div>
    <div id="genderError" class="error" aria-live="polite">
      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["Submit"])) {
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
        if (empty($gender)) {
          echo "Please select a gender.";
        }
      }
      ?>
    </div><br>


    <label class="text-customwhite mx-10" for="country">Country:</label>
    <input class="text-customgray mx-10" type="text" id="country" name="country" required aria-describedby="nameError">
    <div id="nameError" class="error" aria-live="polite">
      <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["Submit"]) && empty($country)) {
        echo "Please enter a country.";
      } ?>
    </div><br>

    <label class="text-customwhite mx-10" for="email">Email:</label>
    <input class="text-customgray mx-10" type="email" id="email" name="email" required aria-describedby="emailError">
    <div id="emailError" class="error" aria-live="polite">
      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["Submit"])) {
        $email = $_POST["email"];
        if (empty($email)) {
          echo "Please enter an email address.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "Please enter a valid email address.";
        }
      }
      ?>
    </div><br>

    <label class="text-customwhite mx-10" for="subject">Subject:</label>
    <select name="subject" id="subject" class="mx-10">
      <option class="text-customgray" value="subject0" selected required>Other problem</option>
      <option class="text-customgray" value="subject1" required>Technical problem</option>
      <option class="text-customgray" value="subject2" required>Administrative problem</option>
    </select>
    </div><br>

    <label class="text-customwhite mx-10" for="message">Message:</label>
    <input class="text-customgray mx-10" type="text" id="message" name="message" required aria-describedby="nameError">
    <div id="nameError" class="error" aria-live="polite">
      <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["Submit"]) && empty($message)) {
        echo "Please enter a message.";
      } 
      ?>
    </div><br>

    <!-- <label class="text-customwhite mx-10" for="name">Name:</label>
    <input class="text-customgray mx-10" type="text" id="name" name="name" required><br> -->

    <!-- <label class="text-customwhite mx-10" for="lastname">Lastname:</label>
    <input class="text-customgray mx-10" type="text" id="lastname" name="lastname" required><br> -->

    <!-- <label class="text-customwhite mx-10" for="country">Country:</label>
    <input class="text-customgray mx-10" type="text" id="country" name="country" required><br> -->

    <!-- <label class="text-customwhite mx-10" for="email">Email:</label>
    <input class="text-customgray mx-10" type="email" id="email" name="email" required><br> -->

    <!-- <label class="text-customwhite mx-10" for="subject">Subject:</label>
    <select name="subject" id="subject" class="mx-10" >
      <option class="text-customgray" value="subject0" selected>Select a subject</option>
      <option class="text-customgray" value="subject1">Technical problem</option>
      <option class="text-customgray" value="subject2">Administrative problem</option>
      <option class="text-customgray" value="subject3">Other problem</option>
    </select><br> -->

    <!-- <label class="text-customwhite mx-10" for="message" required>Message:</label>
    <textarea class="text-customgray mx-10 h-40" id="message" name="message"></textarea><br> -->

    <input class="bg-customindigo text-customwhite mx-10" type="Submit" value="Submit" name="Submit">

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

      // function validateName($name) {
      //   $errorMessage = "Please enter a name.";
      //   if (empty($name)) {
      //     echo "<script>alert('$errorMessage');</script>";
      //     return false;
      //   }
      //   return true;
      // }

      // function validateLastName($lastname) {
      //   $errorMessage = "Please enter a lastname.";
      //   if (empty($lastname)) {
      //     echo "<script>alert('$errorMessage');</script>";
      //     return false;
      //   }
      //   return true;
      // }

      // function validateCountry($country) {
      //   $errorMessage = "Please enter a country.";
      //   if (empty($country)) {
      //       echo "<script>alert('$errorMessage');</script>";
      //       return false;
      //     }
      //     return true;
      //   }

      // function validateEmail($email) {
      //   $errorMessage = "Please enter a valid email address.";
        
      //   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      //     echo "<script>alert('$errorMessage');</script>";
      //     return false;
      //   }        
      //   return true;
      // }

      // function validateSubject($subject) {
      //   $errorMessage = "Please select a subject.";
      //   if ($subject === 'subject0') {
      //     echo "<script>alert('$errorMessage');</script>";
      //     return false;
      //   }
      //   return true;
      // }

      // function validateMessage($message) {
      //   $errorMessage = "Please enter a message.";
      //   if (empty($message)) {
      //     echo "<script>alert('$errorMessage');</script>";
      //     return false;
      //   }
      //   return true;
      // }


      
    
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["Submit"])) {
        $name = isset($_POST["name"]) ? $_POST["name"] : "";
        $lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : "";
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
        $country = isset($_POST["country"]) ? $_POST["country"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $subject = isset($_POST["subject"]) ? $_POST["subject"] : "";
        $message = isset($_POST["message"]) ? $_POST["message"] : "";
    

  //     //   $validName = validateName($name);
  //     //   $validLastName = validateLastName($lastname);
  //     //   $validCountry = validateCountry($country);
  //     //   $validEmail = validateEmail($email);
  //     //   $validSubject = validateSubject($subject);
  //     //   $validMessage = validateMessage($message);

  //     // if ($validName && $validLastName && $validCountry && $validEmail && $validSubject && $validMessage) {
      
      
        $formdata = array(
            'name' => $name,
            'lastname' => $lastname,
            'gender' => $gender,
            'country' => $country,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        );
      // }

        $customers = file_get_contents('customers.json');
        $customersArray = json_decode($customers, true);
        
        $customersArray[] = $formdata;
    
        file_put_contents('customers.json', json_encode($customersArray));
    
        echo "<script>alert('Thank you for your message.');</script>";
    
  }
    ?>
  </form>
</div>
