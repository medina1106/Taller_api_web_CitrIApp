<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Citriapp</title>

    <link rel="stylesheet" href="{{ asset('css/styleMenuF.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/Logo.png') }}" />
</head>

<body>

    <article class="contenedor">

        <article class="CLogo">


            <img class="imglogo sm-12" src="{{ asset('img/Logo.png') }}">




        </article>

        
            <form action="{{ route('logout') }}" method="POST" class="c_formlogout">
                {{ csrf_field() }}
                <section class="C_datosperfil">
                    <p class="txtnombre">{{ Auth::user()->name }}</p>
                </section>

                <section class="c_btnlogout">
                    <button name="salir" class="btnLogout" type="submit">Cerrar Sesion</button>
                </section>
            </form>




    </article>



    <article class="contenedor2">

        <nav class="menu">

            <a class="Cb" type="button" href="{{ route('agricultor.Prediccion') }}">
                <section class="button">
                    <img class="ImgNosotros" src="{{ asset('img/prediccion.png') }}" alt="" srcset="">

                </section>
                <h1 class="txt">Prediccion</h1>
            </a>


            <a type="button" href="{{ route('agricultor.RegistroC') }}" class="Cb">
                <section class="button">
                    <img class="Imghome" src="{{ asset('img/Registrar.png') }}" alt="">
                </section>
                <h1 class="txt">Registrar Cultivos</h1>
            </a>



            <a class="Cb" type="button" href="{{ route('agricultor.Historial') }}">
                <section class="button">
                    <img class="ImgNosotros" src="{{ asset('img/Historial.png') }}" alt="" srcset="">

                </section>
                <h1 class="txt">Historial de Predicciones</h1>
            </a>



        </nav>

        <nav class="menu2">


            <a class="Cb" type="button" href="{{ route('agricultor.Cultivos') }}">
                <section class="button">
                    <img src="{{ asset('img/Cultivos En produccion.png') }}" class="ImgSer" alt="">

<<<<<<< HEAD
            <a type="button" href="{{route('agricultor.Perfil')}}" class="Cb">
                        <section class="button">
                            <img class="Imghome" src="{{asset('img/perfi.png')}}" alt="">
                        </section>
                        <h1 class="txt">Perfil</h1>
                    </a>
            
                    <a class="Cb" type="button" href="#">
                        <section class="button">
                            <img src="Img/ayuda.png" class="ImgSer" alt="">
                            
                        </section>
                        <h1 class="txt">Ayuda</h1>
                    </a>
            
                    <a class="Cb" type="button" href="{{route('agricultor.Prediccion')}}">
                        <section class="button">
                            <img class="ImgNosotros" src="{{asset('img/prediccion.png')}}" alt="" srcset="">
                            
                        </section>
                        <h1 class="txt">Prediccion</h1>
                    </a>

                    </nav>
=======
                </section>
                <h1 class="txt">Cultivos en Produccion</h1>
            </a>
>>>>>>> España

            <a type="button" href="{{ route('agricultor.Perfil') }}" class="Cb">
                <section class="button">
                    <img class="Imghome" src="{{ asset('img/perfi.png') }}" alt="">
                </section>
                <h1 class="txt">Perfil</h1>
            </a>

            <a class="Cb" type="button" href="{{ route('agricultor.Ayuda') }}">
                <section class="button">
                    <img src="Img/ayuda.png" class="ImgSer" alt="">

                </section>
                <h1 class="txt">Ayuda</h1>
            </a>

        </nav>
    </article>

    {{-- Componente que llama al FOOTER --}}
    <x-footer></x-footer>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('iniciar') == 'true')
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '¡Bienvenid@ de nuevo!',
                html: '<label for="">{{ Auth::user()->name }}</label>',
                showConfirmButton: false,
                timer: 15000,
                timerProgressBar: true
            })
        </script>
    @endif

    @if (session('registro') == 'true')
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Registro exitoso',
                text: "¡Bienvenid@ a CitrIApp",
                html: '<label for="">{{ Auth::user()->name }}</label>',
                showConfirmButton: false,
                timer: 15000,
                timerProgressBar: true
            })
        </script>
    @endif

</body>

</html>
