<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>

    <?php if (isset($_POST['form_submitted'])): ?>

        <h2>Thank You <?php echo $_POST['vorname']; ?> </h2>

        <p>You have been registered as
            <?php echo $_POST['vorname'] . ' ' . $_POST['nachname']; ?>
        </p>

        <p>Go <a href="/form.php">back</a> to the form</p>

        <?php else: ?>

            <h2>Registration Form</h2>

            <form action="form.php" method="POST">

                 First name:
                <input type="text" name="vorname">
                
                <br> Last name:
                <input type="text" name="nachname">
                
			<input type="hidden" name="form_submitted" value="1" />

                <input type="submit" value="Submit">

            </form>

      <?php endif; ? > 
</body> 
</html>