<?php

/**
* phpBB Extension - marttiphpbb calendar
* @copyright (c) 2014 - 2016 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(

	'ACP_CALENDAR_SETTING_SAVED'						=> 'Settings have been saved successfully!',

// rendering: links
	'ACP_CALENDAR_LINKS'								=> 'Links',
	'ACP_CALENDAR_LINK_LOCATIONS' 						=> 'Link locations to the Calendar page',
	'ACP_CALENDAR_REPO_LINK'							=> 'Enable link to the Calendar extension repository in copyright footer',

	'ACP_CALENDAR_OVERALL_HEADER_NAVIGATION_PREPEND'	=> 'Overall header navigation prepend',
	'ACP_CALENDAR_OVERALL_HEADER_NAVIGATION_APPEND'		=> 'Overall header navigation append',
	'ACP_CALENDAR_NAVBAR_HEADER_QUICK_LINKS_BEFORE'		=> 'Navbar header quick links before',
	'ACP_CALENDAR_NAVBAR_HEADER_QUICK_LINKS_AFTER'		=> 'Navbar header quick links after',
	'ACP_CALENDAR_OVERALL_HEADER_BREADCRUMBS_BEFORE'	=> 'Overall header breadcrumbs before',
	'ACP_CALENDAR_OVERALL_HEADER_BREADCRUMBS_AFTER'		=> 'Overall header breadcrumbs after',
	'ACP_CALENDAR_OVERALL_FOOTER_TIMEZONE_BEFORE'		=> 'Overall footer timezone before',
	'ACP_CALENDAR_OVERALL_FOOTER_TIMEZONE_AFTER'		=> 'Overall footer timezone after',
	'ACP_CALENDAR_OVERALL_FOOTER_TEAMLINK_BEFORE'		=> 'Overall footer teamlink before',
	'ACP_CALENDAR_OVERALL_FOOTER_TEAMLINK_AFTER'		=> 'Overall footer teamlink after',

// rendering: calendar page
	'ACP_CALENDAR_PAGE'									=> 'Calendar page',
	'ACP_CALENDAR_MOONPHASE'							=> 'Display moon cycles',
	'ACP_CALENDAR_ISOWEEK'								=> 'Display the week number (ISO 1806)',
	'ACP_CALENDAR_ISOWEEK_EXPLAIN'						=> 'According to ISO 1806, the first day of the week is defined monday.',
	'ACP_CALENDAR_TODAY'								=> 'Mark today´s date',
	'ACP_CALENDAR_SELECT_FIRST_WEEKDAY'					=> 'First day of the week',

// input

	'ACP_CALENDAR_MAX_EVENT_COUNT'			=> 'Maximum number of calendar events per topic',
	'ACP_CALENDAR_MAX_EVENT_COUNT_EXPLAIN'	=> 'Set this to zero to disable calendar event input.',
	'ACP_CALENDAR_REQUIRED'					=> 'Required',
	'ACP_CALENDAR_REQUIRED_EXPLAIN'			=> 'At least one calendar event is required',
	'ACP_CALENDAR_GRANULARITY'			=> 'Granularity',
	'ACP_CALENDAR_GRANULARITY_OPTIONS'	=> array(
		60		=> '1 min.',
		300		=> '5 min.',
		600		=> '10 min.',
		900		=> '15 min.',
		1800 	=> '30 min.',
		3600	=> '1 hour',
		86400 	=> '1 day',
	),
	'ACP_CALENDAR_DEFAULT_TIME'				=> 'Default time of the day in seconds.',
	'ACP_CALENDAR_DEFAULT_TIME_EXPLAIN'		=> 'When granularity is one day this time of the day is stored.',
	'ACP_CALENDAR_LOWER_LIMIT'				=> 'Lower limit when a event may start.',
	'ACP_CALENDAR_LOWER_LIMIT_EXPLAIN'		=> 'Measured from now in seconds (value may be negative)',
	'ACP_CALENDAR_UPPER_LIMIT'				=> 'Upper limit when a event may start.',
	'ACP_CALENDAR_UPPER_LIMIT_EXPLAIN'		=> 'Measured from now in seconds (value may be negative)',
	'ACP_CALENDAR_DEFAULT_DURATION'			=> 'Default duration in seconds.',
	'ACP_CALENDAR_DEFAULT_DURATION_EXPLAIN'	=> 'Set to zero to disable duration input.',
	'ACP_CALENDAR_FIXED_DURATION'			=> 'Fixed duration (in seconds).',
	'ACP_CALENDAR_FIXED_DURATION_EXPLAIN'	=> 'Set to zero to enable end-time/duration input.',
	'ACP_CALENDAR_MIN_DURATION'				=> 'Minimum duration of an event in seconds.',
	'ACP_CALENDAR_MIN_DURATION_EXPLAIN'		=> '',
	'ACP_CALENDAR_MAX_DURATION'				=> 'Maximum duration of an event in seconds.',
	'ACP_CALENDAR_MAX_DURATION_EXPLAIN'		=> '',
	'ACP_CALENDAR_MIN_GAP'					=> 'Minimum gap in seconds between events of one topic',
	'ACP_CALENDAR_MIN_GAP_EXPLAIN'			=> '',
	'ACP_CALENDAR_MAX_GAP'					=> 'Maximum gap between events of one topic',
	'ACP_CALENDAR_MAX_GAP_EXPLAIN'			=> '',


	'CALENDAR_ADD_ANOTHER'		=> 'Add another',
	'CALENDAR_TO'				=> 'to',

	'CALENDAR_MONTH'			=> 'month',
	'CALENDAR_DAY'				=> 'day',
	'CALENDAR_YEAR'				=> 'year',

	'calendar_suffix_format'	=> array(
		'MONTH_DAY_YEAR'				=> '%1$s %2$s, %6$s',
		'MONTH_DAY_DAY_YEAR'			=> '%1$s %2$s - %5$s, %6$s',
		'MONTH_DAY_MONTH_DAY_YEAR'		=> '%1$s %2$s - %4$s %5$s, %6$s',
		'MONTH_DAY_YEAR_MONTH_DAY_YEAR'	=> '%1$s %2$s, %3$s - %4$s %5$s, %6$s'
	),

	'CALENDAR_SUFFIX_NOW'			=> 'now : ',
	'CALENDAR_SUFFIX_NEXT'			=> 'next : ',
	'CALENDAR_SUFFIX_LAST'			=> 'last : ',
	'CALENDAR_SUFFIX_SINGLE'		=> '',

	'CALENDAR_ALL_PERIODS'			=> 'All calendar periods',

	'CALENDAR_MAX_PERIODS_EXCEDED'	=> 'The number of maximum %s calendar periods has exceded.',
	'CALENDAR_DATES_WRONG_ORDER'	=> 'Calendar dates are in wrong order.',
	'CALENDAR_MIN_DAYS_BETWEEN'		=> 'Minimum %s day(s) are required between successive calendar periods',
	'CALENDAR_MAX_DAYS_BETWEEN'		=> 'Maximum %s day(s) are allowed between successive calendar periods',
	'CALENDAR_TOO_LONG_PERIOD'		=> 'Calendar period exceeds the maximum of %s days',

	'CALENDAR_NEW_MOON'				=> 'New moon',
	'CALENDAR_FIRST_QUARTER_MOON'	=> 'First quarter moon',
	'CALENDAR_FULL_MOON'			=> 'Full moon',
	'CALENDAR_THIRD_QUARTER_MOON'	=> 'Third quarter moon',

	'CALENDAR_AT'					=> '@',

	'CALENDAR_NO_FILTER'			=> 'all topics',
	'CALENDAR_NO_TAG'				=> 'no calendar tag',
	'CALENDAR_TAG_ONLY'				=> 'calendar tag only',
	'CALENDAR_WITH_TAG'				=> 'with calendar tag',
	'CALENDAR_FILTER'				=> 'calendar',
	'CALENDAR_ONE_TAG'				=> '1 calendar tag',
	'CALENDAR_MORE_TAGS'			=> '%s calendar tags',

	'CALENDAR_FORUMS'				=> 'forums',

// posting

	'CALENDAR_EVENT_DATE'			=> 'Date',
	'CALENDAR_EVENT_DATE_AND_TIME'	=> 'Date and time',
	'CALENDAR_RECURRENT'			=> 'Recurrent',

// notifications

	'NOTIFICATION_TYPE_CALENDAR_EVENT_START'	=>
			'A topic calendar event to which you are subscribed, starts',
	'NOTIFICATION_TYPE_CALENDAR_EVENT_START_FORUM'	=>
			'A forum calendar event to which you are subscribed, starts',

// ACP

	'ACP_CALENDAR_DISPLAY_SUFFIX'		=> 'suffix display',
	'ACP_CALENDAR_ENABLE_SUFFIX'		=> 'suffix enable',

	'ACP_CALENDAR_SUFFIX_CONTEXT'		=> 'suffix context',
	'ACP_CALENDAR_MULTI_SUFFIX'			=> 'multi suffix',

	'ACP_CALENDAR_MONTH_ABBREV'			=> 'Use Month abbreviations',

	'ACP_CALENDAR_FILTER'				=> 'Calendar filter',
	'ACP_CALENDAR_ENABLE_FILTER'		=> 'Calendar enable filter',

	'ACP_CALENDAR_INPUT_FORUMS_SELECT'	=> 'Input forums select',
	'ACP_CALENDAR_INPUT_FORUMS'			=> 'Input forums',
	'ACP_CALENDAR_INPUT_FORUMS_EXPLAIN' => '',

	'ACP_CALENDAR_DATE_INPUTS'			=> 'Date Inputs',

	'ACP_CALENDAR_PRESET'				=> 'show topics in calendar (preset)',
	'ACP_CALENDAR_PRESET_EXPLAIN'		=> '',

	'ACP_CALENDAR_PAGE_FORUMS_DISPLAY'	=> 'Forums display on Calendar Page.',

// include_assets
	'ACP_CALENDAR_DIRECTORY_LIST_FAIL'		=> 'Failed to list content of directory %s',
	'ACP_CALENDAR_INCLUDE_ASSETS'			=> 'Include assets',

	'ACP_CALENDAR_JQUERY_UI_DATEPICKER_JS'
											=> 'Include jQuery UI Datepicker.',
	'ACP_CALENDAR_JQUERY_UI_DATEPICKER_JS_EXPLAIN'
											=> 'Disable when already included by another extension.',
	'ACP_CALENDAR_JQUERY_UI_DATEPICKER_I18N_JS'
											=> 'Include jQuery UI Datepicker i18n',
	'ACP_CALENDAR_JQUERY_UI_DATEPICKER_I18N_JS_EXPLAIN'
											=> 'Disable when already included by another extension.',

	'ACP_CALENDAR_DATEPICKER_THEME'			=> 'jQuery UI Datepicker theme',
	'ACP_CALENDAR_DATEPICKER_THEME_EXPLAIN'	=> 'Select none if another extension has already included one.',
	'ACP_CALENDAR_DATEPICKER_THEME_NONE'	=> '-- none --',
));
