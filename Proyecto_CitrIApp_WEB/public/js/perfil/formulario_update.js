const formulario = document.getElementById('validacionregistro');
const inputs = document.querySelectorAll('#validacionregistro input');

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{5,40}$/, // Letras y espacios, pueden llevar acentos.
	emailr: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	celular: /^[3]+\d{9}$/, // 7 a 14 numeros.
	password2: /^.{10,100}$/, // 5 a 100 digitos.
	password3: /^.{10,100}$/ // 5 a 100 digitos.
}

const campos = {
	nombre: false,
	emailr: false,
	celular: false,
	password2: false,
	password3: false
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
			break;
		case "emailr":
			validarCampo(expresiones.emailr, e.target, 'emailr');
			break;
		case "celular":
			validarCampo(expresiones.celular, e.target, 'celular');
			break;
		case "password2":
			validarCampo(expresiones.password2, e.target, 'password2');
			validarPassword2();
			break;
		case "password3":
			validarCampo(expresiones.password3, e.target, 'password3');
			validarPassword2();
			break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if (expresion.test(input.value)) {
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
	    document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

const validarPassword2 = () => {
	const inputPassword2 = document.getElementById('password2');
	const inputPassword3 = document.getElementById('password3');

	if (inputPassword2.value !== inputPassword3.value) {
		document.getElementById(`grupo__password3`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password3`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__password3 i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__password3 i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__password3 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['password2'] = false;
	} else {
		document.getElementById(`grupo__password3`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password3`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__password3 i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__password3 i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__password3 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['password2'] = true;
	}
}


inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();
	if (campos.nombre && campos.emailr && campos.celular && campos.password2 && campos.password3) {

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 4000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
			formulario.submit();
			/* formulario.reset(); */
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});