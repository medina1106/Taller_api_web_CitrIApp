<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('Css/historial.css')}}">
    <link rel="shortcut icon" href="{{asset('Img/Logo.png')}}" />
    <title>Historial</title>
</head>

<body>

    {{-- Componente que llama al HEADER --}}
    <x-header></x-header>

    <article class="Contenedor">

        <section class="Form_componente">
            <section class="C_fp">
                <article class="Fp">
                    <img class="Imgcomponente" src="{{asset('Img/Historial.png')}}" alt="" srcset="">
                </article>
            </section>

            <section class="C_titulo">
                <h1 class="TxtTitulo">Historial de Predicciones</h1>
            </section>

            <hr class="lineaCt">

            <aside class="contenedor2H">
                <section class="padre_titulos">
                    <ol class="Historial_thijos">
                        <Li class="txt_tituloH">Tipo Cultivo</Li>
                        <li class="txt_tituloH">Lugar de Cultivo</li>
                        <li class="txt_tituloH">Fecha de Siembra</li>
                        <li class="txt_tituloH">Probabilidad de Producción</li>
                    </ol>
                </section>
                <section class="Contendedor_3H">
                    <aside class="Padre_texto">
                        
                    </aside>
                </section>
            </aside>

        </section>
    </article>

    {{-- Componente que llama al FOOTER --}}
    <x-footer>

    </x-footer>

</body>

</html>
