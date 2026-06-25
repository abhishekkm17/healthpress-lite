<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<header class="bg-white shadow-md sticky top-0 z-50">
    <nav class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">

            <!-- Logo -->
            <div class="uppercase text-2xl font-bold text-blue-600">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                 bloginfo('name');
                }
                ?>
            </div>

            <!-- Desktop Menu -->
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'hidden md:flex items-center space-x-8',
                'fallback_cb'    => false,
            ]);
            ?>

            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="#" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">
                    Appointment
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button id="menu-btn" class="md:hidden text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-7 w-7"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 border-t pt-4">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'flex flex-col space-y-4',
                'fallback_cb'    => false,
            ]);
            ?>
        </div>
    </nav>
</header>