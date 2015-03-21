<?php
/**
*
* @package phpBB Extension - Crizzo Max-width switch - Italian
* @copyright (c) 2014 Crizzo - www.crizzo.de - Localizzazione italiana di www.TurboLab.it
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
	'MAXWIDTH'			=> 'Usa larghezza massima',
	'MAXWIDTH_EXPLAIN'	=> 'Se impostata a "Sì", la board viene visualizzata utilizzando l\'intera larghezza della finestra del browser. Se "No" (impostazione predefinita), viene visualizzata utilizzata solo una colonna più stretta al centro della pagina',
));
