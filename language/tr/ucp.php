<?php
/**
*
* @package phpBB Extension - Crizzo Max-width switch - Turkish
* @copyright (c) 2014 Crizzo - www.crizzo.de
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
	'MAXWIDTH'			=> 'Maksimum genişliği kullan',
	'MAXWIDTH_EXPLAIN'	=> '"Evet" ile site tarayıcı pencere genişliğini dolduracak şekilde kullanır.',
));
