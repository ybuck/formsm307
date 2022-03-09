<!DOCTYPE html>-
<html lang="de">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kunden & Addressen</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<head>
<body>
    <div class="justify-content-center">
    <div class="container border card p-3 bg-light col-md-4">
        <p>Danke fürs ausfüllen, wir haben die Daten erfolgreich erhalten.
        <p>Ihre Daten werden nochmals hier aufgelistet:<br><br>  
            <?php
            echo 'Vorname: ' . $_POST["vorname"] . '<br>';
            echo 'Nachname: ' . $_POST["nachname"] . '<br>';
            echo 'Email Addresse: ' . $_POST["EMail"] . '<br>';
            echo 'Telefonnummer:  ' . $_POST ["Telefonnummer"];
            ?>
    </div>
    </div>
</body>