function validar() {

    let nombre, correo, web, comentario;

    nombre = document.getElementById('nombre').value;
    correo = document.getElementById('correo').value;
    web = document.getElementById('web').value;
    comentario = document.getElementById('comentario').value;

    if (nombre == "" || correo == "" || web == "" || comentario == "") {

        alert("Te faltan algunos campos por completar");
        return false;
    }

}