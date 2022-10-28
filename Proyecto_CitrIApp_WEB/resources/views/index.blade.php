<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenidos a CitrIApp</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/Logo.png') }}" />
</head>


<body>
    <article class="contenedor">

        <section class="contenedorTitu sm-12">
            <label class="letratex2 s-4">CITR<label class="letratex3">IA</label>PP</label>
        </section>


        <article class="CLogo sm-4">
            <img class="imglogo sm-12" src="{{ asset('img/Logo.png') }}">

        </article>
    </article>



    <article class="contenedor2 sm-12">

        <nav class="menu sm-12">


            <a type="button" href="{{ route('login') }}" class="Cb sm-5 ">
                <section class="button">
                    <img class="Imghome" src="{{ asset('img/Home.png') }}">
                </section>
                <h1 class="txt sm-12">Iniciar</h1>

            </a>

            <a class="Cb sm-5 " type="button" href="{{route('agricultor.Ayuda')}}">
                <section class="button">
                    <img src="{{ asset('img/regalo.png') }}" class="ImgSer">

                </section>
                <h1 class="txt">Servicios a Ofrecer</h1>
            </a>
            <a class="Cb sm-5" type="button" href="{{route('agricultor.nosotros')}}">
                <section class="button">
                    <img class="ImgNosotros" src="{{ asset('img/Usuarios.png') }}">

                </section>
                <h1 class="txt">Nosotros</h1>
            </a>



        </nav>


    </article>

    {{-- TRAER LOS DATOS DEL USUARIO QUE INGRESA SESION --}}
 {{--    <h1>
    {{ Auth::user()->nombre }}
</h1>

<h1 style="font-size: 30px">
    {{ Auth::user()->email }} <span class="caret"></span>
    <hr>
    <br>

</h1>

<b style="font-size: 30px">
    {{ Auth::user()->id }}
</b> --}}

</body>

</html>
