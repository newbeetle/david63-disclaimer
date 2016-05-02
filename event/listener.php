<?php
/**
*
* @package Disclaimer Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\disclaimer\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var phpbb\language\language */
	protected $language;

	/**
	* Constructor for listener
	*
	* @param \phpbb\config\config		$config		phpBB config
	* @param \phpbb\template\template	$template	phpBB template
	* @param phpbb\language\language	$language
	*
	* @access public
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template, \phpbb\language\language $language)
	{
		$this->config	= $config;
		$this->template	= $template;
		$this->language	= $language;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'	=> 'load_language_on_setup',
			'core.page_header'	=> 'page_header',
		);
	}

	/**
	* Load common disclaimer language files during user setup
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function load_language_on_setup($event)
	{
		$lang_set_ext	= $event['lang_set_ext'];
		$lang_set_ext[]	= array(
			'ext_name' => 'david63/disclaimer',
			'lang_set' => 'disclaimer',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	/**
	* Add some additional template variables
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function page_header($event)
	{
		$this->template->assign_vars(array(
			'DISCLAIMER_BODY'	=> $this->language->lang('DISCLAIMER_TEXT', $this->config['sitename']),
			'SITE'				=> $this->config['sitename'],
		));
	}
}
