<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <?php
    $footerMenus = array();
    $footerMenus[] = array("INICIO" => "http://www.google.com", "NOSOTROS" => "http://www.google.com", "VEHÍCULOS" => "http://www.google.com", "POST-VENTA" => "http://www.google.com", "CONTACTOS" => "http://www.google.com");
    $footerMenus[] = array("TALLER DE SERVICIOS" => "http://www.google.com", "REPUESTOS" => "http://www.google.com", "TARIFAS DE MANTENIMIENTO" => "http://www.google.com", "CITAS" => "http://www.google.com", "FINANCIAMIENTO" => "http://www.google.com");
    ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
    <head>

        <title><?php print $head_title; ?></title>
        <script type="text/javascript" src="http://use.typekit.com/fyz8gsz.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <?php print $head; ?>
        <?php print $styles; ?>
        <!--[if lte IE 6]><style type="text/css" media="all">@import "<?php print $base_path . path_to_theme() ?>/css/ie6.css"</style><![endif]-->
        <!--[if IE 7]><style type="text/css" media="all">@import "<?php print $base_path . path_to_theme() ?>/css/ie7.css"</style><![endif]-->
        <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <?php print $scripts; ?>
    </head>

    <body class="<?php print $body_classes; ?> tk-purista-web">
        <div id="skip"><a href="#content"><?php print t('Skip to Content'); ?></a> <a href="#navigation"><?php print t('Skip to Navigation'); ?></a></div>  
        <div id="top-blue-bar"></div>
        <div id="wrapper">
        <div id="page">

            <!-- ______________________ HEADER _______________________ -->
            <div id="pre-header">
                
                
                <a href="/citas" id="appointment-text">Hacer una cita <img id="top-calendar" alt="foto-calendario" src="/<?php echo file_directory_path(); ?>/images/theme/topCalendar.png"/></a>

            </div>
            <div id="header">



                <?php if (!empty($logo)): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                    </a>
                <?php endif; ?>

                <?php if (!empty($primary_links) || !empty($secondary_links)): ?>
                    <div id="menu" class="menu <?php if (!empty($primary_links)) {
                        print "with-main-menu";
                    } if (!empty($secondary_links)) {
                        print " with-sub-menu";
                    } ?>">
                   
                    
                    
                    <?php if($header):?>
                <?php print $header;?>
                <?php endif;?>
                    </div> <!-- /menu -->
<?php endif; ?>
                    
                

<?php // Uncomment to add the search box.// print $search_box;  ?>

            </div> <!-- /header -->

            <!-- ______________________ MAIN _______________________ -->

            <div id="main" class="clearfix">

                <div id="content">
                    <div id="content-inner" class="inner column center">

                        <?php if ($content_top): ?>
                            <div id="content-top">
                                <?php print $content_top; ?>
                            </div> <!-- /#content-top -->
                         <?php endif; ?>
                            
                            <?php if($left):?>
                                <div id="left-side">
                                    <?php echo $left;?>
                                </div>
                            <?php endif;?>
                            
                            <?php if($right):?>
                                <div id="right-side">
                                    <?php echo $right;?>
                                </div>
                            <?php endif;?>
                            
                            
                            <div id="drupal-content">
                                
                                <?php if(in_array("authenticated user", array_values($user->roles))):?>
                            <?php if ($breadcrumb || $title || $mission || $messages || $help || $tabs): ?>
                            <div id="content-header">

                                <?php print $breadcrumb; ?>

                                <?php if ($title): ?>
                                    <h1 class="title"><?php print $title; ?></h1>
                                <?php endif; ?>

                                <?php if ($mission): ?>
                                    <div id="mission"><?php print $mission; ?></div>
                                <?php endif; ?>

    <?php print $messages; ?>

                            <?php print $help; ?> 

                                <?php if ($tabs): ?>
                                    <div class="tabs"><?php print $tabs; ?></div>
    <?php endif; ?>

                            </div> <!-- /#content-header -->
                        <?php endif; ?>
                        

    <?php print $feed_icons; ?>
                            <?php endif;?>
                        <div id="content-area">
                            <?php print $content; ?>
                        </div> <!-- /#content-area -->
                        

                        </div>

<?php if ($content_bottom): ?>
                            <div id="content-bottom">
    <?php print $content_bottom; ?>
                            </div><!-- /#content-bottom -->
                <?php endif; ?>

                    </div>
                </div> <!-- /content-inner /content -->



                <?php if ($leftSideBar): ?>
                    <div id="sidebar-first" class="column sidebar first">
                        <div id="sidebar-first-inner" class="inner">
                            <?php print $leftSideBar; ?>
                        </div>
                    </div>
                <?php endif; ?> <!-- /sidebar-left -->

<?php if ($rightSideBar): ?>
                    <div id="sidebar-second" class="column sidebar second">
                        <div id="sidebar-second-inner" class="inner">
    <?php print $rightSideBar; ?>
                        </div>
                    </div>
<?php endif; ?> <!-- /sidebar-second -->

            </div> <!-- /main -->

            <!-- ______________________ FOOTER _______________________ -->

            <div id="footer">
                <img id="footer-logo" src="/<?php echo file_directory_path(); ?>/images/theme/footer/bigLogo.png"/>
                <img class="footer-divisor" src="/<?php echo file_directory_path(); ?>/images/theme/footer/footerDivisor.png"/>
                <?php foreach($footerMenus as $footerMenu): ?>
                <ul class="footer-menu">              
                    <?php foreach ($footerMenu as $menuItemText => $menuItemLink): ?>
                        <li>
                            <a href="<?php echo $menuItemLink; ?>"><?php echo $menuItemText; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <img class="footer-divisor" src="/<?php echo file_directory_path(); ?>/images/theme/footer/footerDivisor.png"/>
                <?php endforeach; ?>
                

                <?php if (!empty($footer_message) || !empty($footer_block)): ?>

                            <?php print $footer_message; ?>
                    <?php print $footer_block; ?>

                <?php endif; ?>
                <div id="footer-address">
                    <h3 id="footer-contactos-header">Contactanos</h3>
                    <p class="no-margin"><span class="bold">T.</span> 809.582.4724</p>
                    <p class="footer-spaced-paragraph"><span class="bold">F.</span> 809.582.4724</p>
                    
                    <p class="no-margin">Av. 27 de Febrero No.16, Santiago</p>
                    <p class="footer-spaced-paragraph">Rep&uacute;blica Dominicana</p>
                    
                    <p class="no-margin">HORARIO LABORAL</p>
                    <p class="no-margin">LUNES A VIERNES: 8:00 AM A 6:00 PM</p>
                    <p class="no-margin">S&Aacute;BADOS: 8:00 AM A 12:00 PM</p>
                    
                </div>
                <p id="footer-copyright">Copyright 2011 El Yaque Motors Todos los derechos reservados.</p>
            </div> <!-- /footer -->
        </div> <!-- /page -->
    </div> <!-- /wrapper-->
<?php print $closure; ?>
    </body>
</html>