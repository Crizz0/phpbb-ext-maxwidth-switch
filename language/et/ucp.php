<?php
/**
*
* @package phpBB Extension - Crizzo Max-width switch - Estonian
* @copyright (c) 2014 Crizzo - www.crizzo.de; Estonian translation by phpBBeesti.com 05/2015
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
$lang = array_merge($lang, array(
	'MAXWIDTH'			=> 'Kasuta maksimaalset laiust',
	'MAXWIDTH_EXPLAIN'	=> 'Valikuga "Jah", näidatakse foorumit veebilehitsejas kogu ekraani ulatuses.',
));
