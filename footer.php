<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package tatami-code
 */

?>

	<footer class="blog-footer">
      <div class="container">
        <p class="tc-copyright">© tatami-code some rights reserved.</p>
        <p class="tc-backtop"><a href="#">Back to top</a></p>
      </div>
      <div id="tc-foot-bar"></div>
    </footer>

<?php wp_footer(); ?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php echo esc_url ( get_stylesheet_directory_uri() ); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo esc_url ( get_stylesheet_directory_uri() ); ?>/tatamistrap/javascripts/bootstrap.js"></script>
</body>
</html>
