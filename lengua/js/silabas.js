//cajar para arrastrar
document.getElementById("ca1").addEventListener('dragstart', dragStart);
document.getElementById("ca2").addEventListener('dragstart', dragStart);
document.getElementById("ca3").addEventListener('dragstart', dragStart);

//contenedores
document.getElementById("c1").addEventListener('drop', drop);
document.getElementById("c1").addEventListener('dragover', dragOver);

document.getElementById("c2").addEventListener('drop', drop);
document.getElementById("c2").addEventListener('dragover', dragOver);

document.getElementById("c3").addEventListener('drop', drop);
document.getElementById("c3").addEventListener('dragover', dragOver);



//permite arrastrar
function dragStart(e) {
    e.dataTransfer.setData('id', e.target.id); //envio datos al agarrar la imagen
    console.log("dragstart");
    /* e.currentTarget.style.backgroundColor = 'yellow'; */  //CAMBIAR ESTILO
}

//permite el drop
function dragOver(e) {
    e.preventDefault();

}

//depositar pobjeto
function drop(e) {
    
    const id = e.dataTransfer.getData('id');

    if (e.target.id == "c1" && id == "ca1") {
        e.target.appendChild(ca1);

        sweetAlert();

    } else if (e.target.id == "c2" && id == "ca2") {
        e.target.appendChild(ca2);

        sweetAlert();

    } else if (e.target.id == "c3" && id == "ca3") {
        e.target.appendChild(ca3);

        sweetAlert();

    } else {
        sweetAlertError();
    }
}

function sweetAlert() {
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: '¡Has acertado, sigue así!',
        showConfirmButton: false,
        timer: 1500
    })
}
function sweetAlertError() {
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: '¡Casi aciertas, ánimo!',
        showConfirmButton: false,
        timer: 1500
    })
}