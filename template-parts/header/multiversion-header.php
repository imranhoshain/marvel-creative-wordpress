<?php 
global $marvel_creative;
$stacky_menu = $marvel_creative ['stacky_menu'];
 ?>
 <!--menu area start-->
    <div id="<?php if ($stacky_menu == 1){ echo"menu-area";} ?>" class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                       <?php
                            get_template_part( 'template-parts/header/logo');
                        ?>
                    </div>                    
                     <?php
                       wp_nav_menu( array(
                            'menu'              => 'Main Menu',
                            'theme_location'    => 'main_menu',
                            'depth'             => 3,
                            'container'         => 'ul',                            
                            'menu_class'        => 'main-menu',
                            'menu_id'           => 'navmenu',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                        );
                    ?>         
                </div>
            </div>
        </div>
    </div>
    <!--menu area End-->