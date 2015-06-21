<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package om-emi
 */
?>

	</div><!-- #main -->

</div><!-- #page -->
<footer id="footer" role="contentinfo" class="row">
	<div id="copyright" class="container">
		&copy; <?php echo date( 'Y' ); echo '&nbsp;'; echo bloginfo( 'name' ); ?><br>
		Site by <a href="" target="_blank" rel="nofollow"></a> &amp;
		<a href="http://www.zoerooney.com" target="_blank" rel="nofollow">Zoe Rooney Web Development</a>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>