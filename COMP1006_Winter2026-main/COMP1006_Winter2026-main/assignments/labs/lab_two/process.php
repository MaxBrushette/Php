<?php require "includes/header.php";
//Makes sure the form uses POST method.
if($_SERVER['REQUEST_METHOD']!=='POST'){
    echo "<p>This page needs to be a POST form submission.</p>";
    exit;
}
//reads from input_post, prevents html injection, and initializes the variables.
$firstName = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
$lastName = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$customerMessage = filter_input(INPUT_POST, 'customerMessage', FILTER_SANITIZE_SPECIAL_CHARS);
//Keeps track of the errors.
$errors = [];
//Validating the names
if($firstName===null || $firstName === ''){
    $errors[]="First name is required.";
}
if($lastName === null || $lastName === ''){
    $errors[]="Last name is required.";
}
//Validating email address
if($email===null||$email ===''){
    $errors[]="Email is required.";
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors[] = "Invalid email address.";
}
//This isn't required so I didn't add it to the errors array.
if($customerMessage===null||$customerMessage===''){
    $customerMessage="You did not leave an additional message.";
}

?>
<!-- Writes out the errors. -->
    <main>
    <?php if(!empty($errors)){
        ?>
        <h1>There was an issue with your contact information.</h1>

        <ul><?php foreach($errors as $error): ?>
            <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>
<?php
exit;
}
?>
</main>
<h1>Thank you!</h1>
<p>Your contact information has been sent to our service team.</p>
<h2>The contact information entered:</h2>

<p>Name: <?=  $firstName ?> <?= $lastName ?></p>
<p>Email: <?= $email ?></p>

<h3>Your additional message:</h3>
<p><?= $customerMessage ?></p>

<?php require "includes/footer.php"; ?>