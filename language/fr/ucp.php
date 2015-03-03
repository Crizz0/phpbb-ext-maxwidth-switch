<?php
/**
*
* @package phpBB Extension - Crizzo Max-width switch - French
* @copyright (c) 2014 Crizzo - www.crizzo.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @translated into French by Galixte (http://www.galixte.com)
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
	'MAXWIDTH'			=> 'Utiliser la largeur maximale',
	'MAXWIDTH_EXPLAIN'	=> 'Sur « oui » le forum sera en mesure d’utiliser la largeur maximale de la fenêtre du navigateur.',
));
