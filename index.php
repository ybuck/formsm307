<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kunden & Addressen</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="rendered-form text-center">
        <div class="titel">
            <h1 access="false" id="control-2154729">Kunden Erfassung</h1>
        </div>
    <form action="save.php" method="post">
        <div class="form d-flex justify-content-center col-md-8 offset-md-2">
            <div class="form-items container border card p-3 bg-light">
                <div class="row">
                    <div class="formbuilder-text form-group field-vorname col-md-6">
                        <label for="vorname" class="formbuilder-text-label">Vorname<span class="formbuilder-required">*</span></label>
                        <input type="text" class="form-control" name="vorname" access="false" id="vorname" required="required" aria-required="true">
                    </div>
                    <div class="formbuilder-text form-group field-nachname col-md-6">
                        <label for="nachname" class="formbuilder-text-label">Nachname<span class="formbuilder-required">*</span></label>
                        <input type="text" class="form-control" name="nachname" access="false" id="nachname" required="required" aria-required="true">
                    </div>
                </div>
                <div class="row">
                    <div class="formbuilder-text form-group field-strasse col-md-6">
                        <label for="strasse" class="formbuilder-text-label">Strasse<span class="formbuilder-required">*</span></label>
                        <input type="text" class="form-control" name="strasse" access="false" id="strasse" required="required" aria-required="true">
                    </div>
                    <div class="formbuilder-text form-group field-postleitzahl col-md-6">
                        <label for="postleitzahl" class="formbuilder-text-label">Postleitzahl<span class="formbuilder-required">*</span></label>
                        <input type="text" class="form-control" name="postleitzahl" access="false" id="postleitzahl" required="required" aria-required="true">
                    </div>
                </div>
                <div class="row">
                    <div class="formbuilder-text form-group field-wohnort col-md-6">
                        <label for="wohnort" class="formbuilder-text-label">Wohnort<span class="formbuilder-required">*</span></label>
                        <input type="text" class="form-control" name="wohnort" access="false" id="wohnort" required="required" aria-required="true">
                    </div>
                    <div class="formbuilder-text form-group field-telefonnummer col-md-6">
                        <label for="telefonnummer" class="formbuilder-text-label">Telefonnummer<span class="formbuilder-required">*</span></label>
                        <input type="tel" class="form-control" name="telefonnummer" access="false" id="telefonnummer" required="required" aria-required="true">
                    </div>
                </div>
                <div class="row">
                    <div class="formbuilder-text form-group field-email">
                        <label for="email" class="formbuilder-text-label">E-Mail<span class="formbuilder-required">*</span></label>
                        <input type="email" class="form-control" name="email" access="false" id="email" required="required" aria-required="true">
                        <small id="emailHelp" class="form-text text-muted">Wir teilen deine E-Mail Addresse nie mit Dritten.</small>
                    </div>
                </div>
                <div class="row">
                    <div class="formbuilder-select form-group field-kundenklasse">
                        <label for="kundenklasse" class="formbuilder-select-label">Kundenklasse<span class="formbuilder-required">*</span></label>
                        <select class="form-control" name="kundenklasse" id="kundenklasse" required="required" aria-required="true">
                            <option value="option-1" selected="true" id="kundenklasse-0">Firmenkunde</option>
                            <option value="option-2" id="kundenklasse-1">Einzelkunde</option>
                            <option value="option-3" id="kundenklasse-2">Partner</option>
                            <option id="kundenklasse-3">Betriebslehrstelle</option>
                        </select>
                        
                    </div>
                </div>
                <div class="container flex-container center">
                    <div class="row col-md- submit">
                        <input class="btn btn-primary" type="submit" value="Submit" formaction="save.php">
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</body>
</html>