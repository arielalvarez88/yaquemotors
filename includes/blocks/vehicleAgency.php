<?php require dirname(__FILE__) . '/../paths.php'; ?>
<div id="vehicles-agency">

    <div id="vehicles-agency-left-side">
        <div id="vehicles-agency-left-menu">
            <h3>VEHICULOS</h3>
            <ul>
                <li><a  class="filter-category-modifier-button"  value="automovil"><span id="vehicles-agency-auto-icon" class="vehicles-agency-icon"></span> AUTOMOVILES ///</a>
                
                <li><a class="filter-category-modifier-button" value="camion" id="vehicles-agency-camion-icon" ><span class="vehicles-agency-icon"></span>CAMIONES ///</a></li>
                <li><a   class="filter-category-modifier-button" value="camioneta" id="vehicles-agency-camioneta-icon" ><span class="vehicles-agency-icon"></span>CAMIONETAS ///</a>
                <li><a  class="filter-category-modifier-button" value="jeepeta" id="vehicles-agency-jeepeta-icon" ><span class="vehicles-agency-icon"></span>JEEPETAS ///</a>
                <li><a  class="filter-category-modifier-button" value="minibus" id="vehicles-agency-mini-icon" ><span class="vehicles-agency-icon"></span>MINIBUSES ///</a>

            </ul>

            <a class="red-corner-button-with-arrow filter-category-modifier-button" value="todas"  id="vehicles-all-categories">TODAS LAS CATEGORIAS </a>           

            <h3 id="vehicles-agency-brands-header">MARCAS AUTORIZADAS ///</h3>

            <a  class="filter-brand-modifier-button <?php echo !isset($_GET['marca']) || $_GET['marca'] == 'nissan' || $_GET['marca'] == 'todas'? 'selected-brand' : ''; ?>" id="vehicles-agency-nissan-button" value="nissan"   ></a>


            <a  class="filter-brand-modifier-button <?php echo isset($_GET['marca']) && $_GET['marca'] == 'suzuki' ? 'selected-brand' : ''; ?>" id="vehicles-agency-suzuki-button" value="suzuki"  ></a>
            <a  class="filter-brand-modifier-button <?php echo isset($_GET['marca']) && $_GET['marca'] == 'chevrolet' ? 'selected-brand' : ''; ?> " id="vehicles-agency-chevrolet-button"  value="chevrolet" ></a>


            


        </div>

<a class="filter-brand-modifier-button" id="vehicles-agency-all-brands" value="todas" >TODAS LAS MARCAS</a>
        <a id="vehicles-agency-make-appointment"></a>
        <a id="vehicles-agency-parts" href="/tienda-de-repuestos"></a>
    </div>

    <?php require dirname(__FILE__).'/bigVerticalDivisor.php';?>


</div>