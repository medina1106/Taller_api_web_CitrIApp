<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Perfil.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/Iniciar/Style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/Perfil/Style.css') }}">
    <link rel="shortcut icon" href="Img/Logo.png" />
    <title>Perfil</title>
</head>

<body>

    {{-- Componente que llama al HEADER --}}
    <x-header></x-header>

    <article class="Contenedor">

        <aside class="contenedor2">
            <section class="form-perfil">

                <article class="CbP" type="button" href="#">
                    <section class="Imgperf">
                        <img class="ImgP" src="Img/Usuario.png" alt="" srcset="">
                    </section>
                </article>

                <article class="CbFoto" type="button" href="#">
                    <section class="ImgFot">
                        <img class="ImgFoto" src="Img/ejemplo.png" alt="" srcset="">
                    </section>
                </article>

                <section class="CTxt">
                    <p class="txtnombre">{{ Auth::user()->nombre }}</p>
                </section>
                <hr class="lineaFP">

                <aside class="form-perfil2">

                    <section class="Listap">
                        <p class="Txtlistap">Correo: {{ Auth::user()->email }}</p>
                        <p class="Txtlistap">Cedula: {{ Auth::user()->cedula }}</p>
                        <p class="Txtlistap">Tel: {{ Auth::user()->celular }}</p>



                        <section class="C_btnp"></section>

                        <button id="Btneditar" onclick="editprofile()" class="Btneditar" type="button">Editar</button>
                    </section>
                </aside>
            </section>
        </aside>


        <aside class="contenedor3">

            <section class="form-seguimiento">

                <section class="Ctitulo">
                    <h3 class="TituSegui">Cultivos registrados con seguimiento actualmente</h3>
                </section>
                <hr class="lineaFS">

                <section class="CListaNYT">

                    <article class="CtNYT">

                        <h2 class="TxtlistaNyt">Nombre del Cultivo</h2>
                        <h2 class="TxtlistaNyt">Tiempo Estimado</h2>

                    </article>


                </section>




            </section>

        </aside>



    </article>

    {{-- Componente que llama al FOOTER --}}
    <x-footer></x-footer>

    {{-- Bloquea el clic derecho para que no se pueda ver el codigo de la pagina jajajajajajajaajaja --}}
    <script>
        document.oncontextmenu = function() {
            return false;
        }
    </script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Alerta cuando la edicion se realice correctamente --}}
    @if (session('editar') == 'true')
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
                title: 'Campos editados correctamente'
            })
            /* Swal.fire({
                width: '30vw',
                heightAuto: 'auto !important',
                height: '100vh',
                position: 'center',
                icon: 'success',
                iconColor: 'rgba(68,184,68,1)',
                title: 'Campos editados correctamente',
                timer: 1500,
                showConfirmButton: true,
                confirmButtonColor: 'rgba(68,184,68,0.5)',
                confirmButtonText: 'Ok',
                timerProgressBar: true,
                showClass: {
                    popup: 'swal2-show',
                    backdrop: 'swal2-backdrop-show',
                    icon: 'swal2-icon-show'
                },
                grow: false,
                customClass: {
                    container: '...',
                    popup: '...',
                    header: '...',
                    title: '...',
                    closeButton: '...',
                    icon: '...',
                    image: '...',
                    htmlContainer: '...',
                    input: '...',
                    inputLabel: '...',
                    validationMessage: '...',
                    actions: '...',
                    confirmButton: '...',
                    denyButton: '...',
                    cancelButton: '...',
                    loader: '...',
                    footer: '....',
                    timerProgressBar: '....',
                }
            }); */
        </script>
    @endif

    <script>
        function editprofile() {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                grow: true,
                colors: '#f66060',
                title: 'Editar informacion personal',
                showConfirmButton: false,
                showCancelButton: false,
                showCloseButton: true,

                html: `<form action="{{ route('User.update') }}" class="form_registro" method="POST" id="validacionregistro">
                {{ csrf_field() }}
                <article class="sub_form_registrar" id="sub_form_registrar">

                    <!-- Grupo Nombres -->
                    <section class="c_sub_reg" id="grupo__nombre">
                        <article class="txt_input">
                            <label for="nombre" class="letrapeq">Nombre completo</label>
                        </article>
                        <article class="c_input2">
                            <input id="nombre" value="{{ Auth::user()->name }}" class="input2" name="nombre" type="text" />
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </article>
                    </section>
            

                    <!-- Grupo CORREO -->
                    <section class="c_sub_reg" id="grupo__emailr">
                        <article class="txt_input">
                            <label for="emailr" class="letrapeq">Correo</label>
                        </article>
                        <article class="c_input2">
                            <input id="emailr" value="{{ Auth::user()->email }}" type="email" name="emailr" placeholder="ejemplo@gmail.com"
                                class="input2" />
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </article>
                    </section>

                    <!-- Grupo TELEFONO -->
                    <section class="c_sub_reg" id="grupo__celular">
                        <article class="txt_input">
                            <label for="celular" class="letrapeq">Telefono</label>
                        </article>
                        <article class="c_input2">
                            <input id="celular" value="{{ Auth::user()->celular }}" type="number" name="celular" class="input2" minlength="10"
                                maxlength="10" min="3000000000" />
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </article>
                    </section>

                    <!-- Grupo CONTRASEÑA -->
                    <section class="c_sub_reg" id="grupo__password2">
                        <article class="txt_input">
                            <label for="password2" class="letrapeq">Contraseña</label>
                        </article>
                        <article class="c_input2">
                            <input id="password2" type="password" name="password2" class="input2" minlength="10" />
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </article>
                    </section>


                    <!-- Grupo CONFIRMAR CONTRASEÑA -->
                    <section class="c_sub_reg" id="grupo__password3">
                        <article class="txt_input">
                            <label for="password3" class="letrapeq">Confirmar Contraseña</label>
                        </article>
                        <article class="c_input2">
                            <input id="password3" type="password" name="password3" class="input2" />
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </article>
                    </section>

                {{-- Mensajes de alerta corrspondiente al campo que esta fallando --}}
                <article id="grupo__nombre">
                    <label class="formulario__input-error">El nombre es muy corto o estas ingresando caracteres
                        especiales.</label>
                </article>

                <section id="grupo__cedula">
                    <label class="formulario__input-error">Número de dijitos invalidos</label>
                </section>

                <section id="grupo__celular">
                    <label class="formulario__input-error">El telefono debe tener 10 dígitos. Por favor
                        rectifica.</label>
                </section>

                <section id="grupo__emailr">
                    <label class="formulario__input-error">Correo no valido compruebe que este escrito
                        correctamente.</label>
                </section>

                <section id="grupo__password2">
                    <label class="formulario__input-error">La contraseña debe ser de 10 o mas dígitos.</label>
                </section>

                <section id="grupo__password3">
                    <label class="formulario__input-error">Ambas contraseñas deben ser iguales, rectifica por
                        favor.</label>
                </section>


                {{-- Mensaje que se muestra solo cuando se intenta enviar el formulario y algun campo esta mal --}}
                <article class="formulario__mensaje" id="formulario__mensaje">
                    <p><i class="fas fa-exclamation-triangle"></i><b>Error:</b> Por favor rellena el formulario
                        correctamente. </p>
                </article>


                <!-- Grupo BOTÓN REGISTRARME -->
                <article class="c_btn_registro formulario__grupo-btn-enviar">
                    <button type="submit" name="B_registrarme" class="boton">Editar</button>
                </article>
            </form>`,
                /* Cuando aparesca sale con el fondo oscuro */
                backdrop: `rgba(36,48,60,0.6)
    url("/images/nyan-cat.gif")
    left top
    no-repeat`,
                /* padding: '1rem', */
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                stopKeydownPropagation: false,


            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                    //   #3085d6
                }
            })
        };
    </script>

    <script src="{{ asset('js/perfil/formulario_update.js') }}"></script>
    <script src="{{ asset('js/register/formulario_registro.js') }}"></script>

</body>

</html>
