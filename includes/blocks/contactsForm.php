<?php require dirname(__FILE__) . '/../paths.php'; ?>
<?php require dirname(__FILE__) . '/bigVerticalDivisor.php'; ?>

<div id="contacts-right-content">
    

<div id="contacts-form">

    <h2 id="contactos-header">Contactos</h2>

    <form id="basic-form">
        <div>
            <label for="contactos-form-nombre" class="">Nombre <span class="required-text">*</span></label>

            <input type="text" id="contactos-form-nombre"/>
        </div>

        <div>
            <label for="contactos-form-email" class="">Email <span class="required-text">*</span></label>

            <input type="text" id="contactos-form-email"/>
        </div>


        <div>
            <label for="contactos-form-empresa" class="">Empresa</label>

            <input type="text" id="contactos-form-empresa"/>
        </div>

        <div>
            <label for="contactos-form-empresa" class="">Telefono</label>

            <input type="text" id="contactos-form-tel"/>
        </div>


        <div id="contactos-form-mensaje-container">
            <label for="contactos-form-nombre" class="">Mensaje <span class="required-text">*</span></label>

            <textarea id="contacts-form-message"></textarea>
        </div>

        <div id="contacts-button-container">
            <a id="contacts-form-clean-button" class="form-button">Limpiar Formulario</a>
            <a id="contacts-form-send-button" class="form-button" href="#">Enviar</a>
        </div>



    </form>
    
	

</div>

<div id="contacts-schedule">
	<h2>Horario Laboral</h2>
	<p>
		<span class="bold">Lunes a Viernes</span>
		<br/>
		8:00 AM A 6:00 PM		
	</p>

	<p>
		<span class="bold">S&aacute;bados</span>
		<br/>
		8:00 AM A 12:00 PM		
	</p>
</div>


<h2 id="contacts-localizacion-title">Localizaci&oacute;n</h2>



    
        <div id="contacts-map-container">

            <div id="contacts-map">

            </div>




        </div>



</div>