<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Componentes.css">
    <link rel="shortcut icon" href="Img/Logo.png" />
    <title>Prediccion</title>
</head>

<body>

    {{-- Componente que llama al HEADER --}}
    <x-header></x-header>

    <article class="Contenedor">


        <section class="Form_componente">

            <section class="C_fp">
                <article class="Fp">
                    <img class="Imgcomponente" src="Img/prediccion.png" alt="" srcset="">
                </article>



            </section>

            <section class="C_titulo">

                <h1 class="TxtTitulo">Predicciones de cultivos</h1>

            </section>

            <hr class="lineaCt">


            <aside class="contenedor2">

                <section class="ContendedorFP">

                    <section class="form-predict">

                        <section class="contenedorTc_l_m">
                            <section class="sub"><label>Mes</label></section>
                            <input class="controls" type="date" name="Mes" id="nombres" placeholder="Marzo">
                        </section>


                        <section class="contenedorTc_l_m">
                            <section class="sub2"><label>Citrico</label></section>
                            <section class="select">
                                <select class="selector" name="format" id="format">
                                    <option class="" selected disabled>Seleccione el Citrico</option>
                                    <option value="">Lima</option>

                                </select>
                            </section>
                        </section>
                        <section class="contenedorTc_l_m">
                            <section class="sub"><label>Municipio</label></section>
                            <div class="select2">
                                <select class="selector" name="format" id="format">
                                    <option class="" selected disabled>Lugar De siembra</option>
                                    <option value="">Popayan</option>


                                </select>
                            </div>
                        </section>

                        <section>
                            <input class="botons" type="button" value="Predecir">
                        </section>




                    </section>

                </section>




                <section class="ContenedorFE">

                </section>

            </aside>



        </section>



    </article>

    {{-- Componente que llama al FOOTER --}}
    <x-footer></x-footer>

</body>

</html>
