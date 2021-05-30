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

const formulario_mensaje = document.getElementById('formulario__mensaje');

// **************** PRIMER BOTON NEXT *************************
nextBtnFirst.addEventListener("click", function(event){
  event.preventDefault();
  if(campos.ciudad && campos.alcaldia && campos.colonia && campos.calle && campos.num_ext /*&& campos.num_int*/ && campos.cp){

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

    if (campos.nombre_depen){


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
  event.preventDefault();

  if(campos.nom_responsable && campos.ap_responsable && campos.am_responsable && campos.telefono && campos.email_responsable)  {


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

    if(campos.ciudad && campos.alcaldia && campos.colonia && campos.calle && campos.num_ext /*&& campos.num_int*/ && campos.cp &&
        campos.nombre_depen &&
        campos.nom_responsable && campos.ap_responsable && campos.am_responsable && campos.telefono && campos.email_responsable &&
        campos.No_registro ){
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            current += 1;

            form.submit();
            /*setTimeout(function(){

                location.reload();
            },800);*/

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


    //campos de direccion
    ciudad: /^[a-zA-ZÀ-ÿ\s]{1,30}$/, // Letras y espacios, pueden llevar acentos.
    alcaldia: /^[a-zA-ZÀ-ÿ\s]{1,30}$/, // Letras y espacios, pueden llevar acentos.
    colonia: /^[a-zA-ZÀ-ÿ\s]{1,30}$/, // Letras y espacios, pueden llevar acentos.
    calle: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    num_ext: /^[a-zA-Z0-9]{1,10}$/, // 1 a 4 caracteres.
    /*num_int: /^[a-zA-Z0-9]|[^a-zA-Z0-9]{0,10}$/, // 0 a 4 caracteres.*/
    cp: /^\d{5}$/, //5 numeros

    //campos de dependencias
    nombre_depen: /^[a-zA-ZÀ-ÿ\s]{1,255}$/, // Letras y espacios, pueden llevar acentos.
    nom_responsable:  /^[a-zA-ZÀ-ÿ\s]{1,30}$/, // Letras y espacios, pueden llevar acentos.
    ap_responsable:  /^[a-zA-ZÀ-ÿ\s]{1,30}$/, // Letras y espacios, pueden llevar acentos.
    am_responsable:  /^[a-zA-ZÀ-ÿ\s]{1,30}$/, // Letras y espacios, pueden llevar acentos.
    telefono: /^\d{10}$/, // 10 numeros.
    email_responsable: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,

    //campos de usuario
    No_registro: /^\d{1,20}$/, // 7 a 14 numeros.


}

const campos = {
	//campos de direcciones
    ciudad: false,
    alcaldia: false,
    colonia: false,
    calle: false,
    num_ext: false,
    /*num_int: false,*/
    cp: false,

    //campos de dependencias
    nombre_depen: false,
    nom_responsable: false,
    ap_responsable: false,
    am_responsable: false,
    telefono: false,
    email_responsable: false,

    //campos de servicios
    No_registro: false,


}

const validarFormulario = (e) => {

	switch (e.target.name) {
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

        // case para dependencias
        case "nombre_depen":
			validarCampo(expresiones.nombre_depen, e.target, 'nombre_depen');
		break;
        case "nom_responsable":
			validarCampo(expresiones.nom_responsable, e.target, 'nom_responsable');
		break;
        case "ap_responsable":
			validarCampo(expresiones.ap_responsable, e.target, 'ap_responsable');
		break;
        case "am_responsable":
			validarCampo(expresiones.am_responsable, e.target, 'am_responsable');
		break;
        case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
        case "email_responsable":
			validarCampo(expresiones.email_responsable, e.target, 'email_responsable');
		break;

        //case para servicios
        case "No_registro":
			validarCampo(expresiones.No_registro, e.target, 'No_registro');
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



/*const validarPassword2 = () => {
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
}*/

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();





});


// ****************************************************************************
