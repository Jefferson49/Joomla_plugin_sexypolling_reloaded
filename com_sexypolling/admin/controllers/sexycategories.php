<?php
/**
 * Joomla! component sexypolling
 *
 * @version $Id: sexycategories.php 2012-04-05 14:30:25 svn $
 * @author 2GLux.com
 * @package Sexy Polling
 * @subpackage com_sexypolling
 * @license GNU/GPL
 *
 */

use Joomla\CMS\MVC\Controller\AdminController;
use Joomla\CMS\MVC\Model\AdminModel;

// no direct access
defined('_JEXEC') or die('Restircted access');

class SexyPollingControllerSexyCategories extends AdminController
{
	/**
	 * Constructor.
	 *
	 * @param	array	$config	An optional associative array of configuration settings.
	 */
	public function __construct($config = array())
	{
		parent::__construct($config);

		$this->registerTask('unfeatured',	'featured');
	}

	/**
	 * Proxy for getModel.
	 *
	 * @param	string	$name	The name of the model.
	 * @param	string	$prefix	The prefix for the PHP class name.
	 *
	 * @return	AdminModel
	 * @since	1.6
	 */
	public function getModel($name = 'sexycategory', $prefix = 'SexyPollingModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
}
