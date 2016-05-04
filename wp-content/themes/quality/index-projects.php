<?php $quality_pro_options=theme_data_setup(); 
$current_options = wp_parse_args(  get_option( 'quality_pro_options', array() ), $quality_pro_options );  ?>
<div class="qua_portfolio_carusel">
	<div class="container">
		<div class="qua_port_title">
		<?php if($current_options['project_heading_one']) { ?>
			<h1><?php echo $current_options['project_heading_one']; ?></h1>
			<?php } ?>
		<?php if($current_options['project_tagline']) { ?>
		<p><?php echo $current_options['project_tagline']; ?></p>
		<?php } ?>	
		<div class="qua-separator" id=""></div>
		</div>
		<div class="row home_portfolio_row">
			<div class="col-md-3 col-sm-6 qua_col_padding">
				<?php if($current_options['project_one_thumb']) { ?>
				<div class="qua_portfolio_image">
					<img  src="<?php echo $current_options['project_one_thumb']; ?>" class="img-responsive" alt="thumb one">
					<div class="qua_home_portfolio_showcase_overlay">
						<div class="qua_home_portfolio_showcase_overlay_inner">
							<div class="qua_home_portfolio_showcase_icons">
								<a href="<?php echo $current_options['project_one_thumb']; ?>" data-lightbox="image" title="Time to raise your voice" class="hover_thumb"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
				<?php }
				if($current_options['project_one_title']) { ?>
				<div class="qua_home_portfolio_caption">
					<a href="#"><?php echo $current_options['project_one_title']; ?></a>			
				</div>
				<?php } ?>
			</div>
			<div class="col-md-3 col-sm-6 qua_col_padding">
				<?php if($current_options['project_two_thumb']) { ?>
				<div class="qua_portfolio_image">
					<img  src="<?php echo $current_options['project_two_thumb']; ?>" class="img-responsive" alt="thumb one">
					<div class="qua_home_portfolio_showcase_overlay">
						<div class="qua_home_portfolio_showcase_overlay_inner">
							<div class="qua_home_portfolio_showcase_icons">
								<a href="<?php echo $current_options['project_two_thumb']; ?>" data-lightbox="image" title="Time to raise your voice" class="hover_thumb"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
				<?php }
				if($current_options['project_two_title']) { ?>
				<div class="qua_home_portfolio_caption">
					<a href="#"><?php echo $current_options['project_two_title']; ?></a>			
				</div>
				<?php } ?>
			</div>
			<div class="col-md-3 col-sm-6 qua_col_padding">
				<?php if($current_options['project_three_thumb']) { ?>
				<div class="qua_portfolio_image">
					<img  src="<?php echo $current_options['project_three_thumb']; ?>" class="img-responsive" alt="thumb one">
					<div class="qua_home_portfolio_showcase_overlay">
						<div class="qua_home_portfolio_showcase_overlay_inner">
							<div class="qua_home_portfolio_showcase_icons">
								<a href="<?php echo $current_options['project_three_thumb']; ?>" data-lightbox="image" title="Time to raise your voice" class="hover_thumb"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
				<?php }
				if($current_options['project_three_title']) { ?>
				<div class="qua_home_portfolio_caption">
					<a href="#"><?php echo $current_options['project_three_title']; ?></a>			
				</div>
				<?php } ?>
			</div>
			<div class="col-md-3 col-sm-6 qua_col_padding">
				<?php if($current_options['project_four_thumb']) { ?>
				<div class="qua_portfolio_image">
					<img  src="<?php echo $current_options['project_four_thumb']; ?>" class="img-responsive" alt="thumb one">
					<div class="qua_home_portfolio_showcase_overlay">
						<div class="qua_home_portfolio_showcase_overlay_inner">
							<div class="qua_home_portfolio_showcase_icons">
								<a href="<?php echo $current_options['project_four_thumb']; ?>" data-lightbox="image" title="Time to raise your voice" class="hover_thumb"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
				<?php }
				if($current_options['project_four_title']) { ?>
				<div class="qua_home_portfolio_caption">
					<a href="#"><?php echo $current_options['project_four_title']; ?></a>			
				</div>
				<?php } ?>
			</div>
			<div class="clearfix"></div>
			
			<div class="qua_proejct_button">
			<a href=""> View All Projects </a>
			</div>			
		</div>
	</div>
</div>