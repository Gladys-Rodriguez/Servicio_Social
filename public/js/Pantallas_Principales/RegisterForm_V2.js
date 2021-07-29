//<!-- Created By CodingNepal -->
const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;
const form = document.getElementById('formulario');

const formulario_mensaje = document.getElementById('formulario__mensaje')


 // **************** PRIMER BOTON NEXT *************************
nextBtnFirst.addEventListener("click", function(event){
    event.preventDefault();

    if(campos.nombre && campos.ap_paterno && campos.ap_materno && campos.telefono && campos.celular){

    slidePage.style.marginLeft = "-25%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
    document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
  } else{
  document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
  }

  });

  // ********************* SEGUNDO BOTON NEXT **************************
  nextBtnSec.addEventListener("click", function(event){
    event.preventDefault();

  if (campos.ciudad && campos.alcaldia && campos.colonia && campos.calle && campos.num_ext /*&& campos.num_int*/ && campos.cp){


    slidePage.style.marginLeft = "-50%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;

    document.getElementById('formulario__mensaje2').classList.remove('formulario__mensaje-activo');
  } else{
  document.getElementById('formulario__mensaje2').classList.add('formulario__mensaje-activo');
  }

  });

  //******************** TERCER BOTON NEXT ************************** */

  nextBtnThird.addEventListener("click", function(event){
    if(campos.grupo)  {


    event.preventDefault();
    slidePage.style.marginLeft = "-75%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
    document.getElementById('formulario__mensaje3').classList.remove('formulario__mensaje-activo');
  } else{
  document.getElementById('formulario__mensaje3').classList.add('formulario__mensaje-activo');
  }
  });


  submitBtn.addEventListener("click", function(event){
      event.preventDefault();




    if(campos.nombre && campos.ap_paterno && campos.ap_materno && campos.telefono && campos.celular &&
      campos.ciudad && campos.alcaldia && campos.colonia && campos.calle && campos.num_ext /*&& campos.num_int*/ && campos.cp &&
      campos.grupo &&
      campos.id && campos.password && campos.email ){



          bullet[current - 1].classList.add("active");
          progressCheck[current - 1].classList.add("active");
          progressText[current - 1].classList.add("active");
          current += 1;

          form.submit();



          document.getElementById('formulario__mensaje4').classList.remove('formulario__mensaje-activo');

          } else{

          document.getElementById('formulario__mensaje4').classList.add('formulario__mensaje-activo');



          }
  });




  prevBtnSec.addEventListener("click", function(event){
    event.preventDefault();
    slidePage.style.marginLeft = "0%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    current -= 1;
  });
  prevBtnThird.addEventListener("click", function(event){
    event.preventDefault();
    slidePage.style.marginLeft = "-25%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    current -= 1;
  });
  prevBtnFourth.addEventListener("click", function(event){
    event.preventDefault();
    slidePage.style.marginLeft = "-50%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    current -= 1;
  });

/********************************** VALIDACION *****************************************/

const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo


    carrera: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    //campos de datos
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    ap_paterno:  /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    ap_materno:  /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    telefono: /^\d{10}$/, // 10 numeros.
    celular:  /^\d{10}}$/, // 10 numeros.

    //campos de direccion
    ciudad: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    alcaldia: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    colonia: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    calle: /^[a-zA-ZÀ-ÿ\s0-9]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    num_ext: /^[A-Z0-9a-z]{1,4}$/, // 7 a 3 numeros.
    /*num_int: /^\d{1,3}$/, // 7 a 3 numeros.*/
    cp: /^\d{5}$/, //5 numeros

    //campos de alumno
    grupo: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo

    //campos de usuario
    id: /^\d{10}$/, // 7 a 14 numeros.
    password: /^.{4,12}$/, // 4 a 12 digitos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/

}

const campos = {
	usuario: false,


    //campos de datos
    telefono: false,
    nombre: false,
    ap_paterno: false,
    ap_materno: false,
    celular: false,

    //campos de direcciones
    ciudad: false,
    alcaldia: false,
    colonia: false,
    calle: false,
    num_ext: false,
    /*num_int: false,*/
    cp: false,

    //campos de alumno
    grupo: false,

    //campos de usuario
    id: false,
    email: false,
    password: false

}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "usuario":
			validarCampo(expresiones.usuario, e.target, 'usuario');
		break;



        //case para datos
        case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
        case "ap_paterno":
            validarCampo(expresiones.ap_paterno, e.target, 'ap_paterno');
            break;
        case "ap_materno":
            validarCampo(expresiones.ap_materno, e.target, 'ap_materno');
            break;
        case "telefono":
            validarCampo(expresiones.telefono, e.target, 'telefono');
            break;
        case "celular":
            validarCampo(expresiones.telefono, e.target, 'celular');
            break;

        // case para direcciones
        case "ciudad":
			validarCampo(expresiones.ciudad, e.target, 'ciudad');
		break;
        case "alcaldia":
			validarCampo(expresiones.alcaldia, e.target, 'alcaldia');
		break;
        case "colonia":
			validarCampo(expresiones.colonia, e.target, 'colonia');
		break;
        case "calle":
			validarCampo(expresiones.calle, e.target, 'calle');
		break;
        case "num_ext":
			validarCampo(expresiones.num_ext, e.target, 'num_ext');
		break;
        /*case "num_int":
			validarCampo(expresiones.num_int, e.target, 'num_int');
		break;*/
        case "cp":
			validarCampo(expresiones.cp, e.target, 'cp');
		break;

        // case para alumnos
        case "grupo":
			validarCampo(expresiones.grupo, e.target, 'grupo');
		break;

        //case para usuarios
        case "id":
			validarCampo(expresiones.id, e.target, 'id');
		break;
        case "email":
			validarCampo(expresiones.email, e.target, 'email');
		break;
        case "password":
			validarCampo(expresiones.password, e.target, 'password');
			validarPassword2();
		break;
		case "password2":
			validarPassword2();
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
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
	const inputPassword1 = document.getElementById('password');
	const inputPassword2 = document.getElementById('password2');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['password'] = false;
	} else {
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['password'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});




// ****************************************************************************

