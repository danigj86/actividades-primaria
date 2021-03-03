 //Array y variables
 console.log("hola")
 const sumandos1 = new Array (10)
 const sumandos2 = new Array (10)
 const resultado = new Array (10)
 var aciertos = 0;
 var cont = 0;
 var cont2 = 0;
 var cont3 = 0;
 //Elementos del DOM
 const tabla = document.querySelector('table');
 const empezar = document.querySelector('#empezar');
 const corregir = document.querySelector('#corregir');

 //Genera los sumandos
 const empezarCalc = (e) => {
     cont++;

     while (cont3 < 10) {
         
        var r1 = Math.floor(Math.random() * 10)
        var r2 = Math.floor(Math.random() * 10)
        console.log(r1)

        if (r1>r2 & r2 != 0) {
            sumandos1[cont3] = r1
            sumandos2[cont3] = r2
            resultado[cont3] = r1 - r2  
            tabla.innerHTML += `<tr>
            <td>${sumandos1[cont3]} - </td>
            <td>${sumandos2[cont3]} =</td>
            <td><input class="resultados" type="number"></td>
            </tr>`
                      
            cont3++; 
        }
                      
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
         timer: 2000
     })
 }
 function sweetalertErr() {
     Swal.fire({
         position: 'center',
         icon: 'error',
         title: `Has acertado menos de 5. ¡Prueba de nuevo!`,
         showConfirmButton: false,
         timer: 2000
     })
 }
 //Llamamos funciones
 empezar.addEventListener('click', empezarCalc)
 corregir.addEventListener('click', corregirCalc)
 reiniciar.addEventListener('click', () => {
     location.reload()
 })