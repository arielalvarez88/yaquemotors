<?php require dirname(__FILE__).'/../paths.php';?>
<?php $backgroundPos= 0;?>
<div id="workshop-services-slideshow-container">

    <p id ="workshop-services-slideshow-header">
        <img alt="slideshow-header" src="<?php echo $paths->images;?>/workshopServicesSlideshow/slideshowHeader.png"/>
    </p>
    
    <div id="workshop-sevices-slideshow-pager">
        <?php for($i =0; $i<7; $i++):?>
        
            <span style="background-position:<?php echo $backgroundPos?>px 0;" id="workshop-sevices-slideshow-number<?php echo $i+1;?>" class="workshop-sevices-slideshow-number"></span>        
            <?php $backgroundPos-=48;?>
        <?php endfor;?>
                   
    </div>

    
    <div id="workshop-services-slideshow">
        <div class="workshop-sevices-slideshow-slide">
            <h2>1. Citas</h2>
            <p>
                Las citas vienen a facilitar el servicio tanto al cliente como al taller. A través de las citas, conocemos de antemano los motivos y requerimientos de visita del cliente. Esto nos ayuda a hacer una programación precisa del trabajo a realizar y de los repuestos a utilizar. Las ventajas de realizar las citas es que antes de visitarnos, conocerá la disponibilidad del taller, el tiempo de entrega de su unidad y el precio del trabajo a realizar.
                <br/>
                <br/>
                    Por otra parte, el cliente tiene preferencia en su llegada al taller y su vehículo tendrá prioridad de trabajo. Para realizar la cita solo debe llamarnos al 809-582-4724 o  realizarla través del website. 
                <br/>
                <br/>
                <span class="workshop-sevices-slide-bottom-text">Tiempo: 10 minutos.</span>
                
            </p>
        </div>

        <div class="workshop-sevices-slideshow-slide">
            <h2>2. Recepci&oacute;n y Consulta</h2>
            <p>
                Momento en que el cliente llega a nuestras instalaciones y es recibido por el Asesor de Servicios. Se toman los datos del cliente, del vehículo y el motivo de la visita. En esta etapa, el cliente conoce el tiempo estimado de entrega y el costo del servicio. La recepción para clientes con cita será prioritaria. Por el contrario, los clientes sin citas serán atendidos en el orden de llegada y luego de los clientes con citas.
                <br/>
                <br/>
                <span class="workshop-sevices-slide-bottom-text"> Tiempo: 15 minutos.</span>
            </p>
        </div>
        
        <div class="workshop-sevices-slideshow-slide">
            <h2>3. Diagn&oacute;stico</h2>
            <p>
                Aparte del motivo de visita del cliente a nuestro taller, nuestros técnicos realizan un diagnóstico completo al vehículo en busca de anomalías. Toda anomalía será reportada al Asesor de Servicio, quien se pone en contacto con el cliente para dar esta información. 
                <br/>
                <br/>
                <span class="workshop-sevices-slide-bottom-text">Tiempo: 20 minutos.</span
            </p>
        </div>
        
        <div class="workshop-sevices-slideshow-slide">
            <h2>4. Autoriazaci&oacute;n del Cliente</h2>
            <p>
                Al finalizar el diagnóstico, el Asesor contacta al cliente para informar de los puntos adicionales de reparación encontrados, y así, pedir autorización para este trabajo adicional. 
                <br/>
                <br/>
               <span class="workshop-sevices-slide-bottom-text"> Tiempo: 10 minutos.</span>
            </p>
        </div>
        
        <div class="workshop-sevices-slideshow-slide">
            <h2>5. Servicio</h2>
            <p>
               Luego de obtener la autorización del cliente, se comienza el servicio de mantenimiento al vehículo. El tiempo de trabajo dependerá del tipo de mantenimiento a realizar y su duración va desde una 1 hora hasta 4 horas. Al finalizar el servicio se le realiza un lavado gratis de cortesía. Finalmente, el vehículo pasa a control de calidad, donde se inspecciona el trabajo realizado antes de entregar la unidad al Cliente.  
               <br/>
                <br/>
                <span class="workshop-sevices-slide-bottom-text">Tiempo: 1-4 horas.</span>
                </p>
        </div>
            
            
        
        <div class="workshop-sevices-slideshow-slide">
            <h2>6. Factura y Entrega</h2>
            <p>
                El cliente es contactado al finalizar el trabajo con la finalidad de recoger el vehículo terminado. Al momento que el cliente llega al establecimiento, el Asesor le explica todo el trabajo realizado, responde a cualquier inquietud manifestada, entrega las piezas cambiadas y procede a facturar el servicio. 
                <br/>
                <br/>
                <span class="workshop-sevices-slide-bottom-text">Tiempo: 15 minutos.</span>
            </p>
                
        </div>
        
        <div class="workshop-sevices-slideshow-slide">
            <h2>7. Seguimiento</h2>
            <p>
                El trabajo no termina al entregar el vehículo. Nuestro personal realiza una llamada de seguimiento antes de los 4 días de realizado el servicio al vehículo, en la cual se hacen varias preguntas con la  intención de conocer cualquier inquietud que tenga el cliente, y así, poder dar solución de la manera más rápida posible.
                 <br/>
                 <br/>
            <span class="workshop-sevices-slide-bottom-text">Tiempo: 4 minnutos.</span>
            </p>
           
        </div>
    </div>

</div>
