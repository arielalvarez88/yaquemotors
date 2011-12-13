<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require dirname(__FILE__) . '/../paths.php';
require dirname(__FILE__) . '/../classes/email_helper.php';
require dirname(__FILE__) . '/../formEmails.php';

require dirname(__FILE__) . '/../classes/tcpdf/tcpdf.php';


if (isset($_POST['client-name'])) {
    $emailer = new Email_helper();

    $html = <<<EOD
    <html>
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                
    </head>

    <body>
        
       <div id="answer-email-template" style="background: none repeat scroll 0 0 white; width: 960px;">
    <img alt="yaque-logo" src="{$paths->webpage}/sites/default/files/images/answerEmail/smallLogo.png" style=" float: right;"/>
   
    <div id="answer-email-template-content" style=" background: url('{$paths->webpage}/sites/default/files/images/answerEmail/bigLogo.png') no-repeat scroll 60px 463px transparent; border-left: 7px solid #13182C; clear: both; padding-left: 135px; padding-right: 90px; padding-top: 10px; clear: both; min-height: 735px;">
        <div id="answer-email-template-date" style="text-align: right; margin-bottom: 60px; text-align: right;">{$_POST['date']}</div>
        <div id="answer-email-template-client-name" style="font-weight: bold;">
        {$_POST['client-name']}
        </div>
        
        </br>
        {$_POST['greetings']}
        </br>
        
        
        
        {$_POST['message']}

        
        <div id="answer-email-template-prices-container" style="height: 80px; margin-bottom: 10px; margin-top: 30px;">
        
            <div id="answer-email-template-price-text" style="float: left; margin-right: 5px; margin-bottom: 20px;">
                <span style="font-weight: bold;">PRECIO DE OFERTA ___________________________</span>
            </div>

        <div id="answer-email-template-prices" style="float: left; margin-right: 30px;">
            <p style="margin:0;"><span style="font-weight: bold; margin:0;">US \${$_POST['us-price']}</span></p>
            <p style="margin:0;"><span style="font-weight: bold; margin:0;">RD \${$_POST['dr-price']}</span></p>
        </div>
        
        </div>
        
         <p style="margin:0;">Placa y endoso: {$_POST['placa-endoso']}</p>
        <p id="answer-email-template-warning" style="clear:both; margin: 0;">
            Nota: Le reiteramos que la venta y cotizaci&oacute;n del veh&iacute;culo ha sido pactada en d&oacute;lares a la tasa
            del d&iacute;a pero, ser&aacute; de exclusiva responsabilidad del comprador asumir cualquier
            diferencia que se produzca a consecuencia de la fluctuaci&oacute;n de la tasa de cambio, al momento del pago total del veh&iacute;culo.
        </p>

            <div style="margin-top: 55px; float:left;">
                <p>Saludos cordiales,</p>
                <div style="font-weight: bold; margin-bottom: 5px;">{$_POST['signature']}</div>
                <p style="margin-top: 0px;">Ejecutivo de ventas.</p>                
            </div>
            
            <div style="margin-top: 55px; float: left; margin-left: 100px;"> <img src="{$paths->webpage}/sites/default/files/images/answerEmail/seal.png" style="width:189px;"/></div>
        
    </div>

    <div id="answer-email-template-footer" style="color: #7A7C7F; font-size: 1em; padding: 35px; color: #7A7C7F; padding: 35px; clear: both;">
        
        <p style="margin: 0;"><span class="bold">T. </span> 809.582.4724</p>
        <p style="margin: 0;"><span class="bold">F. </span> 809.241.1400 </p>

        <p style="margin: 0;">Ave. 27 Febrero No. 16,</p>
        <p style="margin: 0;">Apartado 526, Santiago,</p>
        <p style="margin: 0;">Rep&uacute;blica Dominicana</p>

        <p style="margin: 0;">www.elyaquemotors.com</p>

    </div>
    </div>
    </body>
</html>
EOD;

    $success = mail($_POST['client-email'], utf8_decode("Respuesta Cotización"), $html, $emails['cotizarResponseHeaders']);

    if ($success) {
        echo '<h2 class="info-message">Email enviado con exito.</h2>';
    }
 else {
                echo '<h2 class="error-message">Error, revise que la dirección de correo electrónico sea correcta..</h2>';
    }
    

}
?>


<h2>
    FORMULARIO DE CITAS
</h2>




<form id="answer-email-wrapper" method="post" action="/responder-email">
    <div id="answer-email">


        <label for="answer-email-client-name">Email del cliente:</label>
        <input id="answer-email-client-email" type="text" name="client-email" <?php echo isset ($_POST['client-email']) ? 'value="'.$_POST['client-email'].'"' : ''?>/>


        <label for="answer-email-date">Fecha:</label>
        <input id="answer-email-date" type="text" name="date" <?php echo isset ($_POST['date']) ? 'value="'.$_POST['date'].'"' : ''?>/>

        <label  id="answer-email-client-name-label"for="answer-email-client-name">Nombre del cliente:</label>
        <textarea id="answer-email-client-name" type="text" name="client-name" class="wysiwyg" >
            
        </textarea>

        <label for="answer-email-greetings" id="answer-email-model-greetings-label">Saludo incial:</label>
        <textarea id="answer-email-model-greetings" type="text" name="greetings" class="wysiwyg">

        </textarea>


        <label for="answer-email-model">Placa y endoso:</label>
        <input id="answer-email-model" type="text" name="placa-endoso" <?php echo isset ($_POST['placa-endoso']) ? 'value="'.$_POST['placa-endoso'].'"' : ''?>/>

        
        <label id="answer-email-message-label" for="answer-email-message">Mensaje:</label>
        <textarea id="answer-email-message" name="message" class="wysiwyg"></textarea>

        <label for="answer-email-dr-price">Precio RD$:</label>
        <input id="answer-email-dr-price" type="text" name="dr-price" <?php echo isset ($_POST['dr-price']) ? 'value="'.$_POST['dr-price'].'"' : ''?>/>

        <label for="answer-email-us-price">Precio US$:</label>
        <input id="answer-email-us-price" type="text" name="us-price" <?php echo isset ($_POST['us-price']) ? 'value="'.$_POST['us-price'].'"' : ''?>/>

        <label id="answer-email-signature-label" for="answer-email-firma">Firma:</label>
        <textarea id="answer-email-signature" type="text" name="signature" class="wysiwyg">

        </textarea>

        <input id="answer-email-form-send-button" name="submit" class="form-button" type="image" src="/sites/default/files/images/common/sendButton.png"/>
        <a id="answer-email-form-clean-button" class="form-button">Limpiar Formulario</a>

    </div>

</form>


</div>