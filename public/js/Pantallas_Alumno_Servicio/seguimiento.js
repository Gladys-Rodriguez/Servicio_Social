var btn = document.getElementById("btn_Seguimiento");
var caja1 = document.getElementById("estado").value;



caja1.addEventListener('onClick', function(){


    if(this.value === '0'){

        btn.disabled = true;


          }else if (this.value === '1'){
           btn.disabled = false;


          }
          });




