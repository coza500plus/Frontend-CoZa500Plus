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
		    <label class="option_radio">
		    	  <input type="radio" value="1" name="children" checked> 
		    </label>
		</div>
		<div class="before_option_radio"><b>2</b>
	    	<label class="option_radio">
	    		 <input type="radio" value="2" name="children"> 
	    	</label>
	    </div>
	    <div class="before_option_radio"><b>3</b>
		    <label class="option_radio">
		    	 <input type="radio" value="3" name="children"> 
		    </label>
	    </div>
	    <div class="before_option_radio"><b>4</b>
		    <label class="option_radio">
		    	 <input type="radio" value="4" name="children"> 
		    </label>
	    </div>
	    <div class="before_option_radio"><b>5<</b>
		    <label class="option_radio">
		    	 <input type="radio" value="5" name="children"> 
		    </label>
	    </div><br>
	       
			<button class="like_login_btn">DALEJ</button>
	</div>

	<div class="after_register">
		<i> <h1 class="after_register_head">KROK 2</h1> </i> 
		
		<div id ="age_of_children">
			
		</div>

		<button class="like_login_btn">DALEJ</button>
	</div>

	<div class="after_register">
		<i> <h1 class="after_register_head">KROK 3</h1> </i> 
		
		<i> <p>Określ, jakie oferty interesują Cię najbardziej.</p> </i> 

		<label for="Zabawki"  class="type_of_offer" >
			<input type="checkbox" name="kategoria" id="Zabawki" >
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

	///////////////////////// KROK 1 //////////////////////////////////////////////////
	const option_radio = document.getElementsByClassName('option_radio');
	Array.from(option_radio).forEach(function(radio_option) {

			radio_option.addEventListener('click', function(r_o){

				if(radio_option.children[0].checked){
					 this.style.background = '#6100c2';
				}
				else {
					this.style.background = '#fbfbfb';
				}

				if_checked_STEP1();
			})

	})
	///////////////////////// KROK 2 //////////////////////////////////////////////////

	 age_of_children = document.getElementById('age_of_children');

	/////////////////////////// KROK 3 + ogolne ///////////////////////////////////////////
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

					if(next == 1) {
						if_checked_STEP1();
					}

					if(next == 2) {
						add_age_of_kid_STEP2();

						//console.log(option_radio[0].children[0].value);
					}

					if(next == 3) {
						if_checked_STEP3();
					}
			})
		})

		Array.from(type_of_offer).forEach(function(clicked_offer){

			 clicked_offer.addEventListener('click', function(t_o_o) {

			 				// DZIALA // 

			 	if(clicked_offer.children[0].checked) {
			 		this.style.background ="green";
			 		this.style.color = 'white';
			 		console.log("A");
			 	}

			 	else {
			 		this.style.background ="#fbfbfb";
			 		this.style.color ='black';
			 	}
			})
		 })		

		function if_checked_STEP1(){
			for(var m = 0; m < option_radio.length; m++) {
				if(option_radio[m].children[0].checked){
					option_radio[m].style.background = '#6100c2';
				}
				else option_radio[m].style.background = '#fbfbfb';
			}
			return
		}

		function add_age_of_kid_STEP2(){
			for(var m = 0; m < option_radio.length; m++) {
				if(option_radio[m].children[0].checked){
				age_of_children.innerHTML = '';//WyczyszczenieDlaPewnosciRaczejNiepotrzebne 

					for(var n = 0; n < option_radio[m].children[0].value; n++) {
					age_of_children.innerHTML+=
					'<label class="age_of_kid"><input type="radio" name="age_'+n+'"></label>';
					}
					break;
				}
		}
	}

		function if_checked_STEP3(){
			for(var m = 0; m < type_of_offer.length; m++) {
				if(type_of_offer[m].children[0].checked){
					type_of_offer[m].style.background = 'green';
					type_of_offer[m].style.color = 'white';
				}
				else type_of_offer[m].style.background = '#fbfbfb';
					 type_of_offer[m].style.color = 'black';
			}
		}

	</script>







<?php require_once "footer.php" ?>