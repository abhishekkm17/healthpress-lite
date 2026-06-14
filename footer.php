<footer class="bg-slate-900 text-white mt-20">
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="grid md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-semibold mb-4">
                        <?php bloginfo('name'); ?>
                </h3>
                <p class="text-slate-400">Healthcare and wellness solutions for modern families.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                <?php wp_nav_menu(['theme_location'=>'footer','container'=>false]); ?>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-4">Follow Us</h3>
                <div>
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">LinkedIn</a>
                </div>
            </div>
        </div>
        <div class="border-t border-slate-700 mt-10 pt-6 text-center text-slate-400">
            <p>
                © <?= date('Y') ?>
                <?php bloginfo('name'); ?>
            </p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>