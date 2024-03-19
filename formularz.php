<head>
    <style>
        form{
              background-color: aqua;
              margin: 0;
            }
            article{
                border: 1px solid black;
                margin: 1px;
                padding: 10px;
            }
    </style>
</head>
<form action="wynik_v2.php" method="POST">
<h2>FORMULARZ</h2>
<h4 style="color:red">Wprowadz swoje dane osobowe</h4>
<article>
 Imie:
<input type="text" name="imie" placeholder="jak masz na imie?"><br><br>
Nazwisko:
<input type="text" name="nazwisko" placeholder="jak masz na nazwisko?"><br><br>
Uczelnia: 
<input type="text" name="uczelnia" placeholder="jaka uczelnia?"><br><br>
Podaj hasło do swojego banku: 
<input type="password" name="hasło" placeholder="max 10 znaków" maxlength="10"><br><br>
</article>
<h4 style="color:red">Płeć i Wiek</h4>
<article>
<input type="radio" name="płeć" value="Mężczyzna">Mężczyzna<br>
<input type="radio" name="płeć" value="Kobieta">Kobieta<br>
Ile masz lat?
<input type="number" name="wiek" min="1" max="100"><br>
</article>
<h4 style="color:red">Wybierz ulubiony przedmiot</h4>
<article>
<input type="checkbox" name="subject[]" value="matematyka">matematyka<br>
<input type="checkbox" name="subject[]" value="programowanie">programowanie<br>
<input type="checkbox" name="subject[]" value="systemy operacyjne">systemy operacyjne<br>
<input type="checkbox" name="subject[]" value="oprogramowanie uzytkowe">oprogramowanie uzytkowe<br>
<input type="checkbox" name="subject[]" value="TPI">TPI<br>
<input type="checkbox" name="subject[]" value="hiperteksty">hiperteksty<br>
</article>
<h4 style="color:red">Dlaczego informatyka jest popularna?</h4>
<article>
Informatyka jest:
    <select name="wybor[]" id="wybor">
        <option disabled selected>Wybierz opinie:</option>
         <option name="wybor[]" value="kasa">kasa</option>
         <option name ="wybor[]" value="zainteresowanie">interesujaca</option>
         <option name="wybor[]" value="opłacalna">opłacalna</option>
         <option name="wybor[]" value="szybka">szybka</option>
    </select>
</article>
<h4 style="color:red">Co lubisz w informatyce najbardziej?</h4>
<article>
<textarea name="my_textarea" rows="4" cols="40" placeholder="Tu napisz swoją opinie o informatyce."></textarea><br>
<h4 style="color:red">Dodatkowe informacje</h4>
Ile razy byłes na wykładzie z matematyki?
<input type="number" name="wyklad" max="13" min="0"><br><br>
Kiedy ostatnio byłeś w górach?
<input type="date" name="gory"><br><br>
Twój ulubiony kolor?
<input type="color" name="color"><br><br>
Szczęśliwa liczba: 0
<input type="range" name="slider" min="0" max="100">100<br><br>
Zabezpiczenie(szyfrowanie danych przesłanych w formularzu)<br>
</article>
<input type="checkbox" name="akceptuje">
Akceptuje zasady i warunki*<br>
<input type="reset" value="Wyczyść ankietę"><br>
<input type="submit" value="Wyslij"><br>
</form>    