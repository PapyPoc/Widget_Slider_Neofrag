<?php $debug=TRUE; ?>
<div role="tabpanel">
	<ul id="navigation-tabs" class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#navigation-options" aria-controls="navigation-options" role="tab" data-toggle="tab"><?php echo icon('fa-cogs').' '.$this->lang('options'); ?></a></li>
		<?php  for ($key=1; $key <= count($data['images']); $key++) { ?>
			<li role="img"><a href="#img<?php echo '_'.$key; ?>" aria-controls="img<?php echo '_'.$key; ?>" role="tab" data-toggle="tab"><?php echo icon('fa-cogs').' '.$this->lang('image').' '.$key; ?></a></li>
		<?php } ?>
		<li role="presentation"><a href="#about" aria-controls="about" role="tab" data-toggle="tab"><?php echo icon('fa-graduation-cap'); ?> A propos</a></li>
		<?php if($debug==true) { ?>
			<li role="debug"><a href="#debug" aria-controls="debug" role="tab" data-toggle="tab"><?php echo icon('fa-cogs').' '?>Debug</a></li>
		<?php } ?>
	</ul>
	<div class="tab-content">
		<div id="navigation-options" class="tab-pane active" role="tabpanel">
			<div class="form-horizontal">
				<div class="form-group">
					<label for="settings-gallery" class="col-sm-4 control-label"><?php echo $this->lang('galleries'); ?></label>
					<div class="col-sm-4">
						<select class="form-control" name="settings[gallery_id]" id="settings-gallery">
							<?php foreach ($data['gallery'] as $gallery): ?>
								<option value="<?php echo $gallery['gallery_id']; ?>"<?php if ($data['gallery_id'] == $gallery['gallery_id']) echo ' selected="selected"'; ?>><?php echo $gallery['title']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="settings-kb" class="col-sm-4 control-label"><?php echo $this->lang('kb'); ?></label>
					<div class="col-sm-7">
						<select class="form-control" name="settings[set_kb]" id="settings-set_kb">
							<option value="none" 			<?php if ($data['index']['set_kb'] == "none") 				echo ' selected="selected"'; ?>><?php echo $this->lang('none');				?></option>
							<option value="random" 			<?php if ($data['index']['set_kb'] == "random")				echo ' selected="selected"'; ?>><?php echo $this->lang('random');			?></option>
							<option value="panRight" 		<?php if ($data['index']['set_kb'] == "panRight")			echo ' selected="selected"'; ?>><?php echo $this->lang('panRight');			?></option>
							<option value="panLeft" 		<?php if ($data['index']['set_kb'] == "panLeft")			echo ' selected="selected"'; ?>><?php echo $this->lang('panLeft');			?></option>
							<option value="panDown" 		<?php if ($data['index']['set_kb'] == "panDown")			echo ' selected="selected"'; ?>><?php echo $this->lang('panDown');			?></option>
							<option value="panDownRight" 	<?php if ($data['index']['set_kb'] == "panDownRight")		echo ' selected="selected"'; ?>><?php echo $this->lang('panDownRight');		?></option>
							<option value="panDownLeft" 	<?php if ($data['index']['set_kb'] == "panDownLeft")		echo ' selected="selected"'; ?>><?php echo $this->lang('panDownLeft');		?></option>
							<option value="panUpRight" 		<?php if ($data['index']['set_kb'] == "panUpRight")			echo ' selected="selected"'; ?>><?php echo $this->lang('panUpRight');		?></option>
							<option value="panUpLeft" 		<?php if ($data['index']['set_kb'] == "panUpLeft")			echo ' selected="selected"'; ?>><?php echo $this->lang('panUpLeft');		?></option>
							<option value="zoomIn" 			<?php if ($data['index']['set_kb'] == "zoomIn")				echo ' selected="selected"'; ?>><?php echo $this->lang('zoomIn');			?></option>
							<option value="zoomInRight" 	<?php if ($data['index']['set_kb'] == "zoomInRight")		echo ' selected="selected"'; ?>><?php echo $this->lang('zoomInRight');		?></option>
							<option value="zoomInLeft" 		<?php if ($data['index']['set_kb'] == "zoomInLeft")			echo ' selected="selected"'; ?>><?php echo $this->lang('zoomInLeft');		?></option>
							<option value="zoomInDown" 		<?php if ($data['index']['set_kb'] == "zoomInDown")			echo ' selected="selected"'; ?>><?php echo $this->lang('zoomInDown');		?></option>
							<option value="zoomInUp" 		<?php if ($data['index']['set_kb'] == "zoomInUp")			echo ' selected="selected"'; ?>><?php echo $this->lang('zoomInUp');			?></option>
							<option value="zoomInDownRight" <?php if ($data['index']['set_kb'] == "zoomInDownRight")	echo ' selected="selected"'; ?>><?php echo $this->lang('zoomInDownRight');	?></option>
							<option value="zoomInDownLeft" 	<?php if ($data['index']['set_kb'] == "zoomInDownLeft")		echo ' selected="selected"'; ?>><?php echo $this->lang('zoomInDownLeft');	?></option>
							<option value="zoomInUpRight" 	<?php if ($data['index']['set_kb'] == "zoomInUpRight")		echo ' selected="selected"'; ?>><?php echo $this->lang('zoomInUpRight');	?></option>
							<option value="zoomInUpLeft" 	<?php if ($data['index']['set_kb'] == "zoomInUpLeft")		echo ' selected="selected"'; ?>><?php echo $this->lang('zoomInUpLeft');		?></option>
							<option value="zoomOut" 		<?php if ($data['index']['set_kb'] == "zoomOut")			echo ' selected="selected"'; ?>><?php echo $this->lang('zoomOut');			?></option>
							<option value="zoomOutRight" 	<?php if ($data['index']['set_kb'] == "zoomOutRight")		echo ' selected="selected"'; ?>><?php echo $this->lang('zoomOutRight');		?></option>
							<option value="zoomOutLeft" 	<?php if ($data['index']['set_kb'] == "zoomOutLeft")		echo ' selected="selected"'; ?>><?php echo $this->lang('zoomOutLeft');		?></option>
							<option value="zoomOutDown" 	<?php if ($data['index']['set_kb'] == "zoomOutDown")		echo ' selected="selected"'; ?>><?php echo $this->lang('zoomOutDown');		?></option>
							<option value="zoomOutUp" 		<?php if ($data['index']['set_kb'] == "zoomOutUp")			echo ' selected="selected"'; ?>><?php echo $this->lang('zoomOutUp');		?></option>
							<option value="zoomOutDownRight"<?php if ($data['index']['set_kb'] == "zoomOutDownRight")	echo ' selected="selected"'; ?>><?php echo $this->lang('zoomOutDownRight');	?></option>
							<option value="zoomOutDownLeft" <?php if ($data['index']['set_kb'] == "zoomOutDownLeft")	echo ' selected="selected"'; ?>><?php echo $this->lang('zoomOutDownLeft');	?></option>
							<option value="zoomOutUpRight" 	<?php if ($data['index']['set_kb'] == "zoomOutUpRight")		echo ' selected="selected"'; ?>><?php echo $this->lang('zoomOutUpRight');	?></option>
							<option value="zoomOutUpLeft" 	<?php if ($data['index']['set_kb'] == "zoomOutUpLeft")		echo ' selected="selected"'; ?>><?php echo $this->lang('zoomOutUpLeft');	?></option>
							<option value="randomPan" 		<?php if ($data['index']['set_kb'] == "randomPan")			echo ' selected="selected"'; ?>><?php echo $this->lang('randomPan');		?></option>
							<option value="randomZoom" 		<?php if ($data['index']['set_kb'] == "randomZoom")			echo ' selected="selected"'; ?>><?php echo $this->lang('randomZoom');		?></option>
							<option value="randomZoomIn" 	<?php if ($data['index']['set_kb'] == "randomZoomIn")		echo ' selected="selected"'; ?>><?php echo $this->lang('randomZoomIn');		?></option>
							<option value="randomZoomOut" 	<?php if ($data['index']['set_kb'] == "randomZoomOut")		echo ' selected="selected"'; ?>><?php echo $this->lang('randomZoomOut');	?></option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="settings-resp" class="col-sm-4 control-label"><?php echo $this->lang('responsive'); ?></label>
					<div class="col-sm-1">
						<input type="checkbox" class="form-control" name="settings[set_resp]" id="settings-set_resp"   checked />	
					</div>
					<label for="settings-autoplay" class="col-sm-4 control-label"><?php echo $this->lang('l_play'); ?></label>
					<div class="col-sm-2">
						<input type="text" class="form-control" name="settings[set_l_play]" id="settings-set_l_play" placeholder="4" value="<?php if(isset($data['index']['set_l_play'])) echo $data['index']['set_l_play'];if(!isset($data['index']['set_l_play'])) echo '4'; ?>"/>
					</div>
				</div>
				<div class="form-group">
					<label for="settings-largeur" class="col-sm-4 control-label"><?php echo $this->lang('largeur'); ?></label>
					<div class="col-sm-2">
						<input type="text" class="form-control" name="settings[set_largeur]" id="settings-set_largeur" placeholder="1500" value="<?php if(isset($data['index']['largeur'])) echo $data['index']['largeur'];if(!isset($data['index']['largeur'])) echo '1500';?>"/>
					</div>
					<label for="settings-hauteur" class="col-sm-4 control-label"><?php echo $this->lang('hauteur'); ?></label>
					<div class="col-sm-2">
						<input type="text" class="form-control" name="settings[set_hauteur]" id="settings-set_hauteur" placeholder="500" value="<?php if(isset($data['index']['hauteur'])) echo $data['index']['hauteur'];if(!isset($data['index']['hauteur'])) echo '500'; ?>"/>
					</div>
				</div>
				<div class="form-group">
					<label for="settings-timer" class="col-sm-4 control-label"><?php echo $this->lang('timer'); ?></label>
					<div class="col-sm-4">
						<select class="form-control" name="settings[set_timer]" id="settings-set_timer">
							<option value="none" 	title="<?php echo $this->lang('t_timer_none');	?>" 	<?php if ($data['index']['timer'] == "none") 	echo ' selected="selected"'; ?>><?php echo $this->lang('none');	?></option>
							<option value="pie" 	title="<?php echo $this->lang('t_timer_pie'); ?>"		<?php if ($data['index']['timer'] == "pie")		echo ' selected="selected"'; ?>><?php echo $this->lang('pie');	?></option>
							<option value="bar" 	title="<?php echo $this->lang('t_timer_bar'); ?>"		<?php if ($data['index']['timer'] == "bar")		echo ' selected="selected"'; ?>><?php echo $this->lang('bar');	?></option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="settings-timerPosition" class="col-sm-4 control-label"><?php echo $this->lang('timerPosition'); ?></label>
					<div class="col-sm-4">
						<select class="form-control" name="settings[set_timerPosition]" id="settings-set_timerPosition">
							<option value="left top" 	 <?php if ($data['index']['timerPosition'] == "left top") 		echo ' selected="selected"'; ?>><?php echo $this->lang('t_timerPosition_lt');	?></option>
							<option value="bottom left"  <?php if ($data['index']['timerPosition'] == "bottom left")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_timerPosition_bl');	?></option>
							<option value="right top" 	 <?php if ($data['index']['timerPosition'] == "right top")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_timerPosition_rt');	?></option>
							<option value="bottom right" <?php if ($data['index']['timerPosition'] == "bottom right")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_timerPosition_br');	?></option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="settings-resp" class="col-sm-4 control-label"><?php echo $this->lang('startindex'); ?></label>
					<div class="col-sm-1">
						<input type="checkbox" class="form-control" name="settings[set_startIndex]" id="settings-set_startIndex" <?php if($data['index']['set_startIndex'] == true ) echo ' checked'; ?> />	
					</div>
				</div>
			</div>
		</div>
		<?php for ($key=1; $key <= count($data['images']); $key++) { ?>
		<div id="img<?php echo '_'.$key; ?>" class="tab-pane" role="tabpanel">
			<div class="form-horizontal">
				<div class="form-group">
					<label for="settings-transition" class="col-sm-5 control-label"><?php echo $this->lang('img'); ?></label>
					<div class="col-sm-7">
						<select class="form-control" name="settings[set_img_effect_<?php echo $key; ?>]" id="settings-set_img_effect_<?php echo $key; ?>">
							<option value="none"	<?php if ($data['index']['set_img_effect_'.$key] == "none") 	echo ' selected="selected"'; ?>><?php echo $this->lang('none'); 	?></option>
							<option value="random"	<?php if ($data['index']['set_img_effect_'.$key] == "random")	echo ' selected="selected"'; ?>><?php echo $this->lang('random'); 	?></option>
							<option value="cover"	<?php if ($data['index']['set_img_effect_'.$key] == "cover")	echo ' selected="selected"'; ?>><?php echo $this->lang('cover'); 	?></option>
							<option value="expand"	<?php if ($data['index']['set_img_effect_'.$key] == "expand")	echo ' selected="selected"'; ?>><?php echo $this->lang('expand'); 	?></option>
							<option value="fade"	<?php if ($data['index']['set_img_effect_'.$key] == "fade")		echo ' selected="selected"'; ?>><?php echo $this->lang('fade'); 	?></option>
							<option value="flip"	<?php if ($data['index']['set_img_effect_'.$key] == "flip")		echo ' selected="selected"'; ?>><?php echo $this->lang('flip'); 	?></option>
							<option value="move"	<?php if ($data['index']['set_img_effect_'.$key] == "move")		echo ' selected="selected"'; ?>><?php echo $this->lang('move'); 	?></option>
							<option value="push"	<?php if ($data['index']['set_img_effect_'.$key] == "push")		echo ' selected="selected"'; ?>><?php echo $this->lang('push'); 	?></option>
							<option value="rotate"	<?php if ($data['index']['set_img_effect_'.$key] == "rotate")	echo ' selected="selected"'; ?>><?php echo $this->lang('rotate'); 	?></option>
							<option value="slide"	<?php if ($data['index']['set_img_effect_'.$key] == "slide")	echo ' selected="selected"'; ?>><?php echo $this->lang('slide'); 	?></option>
							<option value="zoom"	<?php if ($data['index']['set_img_effect_'.$key] == "zoom")		echo ' selected="selected"'; ?>><?php echo $this->lang('zoom'); 	?></option>
						</select>
					</div>
				</div>
				<div class="panel-group" id="accordion<?php echo $key; ?>" role="tablist" aria-multiselectable="true">
<!-- Texte N°1 --><?php for ($texte=1; $texte <= 3; $texte++) { ?>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading<?php echo $key; ?><?php echo $texte; ?>">
							<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion<?php echo $key; ?>" href="#collapse<?php echo $key; ?><?php echo $texte; ?>" aria-expanded="true" aria-controls="collapse<?php echo $key; ?><?php echo $texte; ?>">
							Réglage du texte <?php echo $texte; ?>
							</a>
						</h4>
						</div>
						<div id="collapse<?php echo $key; ?><?php echo $texte; ?>" class="panel-collapse collapse <?php if ($texte==1){ echo 'in';}?>" role="tabpanel" aria-labelledby="heading<?php echo $key; ?><?php echo $texte; ?>">
							<div class="panel-body">
								<div class="form-group">
									<label for="settings-set_text<?php echo $texte; ?>_<?php echo $key; ?>" class="col-sm-2 control-label"><?php echo $this->lang('text_img'); ?></label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="settings[set_text<?php echo $texte; ?>_<?php echo $key; ?>]" id="settings-set_text<?php echo $texte; ?>_<?php echo $key; ?>" placeholder="Texte <?php echo $texte; ?>" value="<?php if(isset($data['index']['set_text'.$texte.'_'.$key])) echo $data['index']['set_text'.$texte.'_'.$key]; ?>" />	
									</div>
								</div>
								<div class="form-group">
									<label for="settings-set_x" class="col-sm-3 control-label"><?php echo $this->lang('pos_x'); ?></label>
									<div class="col-sm-3">
										<input type="text" class="form-control" name="settings[set_x_text<?php echo $texte; ?>_<?php echo $key; ?>]" id="settings-set_x_text<?php echo $texte; ?>_<?php echo $key; ?>" placeholder="20px ou 10%" value="<?php if(isset($data['index']['set_x_text'.$texte.'_'.$key])) echo $data['index']['set_x_text'.$texte.'_'.$key]; ?>" />
										<div class="input-group-addon">px ou %</div>										
									</div>
									<label for="settings-set_y" class="col-sm-3 control-label"><?php echo $this->lang('pos_y'); ?></label>
									<div class="col-sm-3">
										<input type="text" class="form-control" name="settings[set_y_text<?php echo $texte; ?>_<?php echo $key; ?>]" id="settings-set_y_text<?php echo $texte; ?>_<?php echo $key; ?>" placeholder="20px ou 10%" value="<?php if(isset($data['index']['set_y_text'.$texte.'_'.$key])) echo $data['index']['set_y_text'.$texte.'_'.$key]; ?>" />	
									</div>
								</div>
								<div class="form-group">
									<label for="settings-set_color" class="col-sm-2 control-label"><?php echo $this->lang('couleur_text'); ?></label>
									<div class="col-sm-2">
										<input type="text" class="form-control" name="settings[set_c_text<?php echo $texte; ?>_<?php echo $key; ?>]" id="small" placeholder="#000000" value="<?php if(isset($data['index']['set_c_text'.$texte.'_'.$key])) echo $data['index']['set_c_text'.$texte.'_'.$key]; ?>" /><span class="input-group-addon"><?php echo icon('fa-paint-brush'); ?></span>										
									</div>
									<label for="settings-set_background" class="col-sm-2 control-label"><?php echo $this->lang('couleur_fond'); ?></label>
									<div class="col-sm-2">
										<input type="text" class="form-control" name="settings[set_f_text<?php echo $texte; ?>_<?php echo $key; ?>]" id="settings-set_f_text<?php echo $texte; ?>_<?php echo $key; ?>" placeholder="#bb0000" value="<?php if(isset($data['index']['set_f_text'.$texte.'_'.$key])) echo $data['index']['set_f_text'.$texte.'_'.$key]; ?>" />	
									</div>
								</div>
								<div class="form-group">
									<label for="settings-set_app_text" class="col-sm-5 control-label"><?php echo $this->lang('app_text'); ?></label>
									<div class="col-sm-6">
										<select class="form-control" name="settings[set_app_text<?php echo $texte; ?>_<?php echo $key; ?>]" id="settings-set_app_text<?php echo $texte; ?>_<?php echo $key; ?>">
											<option value="none"		<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "none") 		echo ' selected="selected"'; ?>><?php echo $this->lang('t_none'); 			?></option>
											<option value="fade"		<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "fade")			echo ' selected="selected"'; ?>><?php echo $this->lang('t_fade'); 			?></option>
											<option value="flipDown"	<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "flipDown")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_flipDown');	 	?></option>
											<option value="flipUp"		<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "flipUp")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_flipUp'); 		?></option>
											<option value="flipRight"	<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "flipRight")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_flipRight');		?></option>
											<option value="flipLeft"	<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "flipLeft")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_flipLeft'); 		?></option>
											<option value="moveDown"	<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "moveDown")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_moveDown'); 		?></option>
											<option value="moveUp"		<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "moveUp")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_moveUp'); 		?></option>
											<option value="moveRight"	<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "moveRight")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_moveRight');		?></option>
											<option value="moveLeft"	<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "moveLeft")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_moveLeft'); 		?></option>
											<option value="shiftDown"	<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "shiftDown")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_shiftDown');		?></option>
											<option value="shiftUp"		<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "shiftUp")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_shiftUp'); 		?></option>
											<option value="shiftRight"	<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "shiftRight")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_shiftRight');		?></option>
											<option value="shiftLeft"	<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "shiftLeft")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_shiftLeft');		?></option>
											<option value="slideDown"	<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "slideDown")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_slideDown'); 		?></option>
											<option value="slideUp"		<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "slideUp")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_slideUp'); 		?></option>
											<option value="slideRight"	<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "slideRight")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_slideRight'); 	?></option>
											<option value="slideLeft"	<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "slideLeft")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_slideLeft'); 		?></option>
											<option value="spinInRight"	<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "spinInRight")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_spinInRight'); 	?></option>
											<option value="spinInLeft"	<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "spinInLeft")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_spinInLeft'); 	?></option>
											<option value="spinOutRight"<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "spinOutRight")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_spinOutRight'); 	?></option>
											<option value="spinOutLeft"	<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "spinOutLeft")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_spinOutLeft'); 	?></option>
											<option value="zoomIn"		<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "zoomIn")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_zoomIn'); 		?></option>
											<option value="zoomOut"		<?php if ($data['index']['set_app_text'.$texte.'_'.$key] == "zoomOut")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_zoomOut'); 		?></option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="settings-set_duree" class="col-sm-4 control-label"><?php echo $this->lang('a_d_effect'); ?></label>
									<div class="col-sm-2">
										<input type="text" class="form-control" name="settings[set_a_d_effect_text<?php echo $texte; ?>_<?php echo $key; ?>]" id="settings-set_a_d_effect_text<?php echo $texte; ?>_<?php echo $key; ?>" placeholder="0.5" value="<?php if(isset($data['index']['set_a_d_effect_text'.$texte.'_'.$key])) echo $data['index']['set_a_d_effect_text'.$texte.'_'.$key]; ?>" />	
									</div>
									<label for="settings-set_delay" class="col-sm-4 control-label"><?php echo $this->lang('a_delay'); ?></label>
									<div class="col-sm-2">
										<input type="text" class="form-control" name="settings[set_a_delay_text<?php echo $texte; ?>_<?php echo $key; ?>]" id="settings-set_a_delay_text<?php echo $texte; ?>_<?php echo $key; ?>" placeholder="0.8" value="<?php if(isset($data['index']['set_a_delay_text'.$texte.'_'.$key])) echo $data['index']['set_a_delay_text'.$texte.'_'.$key]; ?>" />	
									</div>
								</div>
								<div class="form-group">
									<label for="settings-set_disp_text_<?php echo $texte; ?>_<?php echo $key; ?>" class="col-sm-5 control-label"><?php echo $this->lang('disp_text'); ?></label>
									<div class="col-sm-6">
										<select class="form-control" name="settings[set_disp_text<?php echo $texte; ?>_<?php echo $key; ?>]" id="settings-set_disp_text<?php echo $texte; ?>_<?php echo $key; ?>">
											<option value="none"		<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "none") 		echo ' selected="selected"'; ?>><?php echo $this->lang('t_none'); 			?></option>
											<option value="fade"		<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "fade")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_fade'); 			?></option>
											<option value="flipDown"	<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "flipDown")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_flipDown'); 		?></option>
											<option value="flipUp"		<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "flipUp")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_flipUp'); 		?></option>
											<option value="flipRight"	<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "flipRight")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_flipRight');		?></option>
											<option value="flipLeft"	<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "flipLeft")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_flipLeft'); 		?></option>
											<option value="moveDown"	<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "moveDown")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_moveDown'); 		?></option>
											<option value="moveUp"		<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "moveUp")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_moveUp'); 		?></option>
											<option value="moveRight"	<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "moveRight")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_moveRight');		?></option>
											<option value="moveLeft"	<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "moveLeft")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_moveLeft'); 		?></option>
											<option value="shiftDown"	<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "shiftDown")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_shiftDown');		?></option>
											<option value="shiftUp"		<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "shiftUp")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_shiftUp'); 		?></option>
											<option value="shiftRight"	<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "shiftRight")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_shiftRight');		?></option>
											<option value="shiftLeft"	<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "shiftLeft")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_shiftLeft');		?></option>
											<option value="slideDown"	<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "slideDown")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_slideDown'); 		?></option>
											<option value="slideUp"		<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "slideUp")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_slideUp'); 		?></option>
											<option value="slideRight"	<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "slideRight")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_slideRight'); 	?></option>
											<option value="slideLeft"	<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "slideLeft")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_slideLeft'); 		?></option>
											<option value="spinInRight"	<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "spinInRight")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_spinInRight');	?></option>
											<option value="spinInLeft"	<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "spinInLeft")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_spinInLeft'); 	?></option>
											<option value="spinOutRight"<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "spinOutRight")echo ' selected="selected"'; ?>><?php echo $this->lang('t_spinOutRight');	?></option>
											<option value="spinOutLeft"	<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "spinOutLeft")	echo ' selected="selected"'; ?>><?php echo $this->lang('t_spinOutLeft'); 	?></option>
											<option value="zoomIn"		<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "zoomIn")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_zoomIn'); 		?></option>
											<option value="zoomOut"		<?php if ($data['index']['set_disp_text'.$texte.'_'.$key] == "zoomOut")		echo ' selected="selected"'; ?>><?php echo $this->lang('t_zoomOut'); 		?></option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="settings-set_d_effect_text_<?php echo $texte; ?>_<?php echo $key; ?>" class="col-sm-5 control-label"><?php echo $this->lang('d_d_effect'); ?></label>
									<div class="col-sm-2">
										<input type="text" class="form-control" name="settings[set_d_d_effect_text<?php echo $texte; ?>_<?php echo $key; ?>]" id="settings-set_d_d_effect_text<?php echo $texte; ?>_<?php echo $key; ?>" placeholder="0.5" value="<?php if(isset($data['index']['set_d_d_effect_text'.$texte.'_'.$key])) echo $data['index']['set_d_d_effect_text'.$texte.'_'.$key]; ?>" />	
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
		<?php } ?>
		<div id="about" class="tab-pane" role="tabpanel">
			Widget Slider v1.0 | By Papy Poc<br>
			<b>Changelog :</b><br>
			v1.0 	- 	Initial Release
		</div>
		<div id="debug" class="tab-pane" role="tabpanel">
			<div class="form-horizontal">
				gallery <pre><?php print_r($data['gallery']); ?></pre></BR></BR>
				images <pre><?php print_r($data['images']); ?></pre></BR></BR>
				index <pre><?php print_r($data['index']); ?></pre>
			</div>
		</div>
	</div>
</div>