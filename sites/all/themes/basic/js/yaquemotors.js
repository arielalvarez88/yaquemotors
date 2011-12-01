initializeSlideshows = function()
    {
        var slideshowSelectors = {
            frontPageSlideshow: {
                selector: '#front-page-slideshow',
                options:{
                    fx:     'fade', 
                    speed:  'fast', 
                    timeout: 3000,
                    pager: '#front-page-slideshow-pager',
                    pagerAnchorBuilder: function(idx, slide){
                        return '#front-page-slideshow-pager span:eq('+idx+')';
                    },
                    cleartype: true,
                    cleartypeNoBg: true,
                    pagerEvent:    'click'                   
                }            
            },
            news: {
                selector: '#news-container',
                options:{
                    fx:     'scrollRight', 
                    speed:  'fast', 
                    timeout: 3000,                 
                    cleartype: true,
                    cleartypeNoBg: true,
                    pagerEvent:    'click'                   
                }            
            },        
            slideshow: {
                selector: '#slideshow',
                options:{
                    fx:     'scrollUp', 
                    speed:  'fast', 
                    timeout: 0,                 
                    cleartype: true,
                    cleartypeNoBg: true,
                    pagerEvent:    'click',
                    pager: '#slideshow-pager',
                    pagerAnchorBuilder: function(idx, slide){
                        return '#slideshow-pager img:eq('+idx+')';
                    }
                }            
            },
        
            workshopSlideshow: {
                selector: '#workshop-services-slideshow',
                options:{
                    fx:     'scrollUp', 
                    speed:  'fast', 
                    timeout: 20000,                 
                    cleartype: true,
                    cleartypeNoBg: true,
                    pagerEvent:    'click',
                    pager: '#workshop-sevices-slideshow-pager',
                    pagerAnchorBuilder: function(idx, slide){
                        return '#workshop-sevices-slideshow-pager span:eq('+idx+')';
                    }
                }            
            },
            vehicleSlideshow: {
                selector: '#vehicle-slideshow',
                options:{
                    fx:     'scrollUp', 
                    speed:  'fast', 
                    timeout: 0,                 
                    cleartype: true,
                    cleartypeNoBg: true,
                    pagerEvent:    'click',
                    pager: '#vehicle-slideshow-pager',
                    pagerAnchorBuilder: function(idx, slide){
                        return '.vehicle-slideshow-pager-item:eq('+idx+')';
                    }
                }            
            }
        };
    
        
        for(key in slideshowSelectors)
        {
            var slideshowData = slideshowSelectors[key];
            var slideshow = $(slideshowData.selector);
   
            if(slideshow.length < 1)
                continue;              

            slideshow.cycle(slideshowData.options);
        }

        
    };


initializeMap = function(){
    if($('#contacts-map').length > 0)
    {
        var latlng = new google.maps.LatLng(19.46163, -70.710167);
        var myOptions = {
            zoom: 15,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("contacts-map"), myOptions);
    
        var marker = new google.maps.Marker({
            position: latlng, 
            map: map, 
            title:"El Yaque Motors"
        });   
    }

 

          
};


setSimpleFormBehavior = function(formSelector,sendButtonSelector,cleanButtonSelector,processingScriptUrl)
{

    
    
    $(cleanButtonSelector).click(function(event){
        event.preventDefault();
        simpleFormCleaner(formSelector);
            
    });
    
    var sendButton = $(sendButtonSelector);
    sendButton.unbind("click");
    sendButton.click(function(event){
        event.preventDefault();
        var formDataToJason = new SimpleFormDataToJson(formSelector);
        var formInfoInJason = formDataToJason.getDataInJason();
        simpleFormSender(processingScriptUrl,formInfoInJason,simpleFormReciever);   
    });
          
};

SimpleFormDataToJson = function(formSelector)
{
    this.form = $(formSelector);
    this.inputsAndTextAreas = this.form.find("input, textarea");
    
    this.getDataInJason = function(){
        var jsonData = {};
        for(i=0; i<this.inputsAndTextAreas.length; i++)
        {
            var jqueryInputsAndTextArea = $(this.inputsAndTextAreas[i]);
            
            jsonData[jqueryInputsAndTextArea.attr('id')] = jqueryInputsAndTextArea.val();
        }
        return jsonData;
    };
};




simpleFormSender = function(scriptUrl,data,callback)
{
   
    $.post(scriptUrl,data,callback,'json');
    
    
};


simpleFormReciever = function (data)
{
    if(data.success)
        alert('Su información fue enviada con éxito');
    else
        alert('Por favor intentelo más tarde');
    
    $.fancybox.close();
};

simpleFormCleaner = function (formSelector)
{
    var form = $(formSelector);
    var inputsAndTextAreas = form.find('input, textarea');
    
    for(i=0; i<inputsAndTextAreas.length; i++)
    {
  
        $(inputsAndTextAreas[i]).val('');
    }
}

initializeAjaxForms = function()
{
    var simpleForms = {
        
        partsStoreForm : {
            formSelector : '#parts-store-form',
            cleanButtonSelector : "#part-store-form-clean",
            sendButtonSelector : '#part-store-form-send',            
            processingSriptUrl: '/includes/ajax/partFormProcessor.php'
        },
        contactsForm:  {
            formSelector : '#contacts-form',
            cleanButtonSelector : "#contacts-form-clean-button",
            sendButtonSelector : '#contacts-form-send-button',            
            processingSriptUrl: '/includes/ajax/contactsFormProcessor.php'
        },
        appointmentForm: {
            formSelector : '#make-appointment-text-container',
            cleanButtonSelector : "#make-appointment-clean-button",
            sendButtonSelector : '#make-appointment-send-button',            
            processingSriptUrl: '/includes/ajax/appointmentProcessor.php'
        },
        cotizarVehiculo: {
            formSelector : '#vehicle-cotizar-overlay-form',
            cleanButtonSelector : "#doesnt-exist",
            sendButtonSelector : '#vehiculo-cotizar-overlay-form-send-button',            
            processingSriptUrl: '/includes/ajax/cotizarVehiculoFormProcessor.php'
                      

        }
    };
    
   
     
    for(key in simpleForms)
    {
        var formInfo = simpleForms[key];
     
        setSimpleFormBehavior(formInfo.formSelector,formInfo.sendButtonSelector,formInfo.cleanButtonSelector,formInfo.processingSriptUrl);
    }
    
    
};

