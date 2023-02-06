function supremeYannick(callback, min = 6, max = 6) {

	
	function randomInt(min, max) {
		return Math.floor(Math.random() * (max - min + 1) + min);
	}

	function generateCaptchaArray(arr) {
		nb = randomInt(min, max);
		let cap = [];
		for (let i = 0; i < nb; i++) {
			x = Math.floor(Math.random() * arr.length);
			cap.push(arr[x]);
		}
		return cap;
	}

	function generateCaptcha() {
		capOut.innerHTML = "";
		capIn.value = "";
		let capcap = generateCaptchaArray(alphabet);
		for (let i = 0; i < capcap.length; i++) {
			//couleur random:
			let colorsRandom = randRGB();
			//affichage du texte (avec les attributs randomisé):
			capOut.insertAdjacentHTML(
				"beforeend",
				`<span style="color:rgb(${colorsRandom[0]},${colorsRandom[1]},${colorsRandom[2]});>${capcap[i]}</span>`
			);
		}
	}

	function validateCaptcha() {
		if (capOut.textContent == capIn.value) {
			callback()
		} else {
			generateCaptcha()
			error.classList.add("invalide");
		}
	}

	function resetCap(){
		generateCaptcha()
		error.classList.remove("invalide");
	}

	//choisir couleur randow
	function randRGB() {
		let arrayRGB = [];
		for (let i = 0; i < 3; i++) {
			arrayRGB.push(randomInt(20, 230));
		}
		return arrayRGB;
	}

	const alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","0","1","2","3","4","5","6","7","8","9"]

	let capOut = document.querySelector("#captchaOutput");
	let capIn = document.querySelector("#captchaInput");
	let capValid = document.querySelector("#captchaValidate");
	let refresh = document.querySelector("#refresh");
	let error = document.querySelector('#error');

	generateCaptcha();
	capValid.addEventListener("click", validateCaptcha);
	refresh.addEventListener("click", resetCap);
}



function redirect() {
	document.querySelector('form').requestSubmit(); 
}

supremeYannick(redirect, 8, 10);