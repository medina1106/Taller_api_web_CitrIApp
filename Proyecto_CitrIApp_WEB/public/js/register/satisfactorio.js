if (session('iniciar') == 'false')

    Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'No se ha podido iniciar sesion',
        text: 'Compruebe que el correo o la contraseña esten bien escritos',
        footer: '<a href="">¿Olvide mi contraseña?</a>',
        showConfirmButton: false,
        timer: 15000,
        timerProgressBar: true
    })
