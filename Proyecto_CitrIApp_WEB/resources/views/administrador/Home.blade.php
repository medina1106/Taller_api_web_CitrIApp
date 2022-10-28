<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
    <title>Home</title>
</head>

<body>

    <header class="contenedor_h">

        <section class="c_imglogo">
            <img class="imglogo" src="{{ asset('img/Logo.png') }}" alt="" srcset="">
        </section>

        <form action="{{ route('logout') }}" method="POST" class="c_formlogout">
            {{ csrf_field() }}
            <section class="C_datosperfil">
                <p class="txtnombre">{{ Auth::user()->name }}</p>
            </section>

            <section class="c_btnlogout">
                <button name="salir" class="btnLogout" type="submit">Cerrar Sesion</button>
            </section>
        </form>
    </header>

    <article class="contenedor">

        <section class="menu">


            <article class="cbuttonp">

                <a href="" class="none">
                    <section class="buttonperfil">
                        <img class="Imgusuario" src="{{ asset('img/Usuario.png') }}" alt="">
                        <h1 class="txt_bp">
                            Perfil
                        </h1>
                    </section>
                </a>
            </article>

            <nav class="menu2">

                <a type="button" href="{{route('admin.register')}}" class="Cb">
                    <section class="button">
                        <img class="Imgmenu2" src="{{ asset('img/Usuarios.png') }}" alt="">

                        <section class="ctxt_b">
                            <h2 class="txt_b">Registro de Usuarios</h2>
                            <hr class="lineaadmin">
                            <section class="textoinfo">
                                <p class="txtinfo">Registra usuarios de tipo administrador o agricultor</p>
                            </section>
                        </section>
                    </section>
                </a>

                <a class="Cb" type="button" href="">
                    <section class="button">
                        <img src="{{ asset('img/datospre.png') }}" class="Imgmenu2" alt="">
                        <section class="ctxt_b">
                            <h2 class="txt_b">Datos de Prediccion</h2>
                            <hr class="lineaadmin">
                            <section class="textoinfo">

                                <p class="txtinfo"> Tabla de datos que contiene los campos para generar predicciones
                                </p>

                            </section>
                        </section>
                    </section>

                </a>

                <a class="Cb" type="button" href="">
                    <section class="button">
                        <img class="Imgmenu2" src="{{ asset('img/vistas.png') }}" alt="" srcset="">
                        <section class="ctxt_b">
                            <h2 class="txt_b">Visitas generadas</h2>
                            <hr class="lineaadmin">
                            <section class="textoinfo">
                                <p class="txtinfo">Grafico de estadisticas que muestra el numero de visitas que recibe
                                    el aplicativo web</p>
                            </section>
                        </section>
                    </section>
                </a>
            </nav>
        </section>
    </article>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('iniciar') == 'true')
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '¡Bienvenid@ de nuevo!',

                /* text: "¡Bienvenid@ de nuevo!", */
                html: '<label for="">{{ Auth::user()->name }}</label>',
                showConfirmButton: false,
                timer: 15000,
                timerProgressBar: true
            })
        </script>
    @endif

</body>

</html>
