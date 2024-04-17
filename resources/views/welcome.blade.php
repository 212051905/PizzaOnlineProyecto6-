
    @component('nvar')
        @slot('content')
            <!-- Content you want to pass to the slot -->
            <div class="container">
                <h1>Página de Inicio</h1>
                <p>¡Bienvenido a nuestra pizzería!</p>
                <p>Este es solo un contenido de muestra para la página de inicio.</p>
                <img src="https://static.eldiario.es/clip/512ea43a-99c2-42a9-b73b-645e448a7c0f_16-9-discover-aspect-ratio_default_0.jpg" alt="Pizza de la casa">
            </div>
        @endslot
    @endcomponent
