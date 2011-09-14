<?php require dirname(__FILE__).'/../paths.php';?>
<div id="make-appointment">
   
    

    <div id="make-appointment-left-menu">
        
        <a class="make-appointment-left-menu-button" id="make-appointment-left-menu-offers"></a>
    </div>

    <?php require dirname(__FILE__).'/bigVerticalDivisor.php';?>
    
    <div id="make-appointment-text-container">
        <h2>Formulario de Citas</h2>
        <p><span>Nombre del Cliente / Empresa</span> <input id="appointment-name" type="text"/></p>
        
        <p><span>Tel&eacute;fono</span> <input id="appointment-telephone" type="text"/></p>
        
        <p><span>Email</span> <input id="appointment-email" type="text"/></p>
        
        <p><span>Fecha y Hora</span> <input id="appointment-date" type="text"/></p>
        
        <p>
            <span>Marca del Veh&iacute;culo</span> 
            <select id="appointment-brand">
                <option value="Nissan">Nissan</option>
                <option value="Suzuki">Suzuki</option>
                <option value="Chevrolet">Chevrolet</option>
            </select>
        </p>
        
        <p><span>Modelo</span> <input id="appointment-model" type="text"/> </p>
        
        <p><span>Color</span> <input id="appointment-color" type="text"/> </p>
        
        <p><span>No. Chassis</span> <input id="appointment-chasis" type="text"/> </p>
        
        <p><span>No. Placa</span> <input id="appointment-plate" type="text"/> </p>
        
        <p><span>Kilometraje Actual</span> <input id="appointment-kilometers" type="text"/></p>
        
        <p><span>Servicio Solicitado (Quejas)</span> <input id="appointment-service" type="text"/></p>
                
        
        <a id="make-appointment-send-button" class="form-button">Enviar</a>
        <a id="make-appointment-clean-button" class="form-button">Limpiar Formulario</a>
    </div>



    
</div>