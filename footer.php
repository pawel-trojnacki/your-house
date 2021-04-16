<?php

/**
 * Theme footer
 *
 * @package Your_House
 */


$year = date('Y');

?>

</main>
<footer class="site-footer">
    <div class="footer-inner">
        <div class="logo-wrapper">
            <img src="<?php echo YOUR_HOUSE_LOGO_URI ?>" alt="your house">
        </div>
        <?php dynamic_sidebar('footer_area') ?>
        <div class="site-info">
            <p class="footer-text">&copy <?php echo $year ?> Your House</p>
            <p class="footer-text">Created by: Paweł Trojnacki</p>
        </div>
    </div>
</footer>

</div><!-- barba container -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>