<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Componentes.css">
    <link rel="shortcut icon" href="Img/Logo.png" />
    <title>Registros de Cultivos</title>
</head>

<body>

    {{-- Componente que llama al HEADER --}}
    <x-header></x-header>

    <article class="Contenedor">


        <section class="Form_componente">

            <section class="C_fp">
                <article class="Fp">
                    <img class="Imgcomponente" src="Img/registrar.png" alt="" srcset="">
                </article>



            </section>

            <section class="C_titulo">

                <h1 class="TxtTitulo">Registro De Cultivos</h1>

            </section>

            <hr class="lineaCt">


            <aside class="contenedor2">

                <section class="ContendedorRC">

                    <form method="POST" action="{{ Route('RegisterCultive') }}" class="form_RC">
                        {{ csrf_field() }}
                        <section class="contenedorTc_R_C">
                            <section class="sub"><label>Nombre del Cultivo</label></section>
                            <input class="controls" type="text" name="name_cultive" id="name_cultive"
                                placeholder="Eje: cultivo1">
                        </section>


                        <section class="contenedorTc_R_C">
                            <section class="sub"><label>Tipo de Cultivo</label></section>
                            <section class="selectRC">
                                <select class="selectorRC" name="type_cultive" id="type_cultive">
                                    <option class="" selected disabled>Ubicación</option>
                                    <option value="Naranja">Naranja</option>

                                </select>
                            </section>
                        </section>
                        <section class="contenedorTc_R_C">
                            <section class="sub"><label>
                                    <Table>Ubicacion del Cultivo</Table>
                                </label></section>
                            <div class="selectRC2">
                                <select class="selectorRC2" name="ubication_cultive" id="ubication_cultive">
                                    <option class="" selected disabled>Cultivo</option>
                                    <option value="Popayan">Popayan</option>


                                </select>
                            </div>
                        </section>

                        <section class="contenedorTc_R_C">
                            <section class="sub"><label>Inicio de Producción</label></section>
                            <input class="controls" type="text" name="start_production" id="start_production"
                                placeholder="Eje: lunes">
                        </section>



                        <section>
                            <button class="botonsRC" type="submit"> Aceptar</button>
                        </section>


                    </form>



                </section>




                <section class="ContenedorTCA">

                    <section class="C_TenEC">
                        <h1 class="txt_TenEC">Ten en Cuenta!</h1>
                    </section>

                    <section class="C_imgTenEC">

                        <img class="img_tenEC" src="img/advertencia.png" alt="">

                    </section>

                    <article class="C_prf_tenEC">

                        <p class="txt_prfEC">
                            Ten en cuenta que el tipo de cultivo y la ubicación del cultivo
                            es importante para poder predecir una posible fecha de cosecha
                            y para poderte recomendar tratamientos
                            en el transcurso de la producción de tu cultivo de cítricos
                        </p>

                    </article>

                </section>

            </aside>



        </section>
    </article>

    {{-- Componente que llama al FOOTER --}}
    <x-footer></x-footer>

</body>

</html>
