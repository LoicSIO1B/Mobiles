		// publicité
function hide_ads_right(){
	// an div tat quang cao
	document.getElementById("exit_ads_right").style.display="none";
	// an div co image quang cao
	document.getElementById("content_ads_right").style.display="none";
	// hien div xem quang cao
	document.getElementById("look_ads_right").style.display="block";
}
function block_ads_right(){
	// hien div tat quang cao
	document.getElementById("exit_ads_right").style.display="block";
	// hien div co image quang cao
	document.getElementById("content_ads_right").style.display="block";
	// an div xem quang cao
	document.getElementById("look_ads_right").style.display="none";
}
// calendrier
 dycalendar.draw({
        target:"#calendar",
        type:"month",
        highlighttoday:true
    });

 // Formulaire de requete

 //Getting all input text objects
		var nom = document.forms["vform"]["nom"];
		var prenom = document.forms["vform"]["prenom"];
		var email = document.forms["vform"]["email"];
		var age = document.forms["vform"]["age"];
		var numtel = document.forms["vform"]["numtel"];

		// Getting all error display objects
		var nom_error = document.getElementById("nom_error");
		var prenom_error = document.getElementById("prenom_error");
		var email_error = document.getElementById("email_error");
		var age_error = document.getElementById("age_error");
		var numtel_error = document.getElementById("numtel_error");

		// Setting all event listeners
		nom.addEventListener("blur",nomVerify,true);
		prenom.addEventListener("blur",prenomVerify,true);
		email.addEventListener("blur",emailVerify,true);
		age.addEventListener("blur",ageVerify,true);
		numtel.addEventListener("blur",numtelVerify,true);

		// Validation function
		function Validate(){
			// nom validation
			if(nom.value == ""){
				nom.style.border = "1px solid red";
				nom_error.textContent = "Il faut remplir votre nom!";
				nom_error.style.color = "red";
				nom.focus();
				return false;
			}

			// prenom validation
			if(prenom.value == ""){
				prenom.style.border = "1px solid red";
				prenom_error.textContent = "Prenom est obligatoire";
				prenom_error.style.color = "red";
				prenom.focus();
				return false;
			}

			//email validation
			if(email.value == ""){
				email.style.border = "1px solid red";
				email_error.textContent = "Il faut remplir adresse mail!";
				email_error.style.color = "red";
				email.focus();
				return false;
			}

			//age validation
			if(age.value == ""){
				age.style.border = "1px solid red";
				age_error.textContent = "Age est demandé!";
				age_error.style.color = "red";
				age.focus();
				return false;
			}

			//numéro téléphone validation
			if(numtel.value == ""){
				numtel.style.border = "1px solid red";
				numtel_error.textContent = "Numéro téléphone est demandé!";
				numtel_error.style.color = "red";
				numtel.focus();
				return false;
			}

			
		}

		// Event handler functions
		function nomVerify(){
			if(nom.value !=""){
				nom.style.border = "1px solid #5E6E66";
				nom_error.innerHTML = "";
				return true;
			}
		}

		function prenomVerify(){
			if(prenom.value !=""){
				prenom.style.border = "1px solid #5E6E66";
				prenom_error.innerHTML = "";
				return true;
			}
		}

		function emailVerify(){
			if(email.value !=""){
				email.style.border = "1px solid #5E6E66";
				email_error.innerHTML = "";
				return true;
			}
		}

		function ageVerify(){
			if(age.value !=""){
				age.style.border = "1px solid #5E6E66";
				age_error.innerHTML = "";
				return true;
			}
		}

		function numtelVerify(){
			if(numtel.value !=""){
				numtel.style.border = "1px solid #5E6E66";
				numtel_error.innerHTML = "";
				return true;
			}
		}


		// page enquete radio
		function is_checked(){
		var Yes_checked = document.getElementById('auto_renew_yes').checked;
		var No_checked = document.getElementById('auto_renew_no').checked;
		

		if(Yes_checked==false && No_checked==false){
			alert('please select an option');
			return false;
		}else{
			return true;
		}
	}

	// page enquete 2 button radio

	function onSubmit(){
	var point  = 0;
	var nbquestions = 5;
	var ansArr = ['a','c','c','e','d'];
	var q1 = document.forms['quiz']['q1'].value;
	var q2 = document.forms['quiz']['q2'].value;
	var q3 = document.forms['quiz']['q3'].value;
	var q4 = document.forms['quiz']['q4'].value;
	var q5 = document.forms['quiz']['q5'].value;

	for(var i=1;i<=nbquestions;i++){
		if(eval('q' + i)==''){
			alert("Vous n'avez pas encore choisi la question" + " " + i);
		}

		for(var i = 1; i<=nbquestions;i++){
			if(eval('q' + i) == ansArr[i-1]){
				point++;
			}
		}

		var results = document.getElementById('results');
		results.innerHTML="<h2>Vos points " +" " + point + " "+ "points des" + " " + nbquestions + " "+ "questions" + "</h2>"; 
		alert('You scored ' + point + ' out of ' + nbquestions); 
		return false;
	}
}

// page achat

function updateTotal(){
			// var basePrice = 500;
			var optionsPrice = 0;
			var shippingPrice = 0;

				function checkShirt(){
					if(document.getElementById('ip8').checked){
						document.getElementById('apple').src = 'iphone/ip8plus.jpg';
						optionsPrice += 600;
					}

					if(document.getElementById('ip8plus').checked){
						document.getElementById('apple').src = 'iphone/ipx.jpg';
						optionsPrice += 750;
					}

					if(document.getElementById('ipx').checked){
						document.getElementById('apple').src = 'iphone/ipxr.jpg';
						optionsPrice += 900;
					}

					if(document.getElementById('ipxr').checked){
						document.getElementById('apple').src = 'iphone/ip8plus.jpg';
						optionsPrice += 1100;
					}
				} // end of checking for shirt

				function checkPants(){
					if(document.getElementById('ss8').checked){
						document.getElementById('samsung').src = 'iphone/s8.JPEG';
						optionsPrice += 650;
					}

					if(document.getElementById('ss8plus').checked){
						document.getElementById('samsung').src = 'iphone/s10.jpg';
						optionsPrice += 710;
					}

					if(document.getElementById('ss9').checked){
						document.getElementById('samsung').src = 'iphone/s9.jpg';
						optionsPrice += 790;
					}

					if(document.getElementById('ss9plus').checked){
						document.getElementById('samsung').src = 'iphone/s8.jpg';
						optionsPrice += 950;
					}
				} // end of checking for pants

				function checkShipping(){
					if(document.getElementById('shipping').value=='standard'){
						shippingPrice +=10;
					}

					if(document.getElementById('shipping').value=='Trois jours'){
						shippingPrice +=30;
					}
					
					if(document.getElementById('shipping').value=='24 heures'){
						shippingPrice +=60;
					}
				} //end of check shipping function


			checkShirt();
			checkPants();
			checkShipping(); 
			var totalPrice = optionsPrice + shippingPrice;
			document.getElementById('optionsPrice').innerHTML = "$ " + optionsPrice;
			document.getElementById('shippingPrice').innerHTML = "$ " + shippingPrice;
			document.getElementById('totalPrice').innerHTML = "$ " + totalPrice;


		}//end of my main update Total function


		// calendrier

	dycalendar.draw({
        target:"#calendar",
        type:"month",
        highlighttoday:true
    });
