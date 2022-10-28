<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/Iniciar/Style.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/Logo.png') }}" />
    {{--     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&display=swap" rel="stylesheet"> --}}
    <title>Acceder a CitrIApp</title>
</head>


<body>
    <article class="body">
        <header class="header">
            <section class="sub_header">
                <article class="c_logo">
                    <img class="logo" src="{{ asset('img/Logo.png') }}">
                </article>


                <!-- Formulario para INICIAR SESION -->
                <form action="{{ route('login2') }}" class="form_iniciar" id="form_iniciar" method="POST">
                    {{ csrf_field() }}
                    <!-- Grupo CORREO ELECTRONICO -->
                    <section class="c_par" id="formulario_iniciar">
                        <article class="c_sub_form">
                            <label for="email" class="letrapeq">Correo</label>
                            <label for="email" class="letrapeq">electronico</label>
                        </article>
                        <article class="c_sub_form">
                            <input id="email" class="input_ini" name="email" type="text" />
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </article>
                    </section>

                    <!-- Grupo CONTRASEÑA -->
                    <section class="c_par2">
                        <article class="c_sub_form2">
                            <label for="password" class="letrapeq">Contraseña</label>
                        </article>
                        <article class="c_sub_form">
                            <input id="password" class="input_ini" name="password" type="password" />
                            {{-- <i class="formulario__validacion-estado fas fa-times-circle"></i>  --}}
                            <img id="show_password_i" onclick="mostrarPassword()" class="show_password_i"
                                src="{{ asset('img/eye_close.png') }}" alt="">
                        </article>
                        {{-- <section class="c_mostrar_password">
                            </section> --}}
                    </section>



                    <!-- Grupo BOTÓN INICIAR SESION -->
                    <section class="c_btn_iniciar">
                        <button type="submit" class="btn_iniciar">Iniciar</button>
                    </section>
                </form>
            </section>
        </header>




        <article class="c_form">

            <!-- Formulario para REGISTRARSE -->
            <form action="{{ route('register') }}" class="form_registro" method="POST" id="validacionregistro">
                {{ csrf_field() }}

                <!-- Grupo titulo REGISTRARTE -->
                <article class="c_txt_registrar">
                    <label class="letragra">Regi<label class="letragra color_verde">str</label>arte</label>
                </article>

                <article class="sub_form_registrar" id="sub_form_registrar">

                    <!-- Grupo Nombres -->
                    <section class="c_sub_reg" id="grupo__nombre">
                        <article class="txt_input">
                            <label for="nombre" class="letrapeq">Nombre completo</label>
                        </article>
                        <article class="c_input2">
                            <input id="nombre" class="input2" name="nombre" type="text" />
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </article>
                        {{-- <label class="formulario__input-error">El nombre es muy corto o estas ingresando caracteres especiales.</label> --}}
                    </section>

                    <!-- Grupo CÉDULA -->
                    <section class="c_sub_reg" id="grupo__cedula">
                        <article class="txt_input">
                            <label for="cedula" class="letrapeq">Cédula</label>
                        </article>
                        <article class="c_input2">
                            <input id="cedula" type="number" name="cedula" class="input2" min="0" />
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </article>
                    </section>

                    <!-- Grupo CORREO -->
                    <section class="c_sub_reg" id="grupo__emailr">
                        <article class="txt_input">
                            <label for="emailr" class="letrapeq">Correo</label>
                        </article>
                        <article class="c_input2">
                            <input id="emailr" type="email" name="emailr" placeholder="ejemplo@gmail.com"
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
                            <input id="celular" type="number" name="celular" class="input2" minlength="10"
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

                            {{--  <section class="c_mostrar_password">
                                <button id="show_password2" class="c_sub_mostrar_password" type="button"
                                    onclick="mostrarPassword2()"> <span class="fa fa-eye-slash icon"></span></button>
                             </section> --}}
                            {{--  <section class="c_mostrar_password">
                                <img id="show_password2" onclick="mostrarPassword2()" class="show_password_i" src="{{ asset('img/eye_open.png') }}" alt="">
                            </section> --}}
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

                    <!-- Grupo TERMINOS Y CONDICIONES -->
                    <article class="c_terminos">
                        <section class="c_checkbox">
                            <input name="terminos" id="terminos" value="SI" class="checkbox"
                                type="checkbox" />
                        </section>
                        <section class="c_txt_terminos">
                            <label for="terminos" class="letrapeq">He leido y acepto los términos y
                                condiciones</label>
                        </section>
                    </article>
                </article>


                <!-- Grupo ICONOS DE REDES -->
                <article class="c_iconos">
                    <a href="{{ url('auth/facebook') }}" class="c_icono" type="button"><img class="t_icono"
                            src="{{ asset('img/Facebook.png') }}"></a>
                    <a class="c_icono" type="button"><img class="t_icono" src="{{ asset('img/Google.png') }}"></a>
                </article>


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
                    <button type="submit" name="B_registrarme" class="boton alinear">Registrarme</button>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">¡Formulario enviado
                        exitosamente!</p>
                </article>
            </form>
        </article>
    </article>

    {{-- Componente que llama al FOOTER --}}
    <x-footer></x-footer>


    {{-- Bloquea el clic derecho para que no se pueda ver el codigo de la pagina jajajajajajajaajaja --}}
    <script>
        document.oncontextmenu = function() {
            return false;
        }
    </script>

    <script src="{{ asset('js/register/formulario_registro.js') }}"></script>
    <script src="{{ asset('js/register/Mostrar_password.js') }}"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="{{asset('js/register/terminos.js')}}"></script> --}}
    <script src="{{ asset('js/register/terminos.js') }}"></script>
    {{--  <script src="{{ asset('js/register/satisfactorio.js') }}"></script> --}}


    @if (session('iniciar') == 'false')
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                colors: '#f66060',
                title: 'No se ha podido iniciar sesion',
                text: 'Compruebe que el correo o la contraseña esten bien escritos',
                footer: '<a class"olivide_password" href="">¿Olvide mi contraseña?</a>',
                showConfirmButton: false,
                timer: 15000,
                timerProgressBar: true
            });
        </script>
    @endif


    @if (session('registro') == 'false')
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'No se ha podido realizar el registro',
                text: 'Lo sentimos el registro no se pudo completar.',
                showConfirmButton: false,
                timer: 15000,
                timerProgressBar: true
            });
        </script>
    @endif

</body>

</html>

{{-- ARRAY DE COLORES JAVASCRIPT --}}
{{-- https://gist.github.com/mucar/3898821 --}}
