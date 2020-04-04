<?php
/******************************
Copyright © 2018 Stéphane Morin
*****************************
*/

class w_sliderpoc_c_admin extends Controller
{
	public function index($settings = [])
	{		
		$images = $this->model()->get_images(isset($settings['gallery_id']) ? $settings['gallery_id'] : 0);
		return $this->view('admin', [
			'gallery_id'	=>	isset($settings['gallery_id']) ? $settings['gallery_id'] : 0,
			'gallery'		=>	$this->model()->get_gallery(),
			'images'		=>	$images,
			'index'			=>  $settings,
			]);
	}
}