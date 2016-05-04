<?php
/**
 * Child themes template
 */
?>
<div id="child_themes" class="kyma-lite-tab-pane">

	<?php
		$current_theme = wp_get_theme();
	?>

	<div class="kyma-tab-pane-center">

		<h1><?php esc_html_e( 'Some of our Popular Products', 'kyma' ); ?></h1>

	</div>


	<div class="kyma-tab-pane-half kyma-tab-pane-first-half">

		<!-- Kyma Advanced -->
		<div class="kyma-lite-child-theme-container">
			<div class="kyma-lite-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/welcome-screen/img/KymaAdvanced.png'; ?>" alt="<?php esc_html_e( 'Kyma Advanced Theme', 'kyma' ); ?>" />
				<div class="kyma-lite-child-theme-description">
					<h2><?php esc_html_e( 'Kyma Advanced', 'kyma' ); ?></h2>
					<p><?php esc_html_e( 'Kyma Advanced is a modern responsive WordPress Theme. It\'s perfect for web agencies, digital studios, corporate, product showcase, personal and business portfolio.', 'kyma' ); ?></p>
				</div>
			</div>
			<div class="kyma-lite-child-theme-details">
					<div class="theme-details">
						<span class="theme-name"><?php esc_html_e('Kyma Advanced','kyma'); ?></span>
						<a href="http://www.webhuntinfotech.com/webhunt_theme/kyma-advanced/" class="button button-primary install right"><?php esc_html_e( 'Get now', 'kyma' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://demo.webhuntinfotech.com/demo/#kyma_advanced"><?php esc_html_e( 'Live Preview','kyma'); ?></a>
						<div class="kyma-lite-clear"></div>
					</div>
			</div>
		</div>
		<hr />

		<!-- Kyma -->
		<div class="kyma-lite-child-theme-container">
			<div class="kyma-lite-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/welcome-screen/img/matrix.png'; ?>" alt="<?php esc_html_e( 'Matrix Premium Theme', 'kyma' ); ?>" />
				<div class="kyma-lite-child-theme-description">
					<h2><?php esc_html_e( 'Matrix', 'kyma' ); ?></h2>
					<p><?php esc_html_e( 'Matrix is a beautiful Responsive WordPress theme, with a colorful and playful design, nice animations, full-screen layout and Boxed layout. Themes comes with redux Option panel means it`s easy to use and easy to customize.', 'kyma' ); ?></p>
				</div>
			</div>
			<div class="kyma-lite-child-theme-details">
					<div class="theme-details">
						<span class="theme-name">Matrix Premium</span>
						<a href="http://www.webhuntinfotech.com/webhunt_theme/matrix/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'kyma' ), '<span class="screen-reader-text">Matrix</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://demo.webhuntinfotech.com/demo/#matrix"><?php esc_html_e( 'Live Preview','kyma'); ?></a>
						<div class="kyma-lite-clear"></div>
					</div>
			</div>
		</div>
		
	</div>

	<div class="kyma-tab-pane-half">
		<!-- Kyma Basic -->
		<div class="kyma-lite-child-theme-container">
			<div class="kyma-lite-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/welcome-screen/img/KymaBasic.png'; ?>" alt="<?php esc_html_e( 'Kyma Basic', 'kyma' ); ?>" />
				<div class="kyma-lite-child-theme-description">
					<h2><?php esc_html_e( 'Kyma Basic', 'kyma' ); ?></h2>
					<p><?php esc_html_e( 'Kyma Basic is a fully responsive & Multipurpose WordPress theme, with a friendly and colorful design. It comes with a full-screen layout, 2 types of slider and unlimited color schemes. It can be used web agencies, digital studios, corporate, product showcase, personal and business portfolio.', 'kyma' ); ?></p>
				</div>
			</div>
			<div class="kyma-lite-child-theme-details">
					<div class="theme-details">
						<span class="theme-name">Kyma Basic</span>
						<a href="http://www.webhuntinfotech.com/webhunt_theme/kyma-basic/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'kyma' ), '<span class="screen-reader-text">kyma Basic</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://demo.webhuntinfotech.com/demo/#kyma_basic"><?php esc_html_e( 'Live Preview','kyma'); ?></a>
						<div class="kyma-lite-clear"></div>
					</div>
			</div>
		</div>
		<hr />

		<!-- PVGMP -->
		<div class="kyma-lite-child-theme-container">
			<div class="kyma-lite-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/welcome-screen/img/PVGMP.png'; ?>" alt="<?php esc_html_e( 'Photo Video Gallery Master PRO', 'kyma' ); ?>" />
				<div class="kyma-lite-child-theme-description">
					<h2><?php esc_html_e( 'Photo Video Gallery Master PRO', 'kyma' ); ?></h2>
					<p><?php esc_html_e( 'Photo Video Gallery Master PRO (PVGMP) is a plugin to show your works, photos, Portfolios, videos, Galleries beautifully.', 'kyma' ); ?></p>
				</div>
			</div>
			<div class="kyma-lite-child-theme-details">
					<div class="theme-details">
						<span class="theme-name">PVGMP RPO</span>
						<a href="http://webhuntinfotech.com/webhunt_plugin/photo-video-gallery-master-pro/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'kyma' ), '<span class="screen-reader-text">kyma Basic</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://demo.webhuntinfotech.com/demo/#pvgmp"><?php esc_html_e( 'Live Preview','kyma'); ?></a>
						<div class="kyma-lite-clear"></div>
					</div>
			</div>
		</div>

	</div>

</div>
