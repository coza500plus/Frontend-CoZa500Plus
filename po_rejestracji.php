<?php require_once "header.php" ?>

	<div class="after_register" >
		<i><h1 class="after_register_head">WITAJ!</h1></i>
		<i><p>Wspaniale, dołączyłeś do społeczności naszej platformy,
		 możesz teraz oceniać, komentować i śledzić ulubione oferty zakupowe.</p>
		 <p>Zajmiemy się teraz spersonalizowaniem ofert pod Twoje indywidualne,
		 	zróżnicowane potrzeby. Dzięki temu będziemy w stanie zapewnić Ci 
		 	najtrafniejsze oferty zakupowe, którymi potencjalnie będziesz 
		 	zainteresowany </p></i><br>

		 <p>Przejdź dalej, aby skonfigurować swoje konto!</p>
		 <button class="like_login_btn">DALEJ</button>
	</div>

	<div class="after_register">

	    <i><h1 class="after_register_head">KROK 1</h1></i>

	    <i><p>Określ proszę ile masz dzieci.</p></i>	
	   	<div class="before_option_radio"><b>1</b>
		    <div class="option_radio">
		    	<label > <input type="radio" value="1" name="children" checked> </label>
		    </div>
		</div>
		<div class="before_option_radio"><b>2</b>
	    	<div class="option_radio">
	    		<label > <input type="radio" value="2" name="children"> </label>
	    	</div>
	    </div>
	    <div class="before_option_radio"><b>3</b>
		    <div class="option_radio">
		    	<label > <input type="radio" value="3" name="children"> </label>
		    </div>
	    </div>
	    <div class="before_option_radio"><b>4</b>
		    <div class="option_radio">
		    	<label > <input type="radio" value="4" name="children"> </label>
		    </div>
	    </div>
	    <div class="before_option_radio"><b>5<</b>
		    <div class="option_radio">
		    	<label > <input type="radio" value="5" name="children"> </label>
		    </div>
	    </div><br>
	       
			<button class="like_login_btn">DALEJ</button>
	</div>

	<div class="after_register">
		<i> <h1 class="after_register_head">KROK 2</h1> </i> 
		
		<div class="cos"></div>

		<button class="like_login_btn">DALEJ</button>
	</div>

	<div class="after_register">
		<i> <h1 class="after_register_head">KROK 3</h1> </i> 
		
		<i> <p>Określ, jakie oferty interesują Cię najbardziej.</p> </i> 

		<label for="Zabawki"  class="type_of_offer" >
			<input type="checkbox" name="kategoria" id="Zabawki" c>
			<img src="test.jpg" alt="test">
			<div class="inside_type_of_offer">Zabawki</div> 
		</label>

		<label for="Rozrywka"  class="type_of_offer" >
			<input type="checkbox" name="kategoria" id="Rozrywka" >
			<img src="test.jpg" alt="test">
			<div class="inside_type_of_offer">Rozrywka</div> 
		</label>

		<label for="Podroze"  class="type_of_offer" >
			<input type="checkbox" name="kategoria" id="Podroze" >
			<img src="test.jpg" alt="test">
			<div class="inside_type_of_offer">Podróże</div> 
		</label>

		<label for="Akcesoria"  class="type_of_offer" >
			<input type="checkbox" name="kategoria" id="Akcesoria" >
			<img src="test.jpg" alt="test">
			<div class="inside_type_of_offer">Akcesoria</div> 
		</label>

		<label for="Edukacja"  class="type_of_offer" >
			<input type="checkbox" name="kategoria" id="Edukacja" >
			<img src="test.jpg" alt="test">
			<div class="inside_type_of_offer">Edukacja</div> 
		</label>

		<label for="Sport"  class="type_of_offer" >
			<input type="checkbox" name="kategoria" id="Sport" >
			<img src="test.jpg" alt="test">
			<div class="inside_type_of_offer">Sport</div> 
		</label>

		<label for="Artykuly_ciazowe"  class="type_of_offer" >
			<input type="checkbox" name="kategoria" id="Artykuly_ciazowe" >
			<img src="test.jpg" alt="test">
			<div class="inside_type_of_offer">Artykuły ciążowe</div> 
		</label>

		<label for="Kupony"  class="type_of_offer" >
			<input type="checkbox" name="kategoria" id="Kupony" >
			<img src="test.jpg" alt="test">
			<div class="inside_type_of_offer">Kupony</div> 
		</label><br>

		<button class="like_login_btn">DALEJ</button>
	</div>

	<div class="after_register">
		
		<h1 class="after_register_head">GOTOWE</h1>
		<p></p>



	</div>

	<script>

		var next = 0;
		var zmien_kolor = true;

		const after_register = document.getElementsByClassName('after_register');
		const like_login_btn = document.getElementsByClassName('like_login_btn');
		const type_of_offer = document.getElementsByClassName('type_of_offer');

		after_register[1].style.display = "none";
		after_register[2].style.display = "none";
		after_register[3].style.display = "none";
		after_register[4].style.display = "none";

		Array.from(like_login_btn).forEach(function(btn_after_register) {

			btn_after_register.addEventListener('click', function() {

					after_register[next].style.display = 'none';
					next++;
					after_register[next].style.display = 'block';
			})
		})

		Array.from(type_of_offer).forEach(function(clicked_offer){

			 clicked_offer.addEventListener('click', function(t_o_o) {

			 	if(zmien_kolor){
			 	this.style ="background-color:blue";
			 	zmien_kolor = false;
			
			 	console.log('niebieski');
			 	}
			 	else  {
			 		this.style ="background-color:green";
			 		console.log('zielony');
			 		zmien_kolor = true;
			 	}
			 	
			 		
			 
			 	
			})

		 })		

	</script>







<?php require_once "footer.php" ?>