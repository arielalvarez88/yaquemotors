<?php require dirname(__FILE__).'/../paths.php';?>
<div id="parts-store">

    <div id="parts-store-left-menu">
        <a id="parts-store-left-menu-appointment" class="parts-store-left-menu-button"></a>
        <a id="parts-store-left-menu-offers" class="parts-store-left-menu-button"></a>
    </div>
    <?php require dirname(__FILE__) . '/bigVerticalDivisor.php'; ?>
    <div id="parts-store-text-container">
        <h2>TIENDA DE REPUESTOS</h2>
        <p id="parts-store-text">
            En nuestra tienda de repuestos tenemos un amplio inventario de piezas originales directamente desde los fabricantes, ofreciendo así la mejor calidad a nuestros clientes.
            <br/>
            <br/>
            Cuando utiliza repuestos originales: no hay que hacer adaptaciones a la pieza ya que fue fabricada con las especificaciones de fabrica por tecnicos expertos, asegurando un mayor tiempo de duración de la misma, lo que lleva a una mayor duración, seguridad, duracion de su vehículo. Todo esto trae un considerable ahorro de dinero a nuestros clientes.
        </p>

        <div id="parts-store-form">

            <div id="parts-store-user-info">
                <label for="part-store-username">Nombre</label>
                <input name="part-store-username" id="part-store-username" type="text"/>

                <label for="part-store-lastname">Apellido</label>
                <input name="part-store-lastname" id="part-store-lastname" type="text"/>

                <label for="part-store-company">Empresa</label>
                <input name="part-store-company" id="part-store-company" type="text"/>

                <label for="part-store-tel">Tel&eacute;fono</label>
                <input name="part-store-tel" id="part-store-tel" type="text"/>

                <label for="part-store-email">Email</label>
                <input name="part-store-email" id="part-store-email" type="text"/>
            </div>



            <div id="parts-store-part-info">

                <h2>Informaci&oacute;n de la parte (Pieza)</h2>

                <label for="part-store-part-brand">Marca</label>
                <input name="part-store-part-brand" id="part-store-part-brand" type="text"/>

                <label for="part-store-part-model">Modelo</label>
                <input name="part-store-part-model" id="part-store-part-model" type="text"/>

                <label for="part-store-part-year">A&ntilde;o</label>
                <input name="part-store-part-year" id="part-store-part-year" type="text"/>

                <label for="part-store-part-chasis">No. Chasis</label>
                <input name="part-store-part-chasis" id="part-store-part-chasis" type="text"/>

                <label for="part-store-part-color">Color</label>
                <input name="part-store-part-color" id="part-store-part-color" type="text"/>

                <label for="part-store-part-piece">Pieza a Cotizar</label>
                <input name="part-store-part-piece" id="part-store-part-piece" type="text"/>

                <label id="part-store-part-comment-label" for="part-store-part-comment">Comentario</label>
                
                <textarea name="part-store-part-comment" id="parts-store-part-comment" type="text"></textarea>


            </div>

            <a id="part-store-form-clean" class="contacts-form-button">Limiar Formulario</a>
            <a id="part-store-form-send" class="contacts-form-button">Enviar</a>
        </div>
    </div>


</div>