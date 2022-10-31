// This file is PHP.
<html>    
<?php
    if ($_POST['submit']) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        $strtadd1 = $_POST['strtadd1'];
        $strtadd2 = $_POST['strtadd2'];
        $city = $_POST['city'];
        $success = '';


        // Upon Success.
        if ($firstname != '' && $lastname != '' && $email != '' && $password != '' && $confirmpassword != '' && $strtadd1 != '' && $strtadd2 != '' && $city != '') {
            // Change $success variable from an empty string.
            $success = 'success';

            // Insert whatever you want to do upon success.

        } else {
            // Upon Failure.
            echo '<p class="error">Fill in all fields.</p>';

            // Set $success variable to an empty string.
            $success = '';
        }
    }
   ?>
<form method="POST" action="#">
    <label class="w">Plan :</label>
    <select autofocus="" name="plan" required="required">
        <option value="">Select One</option>
        <option value="FREE Account">FREE Account</option>
        <option value="Premium Account Monthly">Premium Account Monthly</option>
        <option value="Premium Account Yearly">Premium Account Yearly</option>
    </select>
    <br>
    <label class="w">
        First Name :
    </label>
    <input name="firstname" type="text" placeholder="First Name" required="required" value="<?php if (isset($firstname) && $success == '') {echo $firstname;} ?>">
    <br>

    <label class="w">
        Last Name :
    </label>
    <input name="lastname" type="text" placeholder="Last Name" required="required" value="<?php if (isset($lastname) && $success == '') {echo $lastname;} ?>">
    <br>

    <label class="w">
        E-mail ID :
    </label>

    <input name="email" type="email"  placeholder="Enter Email" required="required" value="<?php if (isset($email) && $success == '') {echo $email;} ?>"><br>
    <label class="w">Password :</label><input name="password" type="password" placeholder="********" required="required" value="<?php if (isset($password) && $success == '') {echo $password;} ?>"><br>
    <label class="w">Re-Enter Password :</label><input name="confirmpassword" type="password" placeholder="********" required="required" value="<?php if (isset($confirmpassword) && $success == '') {echo $confirmpassword;} ?>"><br>
    <label class="w">Street Address 1 :</label><input name="strtadd1" type="text" placeholder="street address first" required="required" value="<?php if (isset($strtadd1) && $success == '') {echo $strtadd1;} ?>"><br>
    <label class="w">Street Address 2 :</label><input name="strtadd2" type="text" placeholder="street address second"  value="<?php if (isset($strtadd2) && $success == '') {echo $strtadd2;} ?>"><br>
    <label class="w">City :</label><input name="city" type="text" placeholder="City" required="required" value="<?php if (isset($city) && $success == '') {echo $city;} ?>"><br>
    <input type="submit" name="submit">
</form>
</html>