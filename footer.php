<footer class="bg-gray-900 text-white pt-14 pb-8">
    <div class="container mx-auto px-6">

        <!-- Footer Top -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- About -->
            <div>
                <h3 class="text-2xl font-bold mb-4 uppercase">
                    <?php echo esc_html(get_bloginfo('name')); ?>
                </h3>

                <p class="text-gray-400 leading-relaxed">
                    <?php echo esc_html(get_theme_mod(
                        'footer_about_text',
                        'Providing quality healthcare solutions with trusted doctors, advanced treatments, and compassionate care for your family.'
                    )); ?>
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Quick Links</h4>

                <?php
                wp_nav_menu([
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'space-y-3 text-gray-400',
                    'fallback_cb'    => false,
                ]);
                ?>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Contact</h4>

                <ul class="space-y-3 text-gray-400">
                    <li>
                        📍 <?php echo esc_html(get_theme_mod('footer_address', 'Bengaluru, India')); ?>
                    </li>

                    <li>
                        📞 <?php echo esc_html(get_theme_mod('footer_phone', '+91 98765 43210')); ?>
                    </li>

                    <li>
                        ✉ <?php echo esc_html(get_theme_mod('footer_email', 'info@healthpress.com')); ?>
                    </li>
                </ul>
            </div>

            <!-- Social -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Follow Us</h4>

                <div class="flex gap-4">
                    <a href="<?php echo esc_url(get_theme_mod('facebook_link', '#')); ?>" target="_blank"
                        class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-full hover:bg-blue-600 transition">
                        FB
                    </a>

                    <a href="<?php echo esc_url(get_theme_mod('twitter_link', '#')); ?>" target="_blank"
                        class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-full hover:bg-sky-500 transition">
                        TW
                    </a>

                    <a href="<?php echo esc_url(get_theme_mod('instagram_link', '#')); ?>" target="_blank"
                        class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-full hover:bg-pink-600 transition">
                        IG
                    </a>

                    <a href="<?php echo esc_url(get_theme_mod('linkedin_link', '#')); ?>" target="_blank"
                        class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-full hover:bg-blue-700 transition">
                        IN
                    </a>
                </div>
            </div>

        </div>

        <!-- Divider -->
        <div class="border-t border-gray-700 my-8"></div>

        <!-- Bottom -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-gray-400 text-sm">

            <p>
                © <?php echo date('Y'); ?>
                <?php echo esc_html(get_bloginfo('name')); ?>.
                All Rights Reserved.
            </p>

            <p>
                <?php echo esc_html(get_theme_mod('footer_credit', 'Designed by HealthPress')); ?>
            </p>

        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
