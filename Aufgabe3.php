<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aufgabe3 - Anlagerechner</title>
</head>
<style>
    h1 {
        text-shadow: rgba(14, 180, 240, 0.9) 0px 0px 39px;
        font-family: system-ui;
        text-align: center;
    }

    .content {
        font-family: system-ui;
        text-align: center;
    }
</style>

<body style="background-color: grey;">
    <div class="content">
        <h1 style="color: blue;">Anlagerechner</h1>

        <p>Geben Sie bitte die folgenden Werte ein:</p>
        <form action="Aufgabe3helper.php" method="post">
            <p><input name="grundbetrag"> Betrag in Euro</p>
            <p><input name="laufzeit"> Laufzeit</p>
            <p><input type="submit"> <input type="reset"></p>
        </form>
    </div>
</body>

</html>