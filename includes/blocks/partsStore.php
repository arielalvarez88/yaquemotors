<?php require dirname(__FILE__).'/../paths.php';?>
<div id="parts-store">

    <div id="parts-store-left-menu">
        <a href="/citas" id="parts-store-left-menu-appointment" class="parts-store-left-menu-button"></a>
        <a  id="parts-store-left-menu-offers" class="parts-store-left-menu-button"></a>
    </div>
    <?php require dirname(__FILE__) . '/bigVerticalDivisor.php'; ?>
    <div id="parts-store-text-container">
        <h2>TIENDA DE REPUESTOS</h2>
        <p id="parts-store-text">
            
            Cuando un vehículo utiliza repuestos originales no hay que hacer adaptaciones a la pieza ya que cumple con las especificaciones del fabricante, asegurando una mayor duración, mejor calidad y seguridad, así como un mejor funcionamiento del vehículo. Todo esto trae un considerable ahorro de dinero al cliente.
En nuestra tienda de repuestos tenemos un amplio inventario de piezas originales para los diferentes modelos que representamos de las marcas Nissan, General Motors y Suzuki. En el caso de las piezas menos comunes en el mercado, disponemos de un sistema especial de pedidos, garantizando al cliente la recepción de la pieza en el menor tiempo posible.
            
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

            <a id="part-store-form-clean" class="form-button">Limpiar Formulario</a>
            <a id="part-store-form-send" class="form-button">Enviar</a>
        </div>
    </div>


</div>