<?php wp_footer();?>
<footer>
        <div class="container">
            <div class="row">
                <div class="col">
                <?php
if (function_exists('the_custom_logo')) {
$logo = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($logo, 'full');
$image_url = $image[0]; ?>
<img src="<?php echo $image_url ?>">

<?php } ?>
                </div>
                <div class="col d-flex justify-content-end">
                <i class="bi1 bi bi-twitter px-1 "></i>
                        <i class="bi1 bi bi-linkedin px-1 "></i>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>