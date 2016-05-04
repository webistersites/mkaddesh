<!-- Quality Service Section ---->
<?php $quality_pro_options=theme_data_setup(); 
		  $current_options = wp_parse_args(  get_option( 'quality_pro_options', array() ), $quality_pro_options ); ?>
<div class="container">
	<div class="row">
		<div class="qua_heading_title">
		<?php if($current_options['service_title']) { ?>
			<h1><?php echo $current_options['service_title']; ?></h1>
		<?php } ?>
		<?php if($current_options['service_description']) { ?>
			<p><?php echo $current_options['service_description']; ?></p>
		<?php } ?>
			<div class="qua-separator" id=""></div>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-3 col-sm-6 qua-service-area">
			<?php if($current_options['service_one_icon']) { ?>
			<div class="hexagon-box">
				<a href=""><i class="<?php echo $current_options['service_one_icon']; ?>"></i></a>
			</div>
			<?php } ?>
			<?php if($current_options['service_one_title']) { ?>
			<h2><?php echo $current_options['service_one_title']; ?></h2>
			<?php } ?>
			<?php if($current_options['service_one_text']) { ?>
			<p><?php echo $current_options['service_one_text'];?></p>
			<?php } ?>			
		</div>
		<div class="col-md-3 col-sm-6 qua-service-area">
			<?php if($current_options['service_two_icon']) { ?>
			<div class="hexagon-box">
				<a href=""><i class="<?php echo $current_options['service_two_icon']; ?>"></i></a>
			</div>
			<?php } ?>
			<?php if($current_options['service_two_title']) { ?>
			<h2><?php echo $current_options['service_two_title']; ?></h2>
			<?php } ?>
			<?php if($current_options['service_two_text']) { ?>
			<p><?php echo $current_options['service_two_text'];?></p>
			<?php } ?>			
		</div>
		<div class="col-md-3 col-sm-6 qua-service-area">
			<?php if($current_options['service_three_icon']) { ?>
			<div class="hexagon-box">
				<a href=""><i class="<?php echo $current_options['service_three_icon']; ?>"></i></a>
			</div>
			<?php } ?>
			<?php if($current_options['service_three_title']) { ?>
			<h2><?php echo $current_options['service_three_title']; ?></h2>
			<?php } ?>
			<?php if($current_options['service_three_text']) { ?>
			<p><?php echo $current_options['service_three_text'];?></p>
			<?php } ?>			
		</div>
		<div class="col-md-3 col-sm-6 qua-service-area">
			<?php if($current_options['service_four_icon']) { ?>
			<div class="hexagon-box">
				<a href=""><i class="<?php echo $current_options['service_four_icon']; ?>"></i></a>
			</div>
			<?php } ?>
			<?php if($current_options['service_four_title']) { ?>
			<h2><?php echo $current_options['service_four_title']; ?></h2>
			<?php } ?>
			<?php if($current_options['service_four_text']) { ?>
			<p><?php echo $current_options['service_four_text'];?></p>
			<?php } ?>			
		</div>
				
	</div>		
</div>
<!-- /Quality Service Section ---->