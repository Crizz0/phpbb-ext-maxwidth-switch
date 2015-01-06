<?php
/**
*
* @package phpBB Extension - Crizzo Max-Width Switch
* @copyright (c) 2015 Oliver Schramm
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace crizzo\maxwidthswitch\migrations;

class crizzo_maxwidthswitch_migrations extends \phpbb\db\migration\migration
{
	public function update_schema()
	{
		return array(
			'add_columns'		=> array(
				$this->table_prefix . 'users'	=> array(
					'user_maxwidth'		=> array('BOOL', 0, 'after' => 'user_options'),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_columns'		=> array(
				$this->table_prefix . 'users'	=> array(
					'user_maxwidth',
				),
			),
		);
	}
}
