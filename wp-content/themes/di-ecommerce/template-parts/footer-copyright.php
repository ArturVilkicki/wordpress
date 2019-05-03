<div class="container-fluid footer-copyright pdt10 pdb10 clearfix">
	<div class="container">	
		<div class="row mrt10">
		
			<div class="col-md-4 cprtlft_ctmzr">
				<?php echo wp_kses_post( get_theme_mod( 'left_footer_setting', '<p>' . __( 'Site Title, Some rights reserved.', 'di-ecommerce' ) . '</p>' ) ); ?>
			</div>
				
			<div class="col-md-4 alignc-spsl cprtcntr_ctmzr">
				<?php echo wp_kses_post( get_theme_mod( 'center_footer_setting', '<p><a href="#">' . __( 'Terms of Use - Privacy Policy', 'di-ecommerce' ) . '</a></p>' ) ); ?>
			</div>
				
			<div class="col-md-4 alignr-spsl cprtright_ctmzr">
				<?php do_action( 'di_ecommerce_footer_copyright_right_setting_front' ); ?>
			</div>
			
		</div>
	</div>
</div>