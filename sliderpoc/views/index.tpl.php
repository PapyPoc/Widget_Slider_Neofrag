<?php require 'widgets/sliderpoc/js/setup.min.js'; ?>

<div id="myRotator" class="banner-rotator shadow white">
	<ul class="slides">
		<?php for ($key=1; $key <= count($data['images']); $key++) { ?>
			<li data-effect="<?php echo $data['index']['set_img_effect_'.$key]; ?>">
				<a href="#">
					<img class="img-responsive"
						src="widgets/sliderpoc/images/assets/spacer.png" data-src="<?php echo path($data['images'][$key-1]['file_id']); ?>" data-thumb="<?php echo path($data['images'][$key-1]['thumbnail_file_id']); ?>" data-toggle="tooltip" title="<?php echo $data['image']['title']; ?>" />
				</a>
				<?php for ($texte=1; $texte <= 3; $texte++) { if (!empty($data['index']['set_text'.$texte.'_'.$key])) { ?>
							<h3 
								data-transition="<?php echo $data['index']['set_app_text'.$texte.'_'.$key]; ?> <?php echo ($data['index']['set_a_d_effect_text'.$texte.'_'.$key]*1000); ?> linear <?php echo ($data['index']['set_a_delay_text'.$texte.'_'.$key]*1000); ?>"
								data-transition-out="<?php echo $data['index']['set_disp_text'.$texte.'_'.$key]; ?> <?php echo ($data['index']['set_d_d_effect_text'.$texte.'_'.$key]*1000); ?> linear" 
								style="
									left:<?php echo $data['index']['set_x_text'.$texte.'_'.$key]; ?>;
									top:<?php echo $data['index']['set_y_text'.$texte.'_'.$key]; ?>;
									color:<?php echo $data['index']['set_c_text'.$texte.'_'.$key]; ?>;
									background:<?php echo $data['index']['set_f_text'.$texte.'_'.$key]; ?>;
									letter-spacing:20px;
									padding:5px 0 5px 20px;
								">
								<?php echo $data['index']['set_text'.$texte.'_'.$key]; ?>
							</h3>
				<?php }} ?>
			</li>
		<?php } ?>
	</ul>
</div>