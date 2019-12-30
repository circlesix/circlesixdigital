<?php
/**
 * Theme footer file override
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<p class="imprint">&copy; <?php echo date("Y"); ?> Mike Stacey</p>
</div><!-- .site-info -->
