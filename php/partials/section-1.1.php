<div class="divform mx-40 my-10">

   <form  method="POST" action="./data/customers.json"  class="form flex flex-col  flex-wrap w-80"> <!-- onsubmit="validateForm(event) -->

    <img src="../asset/img/hackers-poulette-logo.png" alt="logo" class="log objet-center object-cover h-96 w-96">

    <div class="grid grid-cols-2 content-center text-center">

    <label class="text-customwhite" for="name">Name:</label>
    <input class="text-customgray" type="text" id="name" name="name" aria-describedby="nameError" aria-invalid="true">
    <p id="nameError" role="alert">Please enter a name.</p><br>

    <!-- <div id="nameError" class="error" aria-live="polite">
      <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["Submit"]) && empty($name)) {
        echo "Please enter a name.";
      } ?>
    </div><br> -->

    <label class="text-customwhite " for="lastname">Lastname:</label>
    <input class="text-customgray " type="text" id="lastname" name="lastname" required aria-describedby="nameError">
    <div id="nameError" class="error" aria-live="polite">
      <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["Submit"]) && empty($lastname)) {
        echo "Please enter a lastname.";
      } ?>
    </div><br>

    <label class="text-customwhite ">Gender:</label>
    <div class="">
      <label for="male" class="text-customwhite">Male</label>
      <input class="mx-0.5" type="radio" id="male" name="gender" value="male" required>

      <label for="female" class="text-customwhite">Female</label>
      <input class="mx-0.5" type="radio" id="female" name="gender" value="female" required>

      <label for="other" class="text-customwhite">Other</label>
      <input class="mx-0.5" type="radio" id="other" name="gender" value="other" required>
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

    <label class="text-customwhite" for="country">Country:</label>
    <input class="text-customgray" type="text" id="country" name="country" required aria-describedby="nameError">
    <div id="nameError" class="error" aria-live="polite">
      <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["Submit"]) && empty($country)) {
        echo "Please enter a country.";
      } ?>
    </div><br>

    <label class="text-customwhite" for="email">Email:</label>
    <input class="text-customgray" type="email" id="email" name="email" required aria-describedby="emailError">
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

    <label class="text-customwhite " for="subject">Subject:</label>
    <select name="subject" id="subject" class="">
      <option class="text-customgray" value="subject0" selected required>Other problem</option>
      <option class="text-customgray" value="subject1" required>Technical problem</option>
      <option class="text-customgray" value="subject2" required>Administrative problem</option>
    </select><br>
    </div>

    <label class="text-customwhite" for="message">Message:</label>
    <textarea class="text-customgray h-20" id="message" name="message" required aria-describedby="nameError"></textarea><br>
    
    <div id="nameError" class="error" aria-live="assertive">
        <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $message = $_POST['message'];
            if (isset($_POST["Submit"]) && empty($message)) {
                echo "Please enter a message.";
            } 
        }
        ?>
    </div><br>

    <input class="bg-customindigo text-customwhite mx-10" type="Submit" value="Submit" name="Submit">
  </form>
</div>

<!-- <script>
    function validateForm(event) {
        event.preventDefault(); 
        let name = document.getElementById('name').value.trim();
        let lastname = document.getElementById('lastname').value.trim();
        let gender = document.querySelector('input[name="gender"]:checked');
        let country = document.getElementById('country').value.trim();
        let email = document.getElementById('email').value.trim();
        let message = document.getElementById('message').value.trim();

        let nameError = document.getElementById('nameError');
        let lastnameError = document.getElementById('lastnameError');
        let genderError = document.getElementById('genderError');
        let countryError = document.getElementById('countryError');
        let emailError = document.getElementById('emailError');
        let messageError = document.getElementById('messageError');

        nameError.textContent = !name ? 'Please enter a name.' : '';
        lastnameError.textContent = !lastname ? 'Please enter a lastname.' : '';
        genderError.textContent = !gender ? 'Please select a gender.' : '';
        countryError.textContent = !country ? 'Please enter a country.' : '';
        emailError.textContent = !email ? 'Please enter an email address.' : '';
        emailError.textContent += !email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email) ? ' Please enter a valid email address.' : '';
        messageError.textContent = !message ? 'Please enter a message.' : '';

        if (name || lastname || !gender || country || email || !message) {
            return false;
        }

        event.target.submit();
    }
</script> -->


    <?php
  
     
    
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["Submit"])) {
        $name = isset($_POST["name"]) ? $_POST["name"] : "";
        $lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : "";
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
        $country = isset($_POST["country"]) ? $_POST["country"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $subject = isset($_POST["subject"]) ? $_POST["subject"] : "";
        $message = isset($_POST["message"]) ? $_POST["message"] : "";      
      
        $formdata = array(
            'name' => $name,
            'lastname' => $lastname,
            'gender' => $gender,
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
    ?>
  

