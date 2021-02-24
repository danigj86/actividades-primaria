//cajas para arrastrar
document.getElementById("caja1").addEventListener('dragstart', dragStart);
document.getElementById("caja2").addEventListener('dragstart', dragStart);
document.getElementById("caja3").addEventListener('dragstart', dragStart);
document.getElementById("caja4").addEventListener('dragstart', dragStart);
document.getElementById("caja5").addEventListener('dragstart', dragStart);
document.getElementById("caja6").addEventListener('dragstart', dragStart);
document.getElementById("caja7").addEventListener('dragstart', dragStart);
document.getElementById("caja8").addEventListener('dragstart', dragStart);
document.getElementById("caja9").addEventListener('dragstart', dragStart);

//contenedores
document.getElementById("contenedor1").addEventListener('drop', drop);
document.getElementById("contenedor1").addEventListener('dragover', dragOver);

document.getElementById("contenedor2").addEventListener('drop', drop);
document.getElementById("contenedor2").addEventListener('dragover', dragOver);

document.getElementById("contenedor3").addEventListener('drop', drop);
document.getElementById("contenedor3").addEventListener('dragover', dragOver);

document.getElementById("contenedor4").addEventListener('drop', drop);
document.getElementById("contenedor4").addEventListener('dragover', dragOver);

document.getElementById("contenedor5").addEventListener('drop', drop);
document.getElementById("contenedor5").addEventListener('dragover', dragOver);

document.getElementById("contenedor6").addEventListener('drop', drop);
document.getElementById("contenedor6").addEventListener('dragover', dragOver);

document.getElementById("contenedor7").addEventListener('drop', drop);
document.getElementById("contenedor7").addEventListener('dragover', dragOver);

document.getElementById("contenedor8").addEventListener('drop', drop);
document.getElementById("contenedor8").addEventListener('dragover', dragOver);

document.getElementById("contenedor9").addEventListener('drop', drop);
document.getElementById("contenedor9").addEventListener('dragover', dragOver);


var puntos = 0;

//permite arrastrar
function dragStart(e) {
    e.dataTransfer.setData('id', e.target.id); //envio datos al agarrar la imagen
    console.log("dragstart");
}

//permite el drop
function dragOver(e) {
    e.preventDefault();

}
//depositar pobjeto
function drop(e) {
    const id = e.dataTransfer.getData('id');

    if (e.target.id == "contenedor1" && id == "caja1") {
        e.target.appendChild(caja1);
        puntos++;
        sweetalert();
        if(puntos == 9){
    sweetalertFinish();
    }
    } else if (e.target.id == "contenedor2" && id == "caja2") {
        e.target.appendChild(caja2);
        puntos++;
        sweetalert();
        if(puntos == 9){
    sweetalertFinish();
    }
    } else if (e.target.id == "contenedor3" && id == "caja3") {
        e.target.appendChild(caja3);
        puntos++;
        sweetalert();
        if(puntos == 9){
    sweetalertFinish();
    }
    } else if (e.target.id == "contenedor4" && id == "caja4") {
        e.target.appendChild(caja4);
        puntos++;
        sweetalert();if(puntos == 9){
    sweetalertFinish();
    }
    } else if (e.target.id == "contenedor5" && id == "caja5") {
        e.target.appendChild(caja5);
        puntos++;
        sweetalert();
        if(puntos == 9){
    sweetalertFinish();
    }
    } else if (e.target.id == "contenedor6" && id == "caja6") {
        e.target.appendChild(caja6);
        puntos++;
        sweetalert();
        if(puntos == 9){
    sweetalertFinish();
    }
    } else if (e.target.id == "contenedor7" && id == "caja7") {
        e.target.appendChild(caja7);
        puntos++;
        sweetalert();
        if(puntos == 9){
    sweetalertFinish();
    }
    } else if (e.target.id == "contenedor8" && id == "caja8") {
        e.target.appendChild(caja8);
        puntos++;
        sweetalert();
        if(puntos == 9){
    sweetalertFinish();
    }
    } else if (e.target.id == "contenedor9" && id == "caja9") {
        e.target.appendChild(caja9);
        puntos++;
        sweetalert();
        if(puntos == 9){
    sweetalertFinish();
    }
    } 
    else {
        sweetalerterror();
    }
}

function sweetalert() {
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: '¡Has acertado, sigue así!',
        showConfirmButton: false,
        timer: 1500
    })
}
function sweetalerterror() {
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: '¡Casi aciertas, ánimo!',
        showConfirmButton: false,
        timer: 1500
    })
}  

function sweetalertFinish() {
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: '¡Lo has consegudio, enhorabuena!',
        showConfirmButton: false,
        timer: 1500
    })
}
// CALLBACK
//SE CREA FUNCION
const getUser = (id, cd) =>{
    const user = {
        name :"Dani",
        id: id
    }
    if (id == 2) {
        cd('usuario no existe')
    }else{ 
            cd(null, user)}
    }
//SE LLAMA FUNCION
    getUser(1, (err, user)=>{
        if(err) return console.log(err)
        console.log(`El nombre del user es  ${user.name}`)

    })




