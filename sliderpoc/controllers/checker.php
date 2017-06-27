<?php if (!defined('NEOFRAG_CMS')) exit;
/**************************************************************************
Copyright © 2015 Michaël BILCOT & Jérémy VALENTIN

This file is part of NeoFrag.

NeoFrag is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

NeoFrag is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License
along with NeoFrag. If not, see <http://www.gnu.org/licenses/>.
**************************************************************************/

class w_sliderpoc_c_checker extends Controller
{
	public function index($settings = [])
	{
		return [
			'gallery_id' 			=> $settings['gallery_id'],
			'set_kb' 				=> in_array($settings['set_kb'], ['none', 'random','panRight', 'panLeft' ,'panDown', 'panUp', 'panDownRight', 'panDownLeft', 'panUpRight', 'panUpLeft', 'zoomIn', 'zoomInRight', 'zoomInLeft' ,'zoomInDown', 'zoomInUp',												'zoomInDownRight', 'zoomInDownLeft', 'zoomInUpRight', 'zoomInUpLeft', 'zoomOut', 'zoomOutRight', 'zoomOutLeft', 'zoomOutDown', 'zoomOutUp', 'zoomOutDownRight', 'zoomOutDownLeft', 'zoomOutUpRight',												'zoomOutUpLeft', 'randomPan', 'randomZoom', 'randomZoomIn', 'randomZoomOu']) ? $settings['set_kb'] : 'none',
			'set_resp'				=> isset($settings['set_resp'])				? true:false,
			'set_l_play'			=> isset($settings['set_l_play']) 			? $settings['set_l_play']:'',
			'largeur'				=> isset($settings['set_largeur']) 			? $settings['set_largeur']:'',
			'hauteur'				=> isset($settings['set_hauteur']) 			? $settings['set_hauteur']:'',
			'timer'					=> isset($settings['set_timer']) 			? $settings['set_timer']:'',
			'timerPosition'			=> isset($settings['set_timerPosition']) 	? $settings['set_timerPosition']:'',
			'set_startIndex'		=> isset($settings['set_startIndex']) 		? 'random':'0',
			
			// Image 1
			'set_img_effect_1'		=> in_array($settings['set_img_effect_1'], 	['none', 'random', 'cover', 'expand', 'fade', 'flip', 'move', 'push', 'rotate', 'slide', 'zoom']) ? $settings['set_img_effect_1'] : 'none',
			'set_text1_1' 			=> isset($settings['set_text1_1']) 				? $settings['set_text1_1']:'',
			'set_x_text1_1' 		=> isset($settings['set_x_text1_1'])			? $settings['set_x_text1_1']:'',
			'set_y_text1_1' 		=> isset($settings['set_y_text1_1']) 			? $settings['set_y_text1_1']:'',
			'set_c_text1_1' 		=> isset($settings['set_c_text1_1']) 			? $settings['set_c_text1_1']:'',
			'set_f_text1_1' 		=> isset($settings['set_f_text1_1']) 			? $settings['set_f_text1_1']:'',
			'set_app_text1_1' 		=> isset($settings['set_app_text1_1']) 			? $settings['set_app_text1_1']:'',
			'set_a_d_effect_text1_1'=> isset($settings['set_a_d_effect_text1_1']) 	? $settings['set_a_d_effect_text1_1']:'',
			'set_a_delay_text1_1'	=> isset($settings['set_a_delay_text1_1']) 		? $settings['set_a_delay_text1_1']:'',
			'set_disp_text1_1' 		=> isset($settings['set_disp_text1_1']) 		? $settings['set_disp_text1_1']:'',
			'set_d_d_effect_text1_1'=> isset($settings['set_d_d_effect_text1_1']) 	? $settings['set_d_d_effect_text1_1']:'',
			'set_d_delay_text1_1'	=> isset($settings['set_d_delay_text1_1']) 		? $settings['set_d_delay_text1_1']:'',
			
			'set_text2_1' 			=> isset($settings['set_text2_1']) 				? $settings['set_text2_1']:'',
			'set_x_text2_1' 		=> isset($settings['set_x_text2_1'])	 		? $settings['set_x_text2_1']:'',
			'set_x_text2_1' 		=> isset($settings['set_x_text2_1']) 			? $settings['set_x_text2_1']:'',
			'set_y_text2_1' 		=> isset($settings['set_y_text2_1']) 			? $settings['set_y_text2_1']:'',
			'set_c_text2_1' 		=> isset($settings['set_c_text2_1']) 			? $settings['set_c_text2_1']:'',
			'set_f_text2_1' 		=> isset($settings['set_f_text2_1']) 			? $settings['set_f_text2_1']:'',
			'set_app_text2_1' 		=> isset($settings['set_app_text2_1']) 			? $settings['set_app_text2_1']:'',
			'set_a_d_effect_text2_1'=> isset($settings['set_a_d_effect_text2_1']) 	? $settings['set_a_d_effect_text2_1']:'',
			'set_a_delay_text2_1'	=> isset($settings['set_a_delay_text2_1']) 		? $settings['set_a_delay_text2_1']:'',
			'set_disp_text2_1' 		=> isset($settings['set_disp_text2_1']) 		? $settings['set_disp_text2_1']:'',
			'set_d_d_effect_text2_1'=> isset($settings['set_d_d_effect_text2_1']) 	? $settings['set_d_d_effect_text2_1']:'',
			'set_d_delay_text2_1'	=> isset($settings['set_d_delay_text1_1']) 		? $settings['set_d_delay_text2_1']:'',
			
			'set_text3_1' 			=> isset($settings['set_text3_1']) 				? $settings['set_text3_1']:'',
			'set_x_text3_1' 		=> isset($settings['set_x_text3_1']) 			? $settings['set_x_text3_1']:'',
			'set_x_text3_1' 		=> isset($settings['set_x_text3_1']) 			? $settings['set_x_text3_1']:'',
			'set_y_text3_1' 		=> isset($settings['set_y_text3_1']) 			? $settings['set_y_text3_1']:'',
			'set_c_text3_1' 		=> isset($settings['set_c_text3_1']) 			? $settings['set_c_text3_1']:'',
			'set_f_text3_1' 		=> isset($settings['set_f_text3_1']) 			? $settings['set_f_text3_1']:'',
			'set_app_text3_1' 		=> isset($settings['set_app_text3_1']) 			? $settings['set_app_text3_1']:'',
			'set_a_d_effect_text3_1'=> isset($settings['set_a_d_effect_text3_1']) 	? $settings['set_a_d_effect_text3_1']:'',
			'set_a_delay_text3_1'	=> isset($settings['set_a_delay_text3_1']) 		? $settings['set_a_delay_text3_1']:'',
			'set_disp_text3_1' 		=> isset($settings['set_disp_text3_1']) 		? $settings['set_disp_text3_1']:'',
			'set_d_d_effect_text3_1'=> isset($settings['set_d_d_effect_text3_1']) 	? $settings['set_d_d_effect_text3_1']:'',
			'set_d_delay_text3_1'	=> isset($settings['set_d_delay_text3_1']) 		? $settings['set_d_delay_text3_1']:'',
			
			// Image 2
			'set_img_effect_2'		=> in_array($settings['set_img_effect_2'], 	['none', 'random', 'cover', 'expand', 'fade', 'flip', 'move', 'push', 'rotate', 'slide', 'zoom']) ? $settings['set_img_effect_2'] : 'none',
			'set_text1_2' 			=> isset($settings['set_text1_2']) 				? $settings['set_text1_2']:'',
			'set_x_text1_2' 		=> isset($settings['set_x_text1_2']) 			? $settings['set_x_text1_2']:'',
			'set_y_text1_2' 		=> isset($settings['set_y_text1_2']) 			? $settings['set_y_text1_2']:'',
			'set_c_text1_2' 		=> isset($settings['set_c_text1_2']) 			? $settings['set_c_text1_2']:'',
			'set_f_text1_2' 		=> isset($settings['set_f_text1_2']) 			? $settings['set_f_text1_2']:'',
			'set_app_text1_2' 		=> isset($settings['set_app_text1_2']) 			? $settings['set_app_text1_2']:'',
			'set_a_d_effect_text1_2'=> isset($settings['set_a_d_effect_text1_2']) 	? $settings['set_a_d_effect_text1_2']:'',
			'set_a_delay_text1_2'	=> isset($settings['set_a_delay_text1_2']) 		? $settings['set_a_delay_text1_2']:'',
			'set_disp_text1_2' 		=> isset($settings['set_disp_text1_2']) 		? $settings['set_disp_text1_2']:'',
			'set_d_d_effect_text1_2'=> isset($settings['set_d_d_effect_text1_2']) 	? $settings['set_d_d_effect_text1_2']:'',
			
			'set_text2_2' 			=> isset($settings['set_text2_2']) 				? $settings['set_text2_2']:'',
			'set_x_text2_2' 		=> isset($settings['set_x_text2_2']) 			? $settings['set_x_text2_2']:'',
			'set_x_text2_2' 		=> isset($settings['set_x_text2_2']) 			? $settings['set_x_text2_2']:'',
			'set_y_text2_2' 		=> isset($settings['set_y_text2_2']) 			? $settings['set_y_text2_2']:'',
			'set_c_text2_2' 		=> isset($settings['set_c_text2_2']) 			? $settings['set_c_text2_2']:'',
			'set_f_text2_2' 		=> isset($settings['set_f_text2_2']) 			? $settings['set_f_text2_2']:'',
			'set_app_text2_2' 		=> isset($settings['set_app_text2_2']) 			? $settings['set_app_text2_2']:'',
			'set_a_d_effect_text2_2'=> isset($settings['set_a_d_effect_text2_2']) 	? $settings['set_a_d_effect_text2_2']:'',
			'set_a_delay_text2_2'	=> isset($settings['set_a_delay_text2_2']) 		? $settings['set_a_delay_text2_2']:'',
			'set_disp_text2_2' 		=> isset($settings['set_disp_text2_2']) 		? $settings['set_disp_text2_2']:'',
			'set_d_d_effect_text2_2'=> isset($settings['set_d_d_effect_text2_2']) 	? $settings['set_d_d_effect_text2_2']:'',
			
			'set_text3_2' 			=> isset($settings['set_text3_2']) 				? $settings['set_text3_2']:'',
			'set_x_text3_2' 		=> isset($settings['set_x_text3_2']) 			? $settings['set_x_text3_2']:'',
			'set_x_text3_2' 		=> isset($settings['set_x_text3_2']) 			? $settings['set_x_text3_2']:'',
			'set_y_text3_2' 		=> isset($settings['set_y_text3_2']) 			? $settings['set_y_text3_2']:'',
			'set_c_text3_2' 		=> isset($settings['set_c_text3_2']) 			? $settings['set_c_text3_2']:'',
			'set_f_text3_2' 		=> isset($settings['set_f_text3_2']) 			? $settings['set_f_text3_2']:'',
			'set_app_text3_2' 		=> isset($settings['set_app_text3_2']) 			? $settings['set_app_text3_2']:'',
			'set_a_d_effect_text3_2'=> isset($settings['set_a_d_effect_text3_2']) 	? $settings['set_a_d_effect_text3_2']:'',
			'set_a_delay_text3_2'	=> isset($settings['set_a_delay_text3_2']) 		? $settings['set_a_delay_text3_2']:'',
			'set_disp_text3_2' 		=> isset($settings['set_disp_text3_2']) 		? $settings['set_disp_text3_2']:'',
			'set_d_d_effect_text3_2'=> isset($settings['set_d_d_effect_text3_2']) 	? $settings['set_d_d_effect_text3_2']:'',
			
			// Image 3
			'set_img_effect_3'		=> in_array($settings['set_img_effect_3'], ['none', 'random', 'cover', 'expand', 'fade', 'flip', 'move', 'push', 'rotate', 'slide', 'zoom']) ? $settings['set_img_effect_3'] 	: 'none',
			'set_text1_3' 			=> isset($settings['set_text1_3']) 				? $settings['set_text1_3']:'',
			'set_x_text1_3' 		=> isset($settings['set_x_text1_3']) 			? $settings['set_x_text1_3']:'',
			'set_y_text1_3' 		=> isset($settings['set_y_text1_3']) 			? $settings['set_y_text1_3']:'',
			'set_c_text1_3' 		=> isset($settings['set_c_text1_3']) 			? $settings['set_c_text1_3']:'',
			'set_f_text1_3' 		=> isset($settings['set_f_text1_3']) 			? $settings['set_f_text1_3']:'',
			'set_app_text1_3' 		=> isset($settings['set_app_text1_3']) 			? $settings['set_app_text1_3']:'',
			'set_a_d_effect_text1_3'=> isset($settings['set_a_d_effect_text1_3']) 	? $settings['set_a_d_effect_text1_3']:'',
			'set_a_delay_text1_3'	=> isset($settings['set_a_delay_text1_3']) 		? $settings['set_a_delay_text1_3']:'',
			'set_disp_text1_3' 		=> isset($settings['set_disp_text1_3']) 		? $settings['set_disp_text1_3']:'',
			'set_d_d_effect_text1_3'=> isset($settings['set_d_d_effect_text1_3']) 	? $settings['set_d_d_effect_text1_3']:'',
			
			'set_text2_3' 			=> isset($settings['set_text2_3']) 				? $settings['set_text2_3']:'',
			'set_x_text2_3' 		=> isset($settings['set_x_text2_3']) 			? $settings['set_x_text2_3']:'',
			'set_x_text2_3' 		=> isset($settings['set_x_text2_3']) 			? $settings['set_x_text2_3']:'',
			'set_y_text2_3' 		=> isset($settings['set_y_text2_3']) 			? $settings['set_y_text2_3']:'',
			'set_c_text2_3' 		=> isset($settings['set_c_text2_3']) 			? $settings['set_c_text2_3']:'',
			'set_f_text2_3' 		=> isset($settings['set_f_text2_3']) 			? $settings['set_f_text2_3']:'',
			'set_app_text2_3' 		=> isset($settings['set_app_text1_3']) 			? $settings['set_app_text1_3']:'',
			'set_a_d_effect_text2_3'=> isset($settings['set_a_d_effect_text2_3']) 	? $settings['set_a_d_effect_text2_3']:'',
			'set_a_delay_text2_3'	=> isset($settings['set_a_delay_text2_3']) 		? $settings['set_a_delay_text2_3']:'',
			'set_disp_text2_3' 		=> isset($settings['set_disp_text2_3']) 		? $settings['set_disp_text2_3']:'',
			'set_d_d_effect_text2_3'=> isset($settings['set_d_d_effect_text2_3']) 	? $settings['set_d_d_effect_text2_3']:'',
			
			'set_text3_3' 			=> isset($settings['set_text3_3']) 				? $settings['set_text3_3']:'',
			'set_x_text3_3' 		=> isset($settings['set_x_text3_3']) 			? $settings['set_x_text3_3']:'',
			'set_x_text3_3' 		=> isset($settings['set_x_text3_3']) 			? $settings['set_x_text3_3']:'',
			'set_y_text3_3' 		=> isset($settings['set_y_text3_3']) 			? $settings['set_y_text3_3']:'',
			'set_c_text3_3' 		=> isset($settings['set_c_text3_3']) 			? $settings['set_c_text3_3']:'',
			'set_f_text3_3' 		=> isset($settings['set_f_text3_3']) 			? $settings['set_f_text3_3']:'',
			'set_app_text3_3' 		=> isset($settings['set_app_text3_3']) 			? $settings['set_app_text3_3']:'',
			'set_a_d_effect_text3_3'=> isset($settings['set_a_d_effect_text3_3']) 	? $settings['set_a_d_effect_text3_3']:'',
			'set_a_delay_text3_3'	=> isset($settings['set_a_delay_text3_3']) 		? $settings['set_a_delay_text3_3']:'',
			'set_disp_text3_3' 		=> isset($settings['set_disp_text3_3']) 		? $settings['set_disp_text3_3']:'',
			'set_d_d_effect_text3_3'=> isset($settings['set_d_d_effect_text3_3']) 	? $settings['set_d_d_effect_text3_3']:'',
			
			// Image 4
			'set_img_effect_4'		=> in_array($settings['set_img_effect_4'], ['none', 'random', 'cover', 'expand', 'fade', 'flip', 'move', 'push', 'rotate', 'slide', 'zoom']) ? $settings['set_img_effect_4'] 	: 'none',
			'set_text1_4' 			=> isset($settings['set_text1_4']) 				? $settings['set_text1_4']:'',
			'set_x_text1_4' 		=> isset($settings['set_x_text1_4']) 			? $settings['set_x_text1_4']:'',
			'set_y_text1_4' 		=> isset($settings['set_y_text1_4']) 			? $settings['set_y_text1_4']:'',
			'set_c_text1_4' 		=> isset($settings['set_c_text1_4']) 			? $settings['set_c_text1_4']:'',
			'set_f_text1_4' 		=> isset($settings['set_f_text1_4']) 			? $settings['set_f_text1_4']:'',
			'set_app_text1_4' 		=> isset($settings['set_app_text1_4']) 			? $settings['set_app_text1_4']:'',
			'set_a_d_effect_text1_4'=> isset($settings['set_a_d_effect_text1_4']) 	? $settings['set_a_d_effect_text1_4']:'',
			'set_a_delay_text1_4'	=> isset($settings['set_a_delay_text1_4']) 		? $settings['set_a_delay_text1_4']:'',
			'set_disp_text1_4' 		=> isset($settings['set_disp_text1_4']) 		? $settings['set_disp_text1_4']:'',
			'set_d_d_effect_text1_4'=> isset($settings['set_d_d_effect_text1_4']) 	? $settings['set_d_d_effect_text1_4']:'',
			
			'set_text2_4' 			=> isset($settings['set_text2_4']) 				? $settings['set_text2_4']:'',
			'set_x_text2_4' 		=> isset($settings['set_x_text2_4']) 			? $settings['set_x_text2_4']:'',
			'set_x_text2_4' 		=> isset($settings['set_x_text2_4']) 			? $settings['set_x_text2_4']:'',
			'set_y_text2_4' 		=> isset($settings['set_y_text2_4']) 			? $settings['set_y_text2_4']:'',
			'set_c_text2_4' 		=> isset($settings['set_c_text2_4']) 			? $settings['set_c_text2_4']:'',
			'set_f_text2_4' 		=> isset($settings['set_f_text2_4']) 			? $settings['set_f_text2_4']:'',
			'set_app_text2_4' 		=> isset($settings['set_app_text2_4']) 			? $settings['set_app_text2_4']:'',
			'set_a_d_effect_text2_4'=> isset($settings['set_a_d_effect_text2_4']) 	? $settings['set_a_d_effect_text2_4']:'',
			'set_a_delay_text2_4'	=> isset($settings['set_a_delay_text2_4']) 		? $settings['set_a_delay_text2_4']:'',
			'set_disp_text2_4' 		=> isset($settings['set_disp_text2_4']) 		? $settings['set_disp_text2_4']:'',
			'set_d_d_effect_text2_4'=> isset($settings['set_d_d_effect_text2_4']) 	? $settings['set_d_d_effect_text2_4']:'',
			
			'set_text3_4' 			=> isset($settings['set_text3_4']) 				? $settings['set_text3_4']:'',
			'set_x_text3_4' 		=> isset($settings['set_x_text3_4']) 			? $settings['set_x_text3_4']:'',
			'set_x_text3_4' 		=> isset($settings['set_x_text3_4']) 			? $settings['set_x_text3_4']:'',
			'set_y_text3_4' 		=> isset($settings['set_y_text3_4']) 			? $settings['set_y_text3_4']:'',
			'set_c_text3_4' 		=> isset($settings['set_c_text3_4']) 			? $settings['set_c_text3_4']:'',
			'set_f_text3_4' 		=> isset($settings['set_f_text3_4']) 			? $settings['set_f_text3_4']:'',
			'set_app_text3_4' 		=> isset($settings['set_app_text3_4']) 			? $settings['set_app_text3_4']:'',
			'set_a_d_effect_text3_4'=> isset($settings['set_a_d_effect_text3_4']) 	? $settings['set_a_d_effect_text3_4']:'',
			'set_a_delay_text3_4'	=> isset($settings['set_a_delay_text3_4']) 		? $settings['set_a_delay_text3_4']:'',
			'set_disp_text3_4' 		=> isset($settings['set_disp_text3_4']) 		? $settings['set_disp_text3_4']:'',
			'set_d_d_effect_text3_4'=> isset($settings['set_d_d_effect_text3_4']) 	? $settings['set_d_d_effect_text3_4']:'',
			
			// Image 5
			'set_img_effect_5'		=> in_array($settings['set_img_effect_5'], 	['none', 'random', 'cover', 'expand', 'fade', 'flip', 'move', 'push', 'rotate', 'slide', 'zoom']) ? $settings['set_img_effect_5'] 	: 'none',
			'set_text1_5' 			=> isset($settings['set_text1_5']) 				? $settings['set_text1_5']:'',
			'set_x_text1_5' 		=> isset($settings['set_x_text1_5']) 			? $settings['set_x_text1_5']:'',
			'set_y_text1_5' 		=> isset($settings['set_y_text1_5']) 			? $settings['set_y_text1_5']:'',
			'set_c_text1_5' 		=> isset($settings['set_c_text1_5']) 			? $settings['set_c_text1_5']:'',
			'set_f_text1_5' 		=> isset($settings['set_f_text1_5']) 			? $settings['set_f_text1_5']:'',
			'set_app_text1_5' 		=> isset($settings['set_app_text1_5']) 			? $settings['set_app_text1_5']:'',
			'set_a_d_effect_text1_5'=> isset($settings['set_a_d_effect_text1_5']) 	? $settings['set_a_d_effect_text1_5']:'',
			'set_a_delay_text1_5'	=> isset($settings['set_a_delay_text1_5']) 		? $settings['set_a_delay_text1_5']:'',
			'set_disp_text1_5' 		=> isset($settings['set_disp_text1_5']) 		? $settings['set_disp_text1_5']:'',
			'set_d_d_effect_text1_5'=> isset($settings['set_d_d_effect_text1_5']) 	? $settings['set_d_d_effect_text1_5']:'',
			
			'set_text2_5' 			=> isset($settings['set_text2_5']) 				? $settings['set_text2_5']:'',
			'set_x_text2_5' 		=> isset($settings['set_x_text2_5']) 			? $settings['set_x_text2_5']:'',
			'set_x_text2_5' 		=> isset($settings['set_x_text2_5']) 			? $settings['set_x_text2_5']:'',
			'set_y_text2_5' 		=> isset($settings['set_y_text2_5']) 			? $settings['set_y_text2_5']:'',
			'set_c_text2_5' 		=> isset($settings['set_c_text2_5']) 			? $settings['set_c_text2_5']:'',
			'set_f_text2_5' 		=> isset($settings['set_f_text2_5']) 			? $settings['set_f_text2_5']:'',
			'set_app_text2_5' 		=> isset($settings['set_app_text2_5']) 			? $settings['set_app_text2_5']:'',
			'set_a_d_effect_text2_5'=> isset($settings['set_a_d_effect_text2_5']) 	? $settings['set_a_d_effect_text2_5']:'',
			'set_a_delay_text2_5'	=> isset($settings['set_a_delay_text2_5']) 		? $settings['set_a_delay_text2_5']:'',
			'set_disp_text2_5' 		=> isset($settings['set_disp_text2_5']) 		? $settings['set_disp_text2_5']:'',
			'set_d_d_effect_text2_5'=> isset($settings['set_d_d_effect_text2_5']) 	? $settings['set_d_d_effect_text2_5']:'',
			
			'set_text3_5' 			=> isset($settings['set_text3_5']) 				? $settings['set_text3_5']:'',
			'set_x_text3_5' 		=> isset($settings['set_x_text3_5']) 			? $settings['set_x_text3_5']:'',
			'set_x_text3_5' 		=> isset($settings['set_x_text3_5']) 			? $settings['set_x_text3_5']:'',
			'set_y_text3_5' 		=> isset($settings['set_y_text3_5']) 			? $settings['set_y_text3_5']:'',
			'set_c_text3_5' 		=> isset($settings['set_c_text3_5']) 			? $settings['set_c_text3_5']:'',
			'set_f_text3_5' 		=> isset($settings['set_f_text3_5']) 			? $settings['set_f_text3_5']:'',
			'set_app_text3_5' 		=> isset($settings['set_app_text3_5']) 			? $settings['set_app_text3_5']:'',
			'set_a_d_effect_text3_5'=> isset($settings['set_a_d_effect_text3_5']) 	? $settings['set_a_d_effect_text3_5']:'',
			'set_a_delay_text3_5'	=> isset($settings['set_a_delay_text3_5']) 		? $settings['set_a_delay_text3_5']:'',
			'set_disp_text3_5' 		=> isset($settings['set_disp_text3_5']) 		? $settings['set_disp_text3_5']:'',
			'set_d_d_effect_text3_5'=> isset($settings['set_d_d_effect_text3_5']) 	? $settings['set_d_d_effect_text3_5']:'',
			
			
			/*for ($key=1; $key <= count($data['images']); $key++) {
				'set_text1_'.$key 			=> $settings["'set_text1_".$key."'"],
			}*/
		];
		
	}
}

/*
NeoFrag Alpha 0.1.6
./widgets/gallery/controllers/checker.php
*/