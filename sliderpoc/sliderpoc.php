<?php
/**
 * https://neofr.ag
 * @author: Papy Poc <https://github.com/PapyPoc>
 */

namespace NF\Widgets\Discord;

use NF\NeoFrag\Addons\Widget;

class Discord extends Widget
{
	protected function __info()
	{
		return [
			'title'       => '{lang slider}',
			'description' => 'Slider d\'un album',
			'link'        => 'https://neofr.ag',
			'author'      => 'Stéphane Morin',
			'license'     => 'LGPLv3 <https://neofr.ag/license>',
			'version'     => '3.0',
			'depends'     => [
				'neofrag' => 'Alpha 0.2'
			]
		];
	}
}