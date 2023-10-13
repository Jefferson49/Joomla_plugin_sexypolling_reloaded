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

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\View\HtmlView;

// no direct access
defined('_JEXEC') or die('Restircted access');

class SexypollingViewSexyvotes extends HtmlView {

    protected $items;
    protected $pagination;
    protected $state;

    /**
     * Display the view
     *
     * @return  void
     */
    public function display($tpl = null) {

        $this->items        = $this->get('Items');
        $this->pagination   = $this->get('Pagination');
        $this->state        = $this->get('State');

        $options = array();
        $polls  = $this->get('sexyPolls');
        foreach($polls AS $poll) {
            $options[] = HTMLHelper::_('select.option', $poll->id, $poll->name);
        }

        if(JV == 'j3') {
            JHtmlSidebar::addFilter(
                    Text::_('COM_SEXYPOLLING_SELECT_POLL'),
                    'filter_poll_id',
                    HTMLHelper::_('select.options', $options, 'value', 'text', $this->state->get('filter.poll_id'))
            );
        }
        $this->addToolbar();
        if(JV == 'j3')
            $this->sidebar = JHtmlSidebar::render();
        parent::display($tpl);
    }

    /**
     * Add the page title and toolbar.
     *
     * @since   1.6
     */
    protected function addToolbar()
    {
        JToolBarHelper::deleteList('', 'sexyvotes.delete', 'JTOOLBAR_DELETE');
    }

    /**
     * Returns an array of fields the table can be sorted by
     *
     * @return  array  Array containing the field name to sort by as the key and display text as value
     *
     * @since   3.0
     */
    protected function getSortFields()
    {
        return array(
                'id_vote' => Text::_('JGRID_HEADING_ID'),
                'date' => Text::_('JDATE'),
                'country' => Text::_('COM_SEXYPOLLING_COUNTRY'),
                'city' => Text::_('COM_SEXYPOLLING_CITY'),
                'region' => Text::_('COM_SEXYPOLLING_REGION'),
                'ip' => Text::_('COM_SEXYPOLLING_IP'),
                'id_answer' => Text::_('COM_SEXYPOLLING_ANSWER'),
                'id_poll' => Text::_('COM_SEXYPOLLING_POLL'),
                'username' => Text::_('COM_SEXYPOLLING_USER')
        );
    }
}