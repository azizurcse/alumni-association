			</div> <!--#main-->
		</div> <!--#wrapper-->
		<footer id="footer">
			<div class="footer_wrapper">
				<?php get_template_part('partials/footers/footer', 'top'); ?>
				<?php get_template_part('partials/footers/footer', 'bottom'); ?>
				<?php get_template_part('partials/footers/copyright'); ?>
			</div>
		</footer>
		
		<?php if(is_singular('events')): ?>
			<?php get_template_part( 'partials/event', 'form' ); ?>
		<?php endif; ?>
		
		<!-- Searchform -->
		<?php get_template_part('partials/searchform'); ?>
		
		<script type="text/javascript">
			var cf7_custom_image = '<?php echo esc_url( get_stylesheet_directory_uri() )  ?>/assets/img/';


		function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}
		</script>
		
		<?php
			global $wp_customize;
			if( is_stm() && ! $wp_customize ){
				get_template_part( 'partials/frontend_customizer' );
			}
		?>
		
	<?php wp_footer(); ?>
	</body>
</html>