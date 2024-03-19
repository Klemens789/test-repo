<form action="wynik_v2.php" method="POST">
<h2>FORMULARZ</h2>
<h4 style="color:red">Wprowadz swoje dane osobowe</h4>
 Imie:
<input type="text" name="imie" placeholder="jak masz na imie?"><br><br>
Nazwisko:
<input type="text" name="nazwisko" placeholder="jak masz na nazwisko?"><br><br>
Uczelnia: 
<input type="text" name="uczelnia" placeholder="jaka uczelnia?"><br><br>
Podaj hasło do swojego banku: 
<input type="password" name="hasło" placeholder="max 10 znaków" maxlength="10"><br><br>
<h4 style="color:red">Płeć i Wiek</h4>
<input type="radio" name="płeć" value="Mężczyzna">Mężczyzna<br>
<input type="radio" name="płeć" value="Kobieta">Kobieta<br>
Ile masz lat?
<input type="number" name="wiek" min="1" max="100"><br>





<input type="submit" value="Wyslij"><br>
</form>    