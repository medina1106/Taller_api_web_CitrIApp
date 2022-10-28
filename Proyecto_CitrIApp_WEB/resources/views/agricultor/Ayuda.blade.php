<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Componentes.css">
    <link rel="shortcut icon" href="Img/Logo.png" />
    <title>Ayuda</title>
</head>

<body>

    {{-- Componente que llama al HEADER --}}
    <x-header></x-header>

    <article class="ContenedorAyuda">

        <article class="P_Ayuda">

            <section class="P_TyL">

                <article class="P_imgcitriapp">

                    <img class="img_citriapp" src="Img/img_citriapp.png" alt="">

                </article>
                <article class="P_imgLogo">
                    <img class="H_img_Logo" src="Img/Logo.png" alt="">

                </article>



            </section>

            <article class="P_texto_ayuda">
                <p class="h_txt_ayuda">CitriApp es un aplicativo web dedicado a los cítricos
                    y al monitoreo y predicción de desarrollo de este tipo de cultivos. Con
                    la ayuda de inteligencia artificial podemos ofrecer servicios como
                    la Predicción de rentabilidad de la plantación de cítricos </p>

            </article>

            <aside class="c_ayuda_prediccion">

                <article class="c_img_ayuda">
                    <img class="img_ayuda_p" src="Img/Ayuda_P.png" alt="">

                </article>

                <article class="C_txt_a_p">

                    <p class="txt_a_p">Para poder general una prediccion de cultivos
                        en importante, en el el menu inicial de opciones,
                        dirigirnos a la opcion de Prediccion de cultivos, en
                        seguida encontraras un formulario para llenar con
                        informacion necesaria para poder generar la prediccion.
                        Al llenar el formilario damos click en el boton de
                        predecir, y en seguida se generara la grafica que nos
                        mostrara que tan buena o mala es la probabilidad de
                        una buena produccion de citricos.</p>

                </article>

            </aside>

            <article class="c_ayuda_historial">

                <article class="C_txt_a_h">
                    <p class="txt_a_h">Por otro lado CitriApp tambien te guardara cada
                        consilta de predicciones que hagas y odas
                        encontrar cada una de ellas en la parte de historia </p>
                </article>


                <article class="C_img_a_h">


                    <img class="img_ayuda_h" src="Img/Ayuda_h.png" alt="">



                </article>


            </article>

            <section class="C_ayuda_R_C">

                <article class="C_img_R_C">

                    <img class="img_ayuda_R_C" src="Img/Ayuda_h.png" alt="">

                </article>

                <article class="C_txt_R_C">

                    <p class="txt_ayuda_R_C">En caso de querer llevar el seguimiento de algun cultivo.
                        se contara con un registro de cultivo, se podra llegar a este formulario de registro de cultivos
                        seleccionando la opccion de registro de cultivos en el menu inicial de opciones.
                        En este formulario es mir importante llenar cada uno de los datos solicitados, ya que es
                        importante para poder predecir una posible fecha de cosecha y para poderte recomendar
                        tratamientos en el transcurso de la producción de tu cultivo de cítricos</p>

                </article>
            </section>

        </article>





    </article>

    {{-- Componente que llama al FOOTER --}}
    <x-footer></x-footer>

</body>

</html>
