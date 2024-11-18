<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../public/css/styles.css">
    <link href="" rel="stylesheet">
    <title>Register page</title>
</head>

<body>
    <div style="margin-bottom: 20px;"> <!-- Cancel Registration Button -->
        <a href="../../public/index.php" class="">Cancel Registration</a> 
    </div>

    <div class="">
        <h1 class="form-title">Create an Account</h1>
        
        <form action="../register-page.php" method="post"> 
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" class="input-field" value="<?php if (isset($fn)) echo htmlspecialchars($fn); ?>"><br>

            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" class="input-field" value="<?php if (isset($ln)) echo htmlspecialchars($ln); ?>"><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="input-field" value="<?php if (isset($e)) echo htmlspecialchars($e); ?>"><br>

            <label for="psword1">Password:</label>
            <input type="password" name="psword1" class="input-field" id="psword1"><br>

            <label for="psword2">Confirm Password:</label>
            <input type="password" name="psword2" class="input-field" id="psword2"><br>

            <!-- Display validation errors if any exist after the form is submitted -->
            <?php if (!empty($errors)) {
                display_validation_errors($errors);
            } ?>

            <input type="submit" value="Register" class="">
        </form>
    </div>
</body>
</html>
