<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<header class="sticky top-0 bg-white shadow">
    <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div>
                    <?php
                        if(has_custom_logo()){
                            the_custom_logo();
                        }else{
                            bloginfo('name');
                        }
                    
                    ?>
                </div>
                <nav>
                    <?php
                        wp_nav_menu(['theme_location'=>'primary']);
                    ?>
                </nav>
                <button class="md:hidden">☰</button>
            </div>
    </div>
</header>