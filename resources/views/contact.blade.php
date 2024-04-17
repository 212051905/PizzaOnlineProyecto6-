
    @component('nvar')
        @slot('content')
            <!-- Content you want to pass to the slot -->
            <div class="container">
                <h1>Contáctanos</h1>
                <p>¡Contáctanos para hacer tu pedido o para cualquier pregunta que tengas!</p>
                <p>Este es solo un contenido de muestra para la página de contacto.</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Juan Pérez</td>
                            <td>juan@example.com</td>
                            <td>555-123-4567</td>
                        </tr>
                        <tr>
                            <td>María González</td>
                            <td>maria@example.com</td>
                            <td>555-765-4321</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endslot
    @endcomponent
