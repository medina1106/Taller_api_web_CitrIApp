<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Css/Componentes.css">
    <link rel="shortcut icon" href="Img/Logo.png" />
    <title>Cultivos en Seguimiento</title>
</head>

<body>

    {{-- Componente que llama al HEADER --}}
    <x-header></x-header>

    <article class="Contenedor">

        <section class="Form_componente">
            <section class="C_fp">
                <article class="Fp">
                    <img class="Imgcomponente" src="Img/Cultivos En produccion.png" alt="" srcset="">
                </article>
            </section>

            <section class="C_titulo">
                <h1 class="TxtTitulo">Cultivos en Seguimiento Actualmente</h1>
            </section>

            <hr class="lineaCt">


            <aside class="contenedor2CS">
                <section class="padre_titulosCS">
                    <ol class="Historial_CShijos list-inline">
                        <Li class="txt_tituloCS">Nombre del Cultivo</Li>
                        <li class="txt_tituloCS">Tiempo Estimado</li>
                    </ol>
                </section>

                <section class="Contendedor_3CS">
                    <article class="tablaCS">
                        <section class="hijotabla_CS list-inline">
                            <Li class="txt_tituloCS1">Naranjas Bonitas </Li>
                            <li class="txt_tituloCS1"> Limon agrio</li>
                            <section class="contenedorbtncs">
                                <li class="btn_CS"><input class="botonsCS" type="button" value="Detalle"></li>
                                <li class="btn_CS"><input class="botonsCSborrar" type="image" src="Img/btnborrar.png"
                                        value=""></li>
                            </section>
                        </section>
                    </article>
                </section>
            </aside>
        </section>
    </article>

    {{-- Componente que llama al FOOTER --}}
    <x-footer></x-footer>

</body>

</html>
