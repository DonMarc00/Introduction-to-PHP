<!DOCTYPE html>
<html lang="de">

<head>
   <meta charset="utf-8">
   <title>Pizzaexpress</title>
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
        background-color: grey;
    }
</style>
<body style="background-color: grey;">
    <div class="content" >
   <p>Bitte Name und Adresse eingeben<br>
      und ihre Auswahl treffen</p>
   <form action="Aufgabe4helper.php" method="post">
      <p><input name="besteller"> Name</p>
      <p><textarea name="adresse" cols="20" rows="3"></textarea> Adresse</p>
      <p><input type="radio" name="anrede" value="Herr" checked="checked"> Herr <br>
         <input type="radio" name="anrede" value="Frau"> Frau
      </p>
      <p><select name="pizzatyp">
            <option value="Fungi" selected="selected">
               Fungi (5,00 €)</option>
            <option value="Prosciutto">Prosciutto (6,00 €)</option>
            <option value="Con Tutto">Con Tutto (8,50 €)</option>
            <option value="Hawai">Hawai (12,50 €)</option>
            <option value="Mozzarella">Mozzarella (4,50 €)</option>
         </select></p>
      <p><input type="checkbox" name="saure sahne">
         Extra Saure Sahne (Aufpreis 0,50 €)<br>
         <input type="checkbox" name="salami">
         Extra Salami (Aufpreis 1,00 €)
         <input type="checkbox" name="doenerfleisch">
         Extra Dönerfleish (Aufpreis 0,50 €)
      </p>
      <p><input type="submit"> <input type="reset"></p>
   </form>
   </div>
</body>

</html>