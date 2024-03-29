<?php require dirname(__FILE__).'/../paths.php';?>
<div id="make-appointment">
   
    <p id="make-appointment-text">Planifica y coordina tu visita a nuestro taller realizando una cita desde el website o comunicándote con nuestros asesores de servicios. Te aseguramos que no tendrás más preocupaciones con el mantenimiento de tu vehículo después de conocer nuestros servicios.</p>
       
    <div id="make-appointment-text-container">
        <h2>Formulario de Citas</h2>
        <p><span>Nombre del Cliente </span> <input id="appointment-name" type="text"/></p>
        <p><span>Empresa </span> <input id="appointment-company" type="text"/></p>
        <p><span>Tel&eacute;fono</span> <input id="appointment-telephone" type="text"/></p>
        
        <p><span>Email</span> <input id="appointment-email" type="text"/></p>
        
        <p><span>Fecha y Hora</span> <input id="appointment-date" type="text"/></p>
        
        <p>
            <span>Marca del Veh&iacute;culo</span> 
            <select name ="appointment-brand" id="appointment-brand">
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
        
        <p><span>Servicio(s) Solicitado(s)</span> </p>
        <textarea id="appointment-service" type="text"></textarea>
                
        
        <a id="make-appointment-send-button" class="form-button">Enviar</a>
        <a id="make-appointment-clean-button" class="form-button">Limpiar Formulario</a>
    </div>


    <?php require dirname(__FILE__).'/bigVerticalDivisor.php';?>
    <div id="make-appointment-right-menu">
        <ul>
            
            <li>
                Trato m&aacute;s personalizado del asesor.
            </li>
            
            <li>
                Conocimiento de la disponibilidad del taller y de los repuestos para el servicio.
            </li>
            
            <li>
                El cliente recibe el servicio cuando mejor le convenga.
            </li>
            
            <li>
                No hace filas ni espera para la recepci&oacute;n.
            </li>
            
            <li>
                El veh&iacute;culo del cliente con cita tiene prioridad dentro del taller.
            </li>
            
            <li>
                El precio del mantenimiento lo conoce de antemano.
            </li>
            
        </ul>
        
    </div>

    
    
    
</div>