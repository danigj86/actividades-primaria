 //Array y variables
 const sumandos1 = []
 const sumandos2 = []
 const resultado = []
 var aciertos = 0;
 var cont = 0;
 var cont2 = 0;
 //Elementos del DOM
 const tabla = document.querySelector('table');
 const empezar = document.querySelector('#empezar');
 const corregir = document.querySelector('#corregir');

 //Genera los sumandos
 const empezarCalc = (e) => {
     cont++;
     for (let index = 0; index < 10; index++) {

         let r1 = Math.floor(Math.random() * 10)
         let r2 = Math.floor(Math.random() * 10)

         sumandos1[index] = r1;
         sumandos2[index] = r2;
         resultado[index] = r1 + r2;

         tabla.innerHTML += `<tr>
         <td>${sumandos1[index]} +</td>
         <td>${sumandos2[index]} =</td>
         <td><input class="resultados" type="number"></td>
         </tr>`
     }
     if (cont == 1) {
         empezar.disabled = true;
     }
 }
 //Corrige las operaciones
 const corregirCalc = () => {
     cont2++;
     let resultados = [...document.getElementsByClassName('resultados')]
     console.log('resultados[index]value')
     for (let index = 0; index < resultados.length; index++) {

         if (resultados[index].value == resultado[index]) {
             resultados[index].classList.add('ok');
             aciertos++;
         } else {
             resultados[index].classList.add('fail');
         }
     }
     if (aciertos >= 5) {
         sweetalert()
     } else {
         sweetalertErr()
     }
     corregir.disabled = true;
 }

 //SweetAlert mensajes
 function sweetalert() {
     Swal.fire({
         position: 'center',
         icon: 'success',
         title: `Has acertado ${aciertos}/10`,
         showConfirmButton: false,
         timer: 1500
     })
 }
 function sweetalertErr() {
     Swal.fire({
         position: 'center',
         icon: 'error',
         title: `Has acertado menos de 5. ¡Prueba de nuevo!`,
         showConfirmButton: false,
         timer: 1500
     })
 }
 //Llamamos funciones
 empezar.addEventListener('click', empezarCalc)
 corregir.addEventListener('click', corregirCalc)
 reiniciar.addEventListener('click', () => {
     location.reload()
 })