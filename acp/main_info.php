<?php
/**
* phpBB Extension - marttiphpbb calendar
* @copyright (c) 2014 - 2016 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\calendar\acp;

class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\marttiphpbb\calendar\acp\main_module',
			'title'		=> 'ACP_CALENDAR',
			'modes'		=> array(
				'rendering'	=> array(
					'title' => 'ACP_CALENDAR_RENDERING',
					'auth' => 'ext_marttiphpbb/calendar && acl_a_board',
					'cat' => array('ACP_CALENDAR'),
				),
				'input'		=> array(
					'title'	=> 'ACP_CALENDAR_INPUT',
					'auth'	=> 'ext_marttiphpbb/calendar && acl_a_board',
					'cat'	=> array('ACP_CALENDAR'),
				),
				'include_files'		=> array(
					'title'	=> 'ACP_CALENDAR_INCLUDE_FILES',
					'auth'	=> 'ext_marttiphpbb/calendar && acl_a_board',
					'cat'	=> array('ACP_CALENDAR'),
				),
			),
		);
	}
}
