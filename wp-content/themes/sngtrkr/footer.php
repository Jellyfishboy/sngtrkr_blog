	</div>
<footer role="contentinfo">
</footer>
<?php wp_footer(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/jquery-1.9.0.js"%3E%3C/script%3E'))</script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/application.js"></script>
<?php if ( is_singular() ) wp_print_scripts( 'comment-reply' ); ?>
</body>
</html>