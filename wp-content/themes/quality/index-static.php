<!-- Quality Main Slider --->
<?php $quality_pro_options=theme_data_setup(); 
$current_options = wp_parse_args(  get_option( 'quality_pro_options', array() ), $quality_pro_options ); ?>


<!-- /Quality Main Slider --->

<div class="carousel">

<?php 	if($current_options['home_feature']!=''){ ?>
	<img src="<?php echo $current_options['home_feature']; ?>"  alt="Quality" class="img-responsive" />
	<?php } ?>
	<div class="flex-slider-center">
		<?php if($current_options['home_image_title']){ ?>
		<h2><?php echo $current_options['home_image_title']; ?></h2>
		<?php } ?>
		<?php if($current_options['home_image_sub_title']){ ?>
		<div><span><?php echo $current_options['home_image_sub_title']; ?></span></div>
		<?php } ?>
		<?php if($current_options['home_image_description']){ ?>
		<p><?php  echo $current_options['home_image_description']; ?></p>
		<?php } ?>
	</div>

</div>