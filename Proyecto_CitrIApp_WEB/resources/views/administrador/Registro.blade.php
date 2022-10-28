<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin/register_users.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/register_formulario.css') }}">
    <title>Registro de Usuarios</title>
</head>

<body>

    <header>
        <nav class="menu">
            <section class="contenedorTitu">
                <p class="letratex2">CITR<t class="letratex3">IA</t>PP</p>
            </section>

            <article class="Cmenu2">
                <a type="button" href="" class="Cb">
                    <section class="button">
                        <img class="Imgmenu" src="Img/Usuario.png" alt="">
                    </section>
                    <h1 class="txt">Perfil</h1>
                </a>

                <a type="button" href="" class="Cb">

                    <section class="button">
                        <img class="Imgmenu" src="Img/Registrar.png" alt="">
                    </section>
                    <h1 class="txt">Regitro de usuarios</h1>

                </a>

                <a type="button" href="" class="Cb">
                    <section class="button" href="">
                        <img class="Imgmenu" src="Img/datospre.png" alt="">
                    </section>
                    <h1 class="txt">Datos de Predición</h1>
                </a>

                {{-- <a type="button" href="" class="Cb">
                    <section class="button">
                        <img class="Imgmenu" src="Img/vistas.png" alt="">
                    </section>
                    <h1 class="txt">Visitas Generadas</h1>
                </a> --}}

                <a type="button" href="" class="Cbhamburguesa">
                    <section class="button">
                        <img class="Imgmenuhamburguesa" src="Img/menu.png" alt="">
                    </section>
                </a>
            </article>
        </nav>
    </header>


    <article class="Contenedor">
        <article class="contenedorFR">

            <section class="C_fp">
                <article class="Fp">
                    <img class="Imgregistro" src="Img/Usuarios.png" alt="" srcset="">
                </article>
            </section>

            <section class="Form_Registro">

                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>Formulario De Registro</h3>
                        <p>¿Registrar administradores?</p>
                        <button id="btn__iniciar-sesion">Administrador</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>Formulario De Registro</h3>
                        <p>¿Registrar agricultores?</p>
                        <button id="btn__registrarse">Agricultores</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="{{route('save_admin')}}" method="POST" class="formulario__login">
                        {{ csrf_field() }}
                        <input type="text" name="nombre" placeholder="Nombre">
                        <input type="text" name="cedula" placeholder="Cedula">
                        <input type="text" name="emailr" placeholder="Correo Electronico">
                        <input type="text" name="celular" placeholder="Telefono">
                        <input type="password" name="password2" placeholder="Contraseña">
                        <input type="password" name="" placeholder="Confirmar Contraseña">
                        <button type="submit">Regístrar</button>
                    </form>

                    <!--Register-->
                    <form action="{{route('save_agr')}}" method="POST" class="formulario__register">
                        {{ csrf_field() }}
                        <input type="text" name="nombre" placeholder="Nombre">
                        <input type="text" name="cedula" placeholder="Cedula">
                        <input type="text" name="emailr" placeholder="Correo Electronico">
                        <input type="text" name="celular" placeholder="Telefono">
                        <input type="password" name="password2" placeholder="Contraseña">
                        <input type="password" name="" placeholder="Confirmar Contraseña">
                        <button type="submit">Regístrar</button>
                    </form>
                </div>
            </section>
        </article>
        <!-- <aside class="contenedorUR">
        <a type="button" href="#" class="CbR">
            <section class="buttonr">
                <img class="Imgmenu2r" src="Img/Usuarios.png" alt="">
                <section class="ctxt_br">
                    <h2 class="txt_br">Usuarios Registrados</h2>
                    <hr class="lineaadminr">
                    <section class="textoinfor">
                        <p class="txtinfor">Usuarios que ya se encuentran logeados en CitrIApp</p>
                    </section>
                </section>
            </section>
        </a>
    </aside> -->
    </article>


    <footer>
        <section class="containerF">
            <section class="Lista">
                <p class="lista1">Juan Carlos España</p>
                <p class="lista1">Pablo Antonio Ortiz</p>
                <p class="lista1">Jorge Andres Coral</p>
                <p class="lista1">Julian Eduardo Medina</p>
                <p class="lista1">Juiana Marcela Romo</p>
            </section>
        </section>
        <section class="containerF2">
            <section class="Lista2">
                <h2 class="LetraC">CITRIAPP</h2>
                <section class="imgL">
                    <article class="cimgFacebook"><img class="imgFacebook" src="Img/Facebook.png" alt="">
                    </article>
                    <article class="cimgWhatsapp"><img class="imgWhatsapp" src="Img/Whatsapp.png" alt="">
                    </article>
                    <article class="cimgInstagram"><img class="imgInstagram" src="Img/Instagram.png" alt="">
                    </article>
                </section>
            </section>
        </section>

        <section class="containerF3">
            <section class="Lista3">
                <section class="imgR">
                    <article class="cimgTelefono">
                        <img class="imgTelefono" src="Img/telefono.png" alt="">
                        <h2>3138456789</h2>
                    </article>

                    <article class="cimgGmail">
                        <img class="imgGmail" src="Img/gmail (1).png" alt="">
                        <h2>klkmanitos@gmail.com</h2>
                    </article>
                </section>
            </section>
        </section>
    </footer>

    <script src="{{ asset('js/admin/register_users.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- ALERTAS ADMINISTRADOR --}}
    @if (session('registroadmin') == 'true')
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: 'success',
            title: 'Cuenta de administrador creada correctamente'
        });
    </script>
@endif

@if (session('registroadmin') == 'false')
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'error',
        title: 'Cuenta de administrador no creada'
    });
</script>
@endif

{{-- ALERTAS AGRICULTOR --}}
@if (session('registroagr') == 'true')
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'success',
        title: 'Cuenta de agricultor creada correctamente'
    });
</script>
@endif

@if (session('registroagr') == 'false')
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'error',
        title: 'Cuenta de administrador no creada'
    });
</script>
@endif
</body>

</html>
