<?php
/**
 * Joomla! component sexypolling
 *
 * @version $Id: sexypoll.php 2012-04-05 14:30:25 svn $
 * @author 2GLux.com
 * @package Sexy Polling
 * @subpackage com_sexypolling
 * @license GNU/GPL
 *
 */

use Joomla\CMS\MVC\Model\BaseDatabaseModel;

// no direct access
defined('_JEXEC') or die('Restircted access');

class SexypollingModelSexypoll extends BaseDatabaseModel {
    function __construct() {
		parent::__construct();
		
    } 
}
?>