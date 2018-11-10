<?php
/******************************
Copyright © 2018 Stéphane Morin
*****************************
*/

namespace NF\Widgets\Discord\Controllers;

use NF\NeoFrag\Loadables\Controllers\Widget as Controller_Widget;

class Index extends Controller_Widget
{
	public function index($settings = [])
	{
		$categories = $this->model()->get_categories();
		$images = $this->model()->get_images(isset($settings['gallery_id']) ? $settings['gallery_id'] : 0);
		$this	->	css('banner-rotator');
		$this	->	js('jquery.banner-rotator.min');
		
		if (!empty($images))
		{			
			return $this -> view('index', [
				'gallery_id'	=>	isset($settings['gallery_id']) ? $settings['gallery_id'] : 0,
				'gallery'		=>	$this->model()->get_gallery(),
				'images' 		=> 	$images,
				'index'			=> 	$settings,
				]);
		}
		else
		{
			return $this->panel()
						->body($this->lang('no_picture'));
		}
	}
}