<header>
    <nav class="menu">
        <section class="contenedorTitu">
            <label class="letratex2">CITR<label class="letratex3">IA</label>PP</label>
        </section>

        @if (Auth::user())
        <article class="Cmenu2">
            <a type="button" href="{{route('agricultor.Prediccion')}}" class="Cb">
                <section class="button">
                    <img class="Imgmenu" src="Img/prediccion.png" alt="">
                </section>
                <h1 class="txt">Predicción</h1>
            </a>

            <a type="button" href="{{route('agricultor.RegistroC')}}" class="Cb">
              <section class="button">
                    <img class="Imgmenu" src="Img/Registrar.png" alt="">
                </section>
                <h1 class="txt">Registrar Cultivo</h1>
           </a>

            <a type="button" href="{{route('agricultor.Historial')}}" class="Cb">
                <section class="button" href="">
                    <img class="Imgmenu" src="Img/usuarios.png" alt="">
                </section>
                <h1 class="txt">Historial de Predición</h1>
           </a>
          
            <a type="button" href="{{route('agricultor.Cultivos')}}" class="Cb">
                <section class="button">
                    <img class="Imgmenu" src="Img/Cultivos En produccion.png" alt="">
                </section>
                <h1 class="txt">Cultivos</h1>
            </a>

            <a type="button" href="{{route('agricultor.Cultivos')}}" class="Cbhamburguesa">
                <section class="button">
                    <img class="Imgmenuhamburguesa" src="Img/menu.png" alt="">
                </section>
            </a>
        </article>
        
        @else
        
        <a type="button" href="{{route('login')}}" class="Cb">
            <section class="button">
                <img class="Imgmenu" src="Img/Cultivos En produccion.png" alt="">
            </section>
            <h1 class="txt">Iniciar</h1>
        </a>

        <a type="button" href="{{route('agricultor.nosotros')}}" class="Cb">
            <section class="button">
                <img class="Imgmenu" src="Img/Cultivos En produccion.png" alt="">
            </section>
            <h1 class="txt">Nosotros</h1>
        </a>
        
        @endif

        
    </nav>
</header>