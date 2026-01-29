<?php require "includes/header.php" ?>
<main>
    <!-- Creating the form using HTML. -->
    <h2>Bake It Till You Make It Bakery Contact Form</h2>
    <form action ="process.php" method="post">
        <fieldset>
            <legend>Customer Information</legend>
            <label for="first_name">First name</label>
            <input type="text" id="first_name" name="first_name" required>
            <br>
            <label for="last_name">Last name</label>
            <input type="text" id="last_name" name="last_name" required>
            <br>
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="customerMessage">Message</label>
            <textarea id="customerMessage" name="customerMessage"></textarea>

            <p>
                <!--Adds submit button that sends it to the process and reset if the user wants to reset the information -->
                <button type="submit">Submit Info</button>
                <button type="reset">Reset Info</button>
            </p>
        </fieldset>
    </form>
</main>
<?php require "includes/footer.php" ?>