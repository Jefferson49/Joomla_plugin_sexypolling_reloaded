<?php
/**
 * Joomla! component sexypolling
 *
 * @version $Id$
 * @author 2GLux.com
 * @package Sexy Polling
 * @subpackage com_sexypolling
 * @license GNU/GPL
 *
 */

use Joomla\CMS\MVC\Model\AdminModel; 
use Joomla\CMS\MVC\Controller\AdminController;

// no direct access
defined('_JEXEC') or die('Restircted access');

class SexyPollingControllerSexyVotes extends AdminController
{
    /**
     * Constructor.
     *
     * @param   array   $config An optional associative array of configuration settings.
     */
    public function __construct($config = array())
    {
        parent::__construct($config);
    }

    /**
     * Proxy for getModel.
     *
     * @param   string  $name   The name of the model.
     * @param   string  $prefix The prefix for the PHP class name.
     *
     * @return  AdminModel
     * @since   1.6
     */
    public function getModel($name = 'sexyvote', $prefix = 'SexyPollingModel', $config = array('ignore_request' => true))
    {
        $model = parent::getModel($name, $prefix, $config);

        return $model;
    }
}
