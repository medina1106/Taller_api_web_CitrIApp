function mostrarPassword() {
    var cambio = document.getElementById("password");
    var btn1 = document.getElementById("show_password_i");
    
    if (btn1) {
        if (cambio.type == "password") {
            cambio.type = "text";

            /* $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye'); */
            var imagen = document.getElementById('show_password_i');
            imagen.src = '../../img/eye_open.png';
        } else {
            cambio.type = "password";
            /* $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash'); */
            var imagen = document.getElementById('show_password_i');
            imagen.src = '../../img/eye_close.png';
        }
    }
}



/* function mostrarPassword2(){
    var cambiodos = document.getElementById("password2");
    var btn2 = document.getElementById("show_password2");
    
    if (btn2) {
        if (cambiodos.type == "password") {
            cambiodos.type = "text";
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        } else {
            cambiodos.type = "password";
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash').addClass('img/ejemplo.png');
        }
    }
}
 */










