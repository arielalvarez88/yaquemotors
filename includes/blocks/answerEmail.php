<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require dirname(__FILE__) . '/../paths.php';
require dirname(__FILE__) . '/../classes/email_helper.php';

require dirname(__FILE__) . '/../classes/tcpdf/tcpdf.php';


if (isset($_POST['client-name'])) {
    $emailer = new Email_helper();

    $html = <<<EOD
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    
    
        <style type="text/css">

    
    #answer-email-template-content {
    background: url("/sites/default/files/images/answerEmail/bigLogo.png") no-repeat scroll 60px 1363px transparent;
    border-left: 24px solid #13182C;
    clear: both;
    font-size: xx-large;
    height: 2406px;
    line-height: 37px;
    padding-left: 400px;
    padding-right: 300px;
    padding-top: 100px;
}

#answer-email-template-footer {
    color: #7A7C7F;
    font-size: 2.5em;
    padding: 104px;
}
#answer-email-template img {
    float: right;
}

#answer-email-template-prices-container {
    height: 80px;
    margin-bottom: 80px;
}

#answer-email label#answer-email-model-greetings-label, #answer-email label#answer-email-message-label
{
    float: none;
}

#answer-email-template {
    background: none repeat scroll 0 0 white;
    width: 2546px;
}

#answer-email-template-client-name
{
    font-weight: bold;
}

#answer-email-template-price-text, #answer-email-template-prices {
    float: left;
    margin-right: 30px;
}

#answer-email-template-date {
    margin-bottom: 60px;
    text-align: right;
}

#answer-email-template-prices p {
    margin-bottom: 0;
}

#answer-email-template-date
{
    text-align: right;
}
#answer-email-template-warning
{
    clear:both;
}
    </style>
    </head>

    <body>
        
       <div id="answer-email-template">
    <img alt="yaque-logo" src="{$paths->webpage}/sites/default/files/images/answerEmail/smallLogo.png"/>
    
    <div id="answer-email-template-content" style=" background: url("/sites/default/files/images/answerEmail/bigLogo.png") no-repeat scroll 60px 1363px transparent;
    border-left: 24px solid #13182C;
    clear: both;
    font-size: xx-large;
    height: 2406px;
    line-height: 37px;
    padding-left: 400px;
    padding-right: 300px;
    padding-top: 100px;">
        <div id="answer-email-template-date">{$_POST['date']}</div>
        <div id="answer-email-template-client-name">
        {$_POST['client-name']}
        </div>
        
        </br>
        {$_POST['greetings']}
        </br>
        {$_POST['message']}

        
        <div id="answer-email-template-prices-container">
            <div id="answer-email-template-price-text">
            <span class="bold">Precio:</span>
        </div>

        <div id="answer-email-template-prices">
            <p><span class="bold">US\${$_POST['us-price']}</span></p>
            <p><span class="bold">DR\${$_POST['dr-price']}</span></p>
        </div>
        </div>
        

        <p id="answer-email-template-warning">
            Nota: Le reiteramos que la venta y cotizaci&oacute;n del veh&iacute;culo ha sido pactada en d&oacute;lares a la tasa
            del d&iacute;a pero, ser&aacute; de exclusiva responsabilidad del comprador asumir cualquier
            diferencia que se produzca a consecuencia de la fluctuaci&oacute;n de la tasa de cambio, al momento del pago total del veh&iacute;culo.
        </p>

    </div>

    <div id="answer-email-template-footer">
        
        <p><span class="bold">T. </span> 809.582.4724</p>
        <p><span class="bold">F. </span> 809.241.1400 </p>

        <p>Ave. 27 Febrero No. 16,</p>
        <p>Apartado 526, Santiago,</p>
        <p>Rep&uacute;blica Dominicana</p>

        <p>www.elyaquemotors.com</p>

    </div>
    </body>
</html>
EOD;

            
$success = mail($_POST['client-email'], "Respuesta Cotización", "hola");


if($success)
{
    echo '<h2 class="info-message">Email enviado con exito.</h2>';
}



    
}
?>


<h2>
    FORMULARIO DE CITAS
</h2>




<form id="answer-email-wrapper" method="post" action="/responder-email">
    <div id="answer-email">

        
        <label for="answer-email-client-name">Email del cliente:</label>
        <input id="answer-email-client-email" type="text" name="client-email"/>
        
        
        <label for="answer-email-date">Fecha:</label>
        <input id="answer-email-date" type="text" name="date"/>

        <label for="answer-email-client-name">Nombre del cliente:</label>
        <input id="answer-email-client-name" type="text" name="client-name"/>

        <label for="answer-email-greetings" id="answer-email-model-greetings-label">Saludo incial:</label>
        <textarea id="answer-email-model-greetings" type="text" name="greetings" class="wysiwyg"></textarea>


        <label for="answer-email-model">Modelo:</label>
        <input id="answer-email-model" type="text" name="model"/>

        <label id="answer-email-message-label" for="answer-email-message">Mensaje:</label>
        <textarea id="answer-email-message" name="message" class="wysiwyg"></textarea>

        <label for="answer-email-dr-price">Precio RD$:</label>
        <input id="answer-email-dr-price" type="text" name="dr-price"/>

        <label for="answer-email-us-price">Precio US$:</label>
        <input id="answer-email-us-price" type="text" name="us-price"/>

        <label for="answer-email-firma">Firma:</label>
        <input id="answer-email-us-price" type="text" name="signature"/>

        <input id="answer-email-form-send-button" name="submit" class="form-button" type="image" src="/sites/default/files/images/common/sendButton.png"/>
        <a id="answer-email-form-clean-button" class="form-button">Limpiar Formulario</a>

    </div>

</form>


</div>