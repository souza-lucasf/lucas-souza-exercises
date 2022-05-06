<!-- <link rel="stylesheet" href="style.css"> -->

<!-- PART 1. A -->


<!-- First I create a very simple form, with the inputs I need. -->

<h1>FORM</h1>
<form action="" method="POST">
    <h3 style="color:#000;">First Name:</h3>
    <input type="text" name="firstName" placeholder="Type first name here"><br>

    <h3 style="color:#000;">Last Name:</h3>
    <input type="text" name="lastName"placeholder="Type last name here"><br>

    <h3 style="color:#000;">Email:</h3>
    <input type="text" name="email"placeholder="Type valid email here"><br>

    <input type="submit" name="submitBtn" value="Send">
</form>
<!-- The email input is with the type of 'text' instead of 'email' just to make sure the backend validation is working, otherwise the frontend validation would be popping up alerts with javascript. -->




<?php

//In the PHP part I started creating a variable with the value of 'false', meaning there are no errors at this moment.
$error = false;


//Here I create a condition to know if the submit button was clicked, and then, saving the user input values from the form into the respective variables using the POST method.

if(isset($_POST['submitBtn'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];

// Now, the next lines of code are the validations from user inputs and error messages. I also change the value of the '$error' variable to true if there is an error.


    //firstname empty?
    if(empty($firstName)){
        echo 'First name field is mandatory! <br>';
        $error = true;
    }
    //lastname empty?
    if(empty($lastName)){
        echo 'Last name field is mandatory! <br>';
        $error = true;
    }
    //email field empty?
    if(empty($email)){
        echo 'Email field is mandatory! <br>';
        $error = true;

    }else{
        //email valid?
        if (!str_contains($email, '@')) {
            echo 'Please, type a valid e-mail! <br>';
            $error = true;
        }
    }



    // After checking all the information above, if there is no errors, I connect to the database and add the new user.
    if($error == false){
        
        //Then I can do whatever I want with the data, like saving in the data base for exemple;
        echo 'Everything is ok!';
        
    }


}
?>

















