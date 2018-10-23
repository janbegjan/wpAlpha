<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <?php 
              if(is_active_sidebar( 'sidebar_footer' )){
                dynamic_sidebar( 'sidebar_footer' );
              }
            ?>
            </div>
            <div class="col-md-6">
            <?php 
              /**
                  *Adding theme Footer menu
                  */
                  wp_nav_menu(array(
                    'menu'=>'Footer_menu',
                    'menu_id'=>'Footer_menu_container',
                    'menu_class'=>'list-inline text-right',
                  ));
            ?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>