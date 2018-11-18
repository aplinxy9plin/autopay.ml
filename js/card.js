// Вызываем функцию автозаполнения поля ввода номер карточки при фокусе //
var putNumber = document.querySelectorAll("#put-namber");

putNumber[0].onfocus = function() { innerNum(0); }
putNumber[1].onfocus = function() { innerNum(1); }
putNumber[2].onfocus = function() { innerNum(2); }
putNumber[3].onfocus = function() { innerNum(3); }

// Автозаполнение номера карточки //
function innerNum(q) {
	putNumber[q].oninput = function() {
		if(/\D+/g.test(this.value)) {
			this.value = this.value.replace(/\D+/g, '');
		} else {
			value = putNumber[q].value;
			arr = document.querySelectorAll('.sd-card-front p span');
			arr[q].innerHTML = value;
			inputJump(this);
		}
	}
}

// Автопереход при заполнение номера карты //
function inputJump(x){
    var ml = ~~x.getAttribute('maxlength');
    if(ml && x.value.length == ml){
        do{
            x = x.nextSibling;
        }
        while(x && !(/text/.test(x.type)));
        if(x && /text/.test(x.type)){
            x.focus();
        }
    }
}

// Автозаполнение владельца карты //
var putHolder = document.querySelector('.input-holder input');
putHolder.oninput = function() {
	if(/[^A-Za-z\s]/.test(this.value)) {
		this.value = this.value.replace(/[^A-Za-z\s]/, '');
	} else {
		value = this.value;
		document.querySelector('.sd-card-front h4').innerHTML = value;	
	}
} 

// Автозаполнение месяца //
var putMonth = document.querySelector('.input-date input:nth-child(1)');
putMonth.oninput = function() {
	if(/[^A-Za-z]/.test(this.value)) {
		this.value = this.value.replace(/[^A-Za-z]/, '');
	} else {
		value = this.value;
		date = document.querySelector('.date-main h3 span:nth-child(1)');
		month = document.querySelectorAll('#month option');
		switch (value) {
			case month[0].value:
				date.innerHTML = month[0].getAttribute('title');
				break;
			case month[1].value:
				date.innerHTML = month[1].getAttribute('title');
				break;
			case month[2].value:
				date.innerHTML = month[2].getAttribute('title');
				break;
			case month[3].value:
				date.innerHTML = month[3].getAttribute('title');
				break;
			case month[4].value:
				date.innerHTML = month[4].getAttribute('title');
				break;
			case month[5].value:
				date.innerHTML = month[5].getAttribute('title');
				break;
			case month[6].value:
				date.innerHTML = month[6].getAttribute('title');
				break;
			case month[7].value:
				date.innerHTML = month[7].getAttribute('title');
				break;
			case month[8].value:
				date.innerHTML = month[8].getAttribute('title');
				break;
			case month[9].value:
				date.innerHTML = month[9].getAttribute('title');
				break;
			case month[10].value:
				date.innerHTML = month[10].getAttribute('title');
				break;
			case month[11].value:
				date.innerHTML = month[11].getAttribute('title');
				break;
			default:
				date.innerHTML = '';	
		} 
	}
} 

// Автозаполнение года //
var putYear = document.querySelector('.input-date input:nth-child(2)');
putYear.oninput = function() {
	if(/[^0-9]/.test(this.value)) {
		this.value = this.value.replace(/[^0-9]/, '');
	} else {
		value = this.value;
		if(value < 0) {
			document.querySelector('.date-main h3 span:nth-child(2)').innerHTML = value;
		} else {
			document.querySelector('.date-main h3 span:nth-child(2)').innerHTML = value.slice(2);
		}		
	}
} 

// Автозаполнение секретного кода //
var putCcv = document.querySelector('.input-ccv input');
putCcv.oninput = function() {
	if(/[^0-9]/.test(this.value)) {
		this.value = this.value.replace(/[^0-9]/, '');
	} else {
		value = this.value;
		document.querySelector('.sd-card-back .ccv h5').innerHTML = value;	
	}
} 

// Поворот карточки при фокусе //
document.querySelector('.input-ccv input').onfocus = function() {
	document.querySelector('.sd-card').classList.toggle('rotate');
}
document.querySelector('.input-ccv input').onblur = function() {
	document.querySelector('.sd-card').classList.toggle('rotate');
}

// При нажатие удаляем данные в  полях ввода и на карточке//
document.querySelector('.submit').onclick = function() {
	var arr = document.querySelectorAll('.sd-card-front p span');
	arr[0].innerHTML = '* * * *';
	arr[1].innerHTML = '* * * *';
	arr[2].innerHTML = '* * * *';
	arr[3].innerHTML = '* * * *';
	document.querySelector('.sd-card-front h4').innerHTML = 'Card holder';
	document.querySelector('.date-main h3 span:nth-child(1)').innerHTML = '';
	document.querySelector('.date-main h3 span:nth-child(2)').innerHTML = '';
	document.querySelector('.sd-card-back .ccv h5').innerHTML = '';
}