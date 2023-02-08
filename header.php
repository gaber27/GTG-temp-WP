<!DOCTYPE html>
<html <?php language_attributes();   ?>> 
    <head>
        <meta charset="<?php bloginfo('charset') ; ?>" />
        <title> 
        <?php wp_title('|','true','right');  ?>    
        <?php bloginfo('name'); 
        ?> </title>
        <link rel= "pingback" href= "<?php bloginfo('pingback_url');?>"    />

        <?php
        /*his function to insert crucial elements into your document (e.g., scripts, styles, and meta tags)*/
        ?>
        <?php wp_head();  ?>
    </head>
    <body>

                
    <nav class="navbar navbar-righ navbar-expand-lg navbar-light bg-light t">
    <div class="container">
    <a class="navbar-brand " href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php  
    gtg_bootstrap_menu(); ?> 
        </div>
    </div>
    </nav>






