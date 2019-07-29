<?php require_once "header.php"; ?>

   <main>

              <h1 id="title1">KONTAKT</h1>
              <h3 id="title2">WYPEŁNIJ FORMULARZ KONTAKOWY ABY SIĘ Z NAMI SKONTAKTOWAĆ.</h3>

    <div id="filling-form">

    <form  method="post" action="sprawdz.php" id="formularz">

        <div>
          <label class="pole">Nick / Imię:  <span >*</span></label></br>
          <input type="text" class="input" name="nick"  />
        </div>
        <div>
          <label class="pole">Adres e-mail: <span >*</span></label></br>
          <input type="text" class="input" name="mail"  />
        </div>
        <div>
          <label class="pole">Temat: <span >*</span></label></br>
          <input type="text" class="input" name="temat"<?php if(isset($_SESSION['temat']))
            echo 'value="'.$_SESSION['temat'].'"';?>/>
          </div>
        <div>
          <label class="pole">Treść: <span >*</span></label></br>
          <textarea cols="27" rows="10" class="input" name="tresc" ><?php if(isset($_SESSION['tresc'])) echo $_SESSION['tresc']?></textarea>
        </div>
        <div>
          <span>*</span> - oznacza pola wymagane.
        </div>
        <div>
          <input type="submit" value="Wyślij" id="submit" />
        </div>

      </form>

    </div>
            <div>
            <h1 id="title3">Można również wysłać wiadomość z zapytaniem pod adres:</h1>
            <h2 id="title2">kontakt@coza500plus.pl</h2>
          </div>
          </main>

          <script type="text/javascript" id="cookieinfo"
            src="//cookieinfoscript.com/js/cookieinfo.min.js"
            data-bg="#4a148c"
            data-fg="#FFFFFF"
            data-link="#ffffff"
            data-cookie="CookieInfoScript"
            data-text-align="left"
                 data-close-text="Rozumiem">
          </script>



        </main>

    <?php require_once "footer.php"; ?>
