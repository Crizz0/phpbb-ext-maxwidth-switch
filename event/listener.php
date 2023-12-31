<?php
/**
*
* @package phpBB Extension - Crizzo Max-Width Switch
* @copyright (c) 2015 Oliver Schramm
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace crizzo\maxwidthswitch\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/**
	* Constructor
	*
	* @param \phpbb\request\request		$request	Request object
	* @param \phpbb\template\template	$template	Template object
	* @param \phpbb\user				$user		User object
	* @return \crizzo\maxwidthswitch\event\listener
	* @access public
	*/
	public function __construct(\phpbb\request\request $request, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	public static function getSubscribedEvents()
	{
		return array(
			'core.page_header'					=> 'include_css_in_template',
			'core.ucp_prefs_view_data'			=> 'ucp_prefs_add',
			'core.ucp_prefs_view_update_data'	=> 'ucp_prefs_update',
		);
	}

	/**
	* Includes CSS in template if the radiobox in UCP was selected
	*
	* @param object	$event The event object
	* @return null
	* @access public
	*/
	public function include_css_in_template()
	{
		$this->template->assign_vars(array(
			'S_INCLUDE_MAXWIDTH_CSS'	=> $this->user->data['user_maxwidth'],
		));
	}

	/**
	* Add configuration to UCP
	*
	* @param object	$event The event object
	* @return null
	* @access public
	*/
	public function ucp_prefs_add($event)
	{
		$this->user->add_lang_ext('crizzo/maxwidthswitch', 'ucp');

		$maxwidth = $this->request->variable('maxwidth', (bool) $this->user->data['user_maxwidth']);
		$event['data'] = array_merge($event['data'], array(
			'maxwidth'	=> $maxwidth,
		));

		$this->template->assign_vars(array(
			'S_MAXWIDTH'	=> $maxwidth,
		));
	}

	/**
	* Updates configuration in UCP
	*
	* @param object	$event The event object
	* @return null
	* @access public
	*/
	public function ucp_prefs_update($event)
	{
		$event['sql_ary'] = array_merge($event['sql_ary'], array(
			'user_maxwidth'		=> $event['data']['maxwidth'],
		));
	}
}
