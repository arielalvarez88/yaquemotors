initializeSlideshows = function()
    {
        var slideshowSelectors = {
            frontPageSlideshow: {
                selector: '#front-page-slideshow',
                options:{
                    fx:     'fade', 
                    speed:  'fast', 
                    timeout: 3000, 
                    next: '#front-page-slideshow-next',
                    prev: '#front-page-slideshow-previous',
                    cleartype: true,
                    cleartypeNoBg: true,
                    pagerEvent:    'click'                   
                }            
            },
            news: {
                selector: '#news-container',
                options:{
                    fx:     'scrollUp', 
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
                    timeout: 3000,                 
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
                selector: '#vehicle-shlideshow',
                options:{
                    fx:     'scrollUp', 
                    speed:  'fast', 
                    timeout: 3000,                 
                    cleartype: true,
                    cleartypeNoBg: true,
                    pagerEvent:    'click',
                    pager: '#vehicle-slideshow-pager',
                    pagerAnchorBuilder: function(idx, slide){
                        return '#workshop-sevices-slideshow-pager span:eq('+idx+')';
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

    
    
    $(cleanButtonSelector).click(function(){
        simpleFormCleaner(formSelector);
            
    });
    $(sendButtonSelector).click(function(){
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
  this.category = initialCategory ? initialCategory : 'todas';
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
};
    

$(document).ready(function(){
    
    
    extendJquery();
    initializeSlideshows();
    initializeMap();
    initializeAjaxForms();
    initializFilter();
  
        

});