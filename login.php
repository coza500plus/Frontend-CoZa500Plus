<?php require_once "header.php"; ?>

<main>

      <h1 id="title1">ZAREJESTRUJ SIĘ</h1>
          <h2 id="title2">ZYSKAJ NOWE MOŻLIWOŚCI DOŁĄCZAJĄC DO SPOŁECZNOŚCI UŻYTKOWNIKÓW!</h2>


          <img class="info-baner" src="plomien.png" alt="baner1">


      <div id="filling-form-2">




              <!--<label for="email"><b>Email</b></label><br/><br/>-->
              <input type="text" placeholder="Adres e-mail..." name="email" required><br/><br/>

              <!--<label for="name"><b>Imię</b></label><br/><br/>-->
              <input type="text" placeholder="Imię..." name="imie" required><br/><br/>

              <!--<label for="name"><b>Nazwisko</b></label><br/><br/>-->
              <input type="text" placeholder="Nazwisko..." name="nazwisko" required><br/><br/>

              <!--<label for="Password"><b>Wpisz Hasło</b></label><br/><br/>-->
              <input type="password" placeholder="Hasło..." name="haslo" required><br/><br/>

              <!--<label for="Again Password"><b>Powtórz Hasło</b></label><br/><br/>-->
              <input type="password" placeholder="Powtórz hasło..." name="powtorz haslo" required><br/><br/>
              <hr>

              <p>Tworząc konto akceptujesz nasz <a href="regulamin.php" class="a-regulamin">Regulamin i polityka prywatności</a>.</p>
              <input type="submit" class="registerbtn" value="Dalej!"/>
      </div>

  </main>

        <div style="clear:both;"></div>

<?php require_once "footer.php"; ?>
