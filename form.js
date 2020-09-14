const email = document.getElementById('email');

email.addEventListener('input', function (event) {
	if (email.validity.typeMismatch) {
		email.setCustomValidity('Email inválido.');
	} else {
		email.setCustomValidity('');
	}
});
