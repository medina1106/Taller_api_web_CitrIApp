<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Componentes.css">
    <link rel="shortcut icon" href="Img/Logo.png" />
    <title>Nosotros</title>
</head>

<body>

    <header>

        <nav class="menu">

            <section class="contenedorTitu">
                <p class="letratex2">CITR<t class="letratex3">IA</t>PP</p>
            </section>

            <article class="Cmenu2">
                {{--                 
                <a type="button" href="Perfil.html" class="Cb">
                    <section class="button">
                        <img class="Imgmenu" src="Img/perfi.png" alt="">
                    </section>
                    <h1 class="txt">Perfil</h1>
                </a>
                <a type="button" href="Cultivos.html" class="Cb">
                    <section class="button">
                        <img class="Imgmenu" src="Img/Cultivos En produccion.png" alt="">
                    </section>
                    <h1 class="txt">Cultivos</h1>
                </a>
                <a type="button" href="Prediccion.html" class="Cb">
                    <section class="button">
                        <img class="Imgmenu" src="Img/prediccion.png" alt="">
                    </section>
                    <h1 class="txt">Predicción</h1>
                </a>
                <a type="button" href="#" class="Cb">
                  
                    <section class="button">
                        <img class="Imgmenu" src="Img/usuarios.png" alt="">
                    </section>
                    <h1 class="txt">Nosotros</h1>
               
                </a>

                <a type="button" href="#" class="Cb">
                  
                    <section class="button">
                        <img class="Imgmenu" src="Img/Registrar.png" alt="">
                    </section>
                    <h1 class="txt">Registrar Cultivo</h1>
               
                </a>

                @if (Auth::user())
                <form action="{{route('logout')}}" method="POST" class="c_formlogout">
                    {{ csrf_field() }}
                <button type="submit" href="#" class="Cbdespegable">
                    <section class="buttondes">
                        <img class="Imgmenudes" src="Img/logout.png" alt="">
                    </section>
                    <h1 class="txt">Salir</h1>
                </a>
                </button>
                </form>   
            @endif --}}


            </article>
        </nav>
    </header>

    <article class="Contenedor">
        <section class="Form_componente">
            <section class="C_fp">
                <article class="Fp">
                    <img class="Imgcomponente" src="Img/Usuarios.png" alt="" srcset="">
                </article>
            </section>

            <section class="C_titulo">
                <h1 class="TxtTitulo">Nosotros</h1>
            </section>

            <hr class="lineaCt">


            <aside class="contenedor2">
                <section class="Contendedor_N">
                    <aside class="Padre_texto">
                        <label class="txt_nosotros">
                            CitrIApp esta desarrollada por Analistastas y Desarrilladores de Sistemas de
                            informacion, que buscan ayudar a los agricultores de citricos en el departamento
                            del cauca; con el apoyo de la inteigencia artificial
                            para el monitoreo, seguimiento y prediccion de la produccion de cittricos.

                            La prediccion de este tipo de cultivos en el departamento de cauca es muy importante devido
                            a que el departamento del Cauca al dia de hoy es uno de los menores productores
                            de cítricos comparado con otros departamentos de Colombia
                        </label>
                    </aside>


                    <section class="Cpadre_imagen">
                        <aside class="padre_imagen">
                            <img class="imgimagen" src="Img/limonero.png" alt="">
                        </aside>
                    </section>
                </section>


                <section class="ContenedorN2">
                    <aside class="c_imagenes">

                        <section class="padre_imagen2">
                            <img class="imgnosotros" src="Img/imgnosotros.png" alt="" srcset="">
                        </section>

                        <section class="padre_imagen3">
                            <img class="imgIA" src="Img/Ia.png" alt="" srcset="">
                        </section>
                    </aside>

                    <aside class="Padre_texto2">
                        <label class="txt_nosotros2">
                            Al momento de realizar la siembra de cultivos cítricos el cambio climático afecta a tal
                            punto
                            que puede destruir cultivos enteros. De este problema conlleva
                            a que el campesino tenga una baja confianza al momento de tomar su decision de siembra.
                        </label>
                    </aside>
                </section>

            </aside>
        </section>
    </article>

    {{-- Componente que llama al FOOTER --}}
    <x-footer></x-footer>

</body>

</html>