Filter = function(brandModifierButtonsSelector,categoryModifierButtonsSelector)
{
    var initialBrand = $.getUrlVar('marca');
    var initialCategory = $.getUrlVar('categoria');
  
    this.brand = initialBrand ? initialBrand  : 'nissan';  
    this.category = initialCategory ? initialCategory : 'automovil';
    var agencyFilter = this;
  
    $(brandModifierButtonsSelector).click(function(){
        agencyFilter.brand = $(this).attr('value');
        window.location.href = '/agencia-de-vehiculos?' + 'marca='+ agencyFilter.brand + '&categoria='+ agencyFilter.category;
    });
  
    $(categoryModifierButtonsSelector).click(function(){
      
        agencyFilter.category = $(this).attr('value');
        window.location.href = '/agencia-de-vehiculos?' + 'marca='+ agencyFilter.brand + '&categoria='+ agencyFilter.category;
    });
  
  
  
};



initializFilter = function (){
  
    var vehiclesAgencyFilters = new Filter('.filter-brand-modifier-button','.filter-category-modifier-button');
};

maintenanceFinderFindButtonOnClick = function (){
    
    };


maintenanceFinderBrandOnClick = function (event){
    var button = $('#maintenance-finder-brand');
    $('.maintenance-finder-model').removeClass('visible');
    $('.maintenance-finder-model').addClass('hidden');
    console.log($('#maintenance-finder-model-' + button.val()));
    $('#maintenance-finder-model-' + button.val()).removeClass('hidden').addClass('visible');
    
};


maintenanceFinderFindButtonOnClick = function()
{
    var brand = $('#maintenance-finder-brand').val();
    var model = $('.maintenance-finder-model').filter('.visible').val();
    window.location.href = '/tarifas-de-mantenimiento?marca='  + brand + '&modelo=' + model;
    
}

initializeCalendarsUi = function(){
    var dateInput = $('#appointment-date');
    
    if(dateInput.length >= 1)
        dateInput.datetimepicker({
            timeText:'Hora: ',
            hourText:'Hora',
            minuteText:'Minuto',
            ampm:true, 
            hourMin: 8, 
            hourMax: 16, 
            monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
            dateNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'], 
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'], 
            currentText: 'Ahora', 
            closeText: 'Listo'
        });
    
};
initializeOnClickEvents = function(){
    
   $("#maintenance-finder-brand").change(maintenanceFinderBrandOnClick);
    $.singletonSlider('.contacts-slider-title','.contacts-slider-menu');
    $.singletonSlider('.offer-teaser-image','.offer-teaser-text');
    
    
  $('#vehicle-upper-menu-cotizar').fancybox({        
        type: 'inline',
        margin: 0,
        padding: 0
    });
    
    $('.offer-teaser a').fancybox({        
        type: 'image',
        margin: 0,
        padding: 0
    });
        
    
    
    var buttons = {
        maintenanceFinderFindButton:{
            selector: "#maintenance-finder-find-button",
            onClick: maintenanceFinderFindButtonOnClick
        },
                
        vehiclePrint: {
            selector: "#vehicle-upper-menu-imprimir",
            onClick: printVehiclePage
        },
        cotizarButtonInVehicle: {
            selector: "#vehicle-upper-menu-cotizar",
            onClick: showCotizarOverlay
        }
        
    };
    
    for(button in buttons)
    {
        $(buttons[button].selector).click(buttons[button].onClick);
    }
}


showCotizarOverlay = function()
{
      
}
printVehiclePage = function(){
    window.print();
};


extendJquery = function (){
    
    $.extend({
        getUrlVars: function(){
            var vars = [], hash;
            var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
            for(var i = 0; i < hashes.length; i++)
            {
                hash = hashes[i].split('=');
                vars.push(hash[0]);
                vars[hash[0]] = hash[1];
            }
            return vars;
        },
        getUrlVar: function(name){
            return $.getUrlVars()[name];
        }
    });
    
    
    $.extend(
    {
        singletonSlider: function(titlesSelectors,siblingSelectorToSlide)
        {
            
               var titles = $(titlesSelectors);
               var siblingsToSlide = $(siblingSelectorToSlide);
               
                titles.siblings(siblingSelectorToSlide + ':nth(0)').show();
                titles.click(function(){
           
           
           
                    siblingsToSlide.slideUp("slow");
                        
                    var siblings = $(this).siblings(siblingSelectorToSlide);
                    if(!siblings.is(":visible"))
                        siblings.slideDown();
                
                });
       
            
        }
    }
       
    );
    
    
    
};
    



roundCorners = function()
{
    var selectors = ['#maintenance-finder'];
    var i = 0;
    for(i=0; i<selectors.length; i++)
        $(selectors[i]).corner("tr bl bt 10px");
}

$(document).ready(function(){
    
    
    extendJquery();
    initializeSlideshows();
    initializeOnClickEvents();
    initializeMap();
    initializeAjaxForms();
    initializeCalendarsUi();
    initializFilter();
    
    roundCorners();
    
});