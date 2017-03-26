<?php
/**
 * @version    1.0.0
 * @package    PlgSystemOptoutmarker
 * @copyright  Copyright (C) 2017 Markus Baersch - gandke gmbh
 * @license    GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link       https://www.gandke.de
 */

defined('_JEXEC') or die;

/**
 * check marker and add content if found
 *
 * @package  Joomla.Plugin
 * @since    1.0.0
 */
class PlgSystemOptoutmarker extends JPlugin
{
    /**
     * add markercode if ip or header match
     *
     * @return  bool
     */
    public function onAfterRender()
    {
        if (!JFactory::getApplication()->isSite())
        {
            return;
        }
        $app = JFactory::getApplication();
        $ippattern = $this->params->get('ippattern');
        $hdname = $this->params->get('hdname');
        $hdvalue = $this->params->get('hdvalue');
        $markertext = $this->params->get('markertext');
        
        if ((($ippattern != "") && (preg_match("/$ippattern/i", $_SERVER['REMOTE_ADDR']))) ||
           (($hdname != "") && ($_SERVER[$hdname] === $hdvalue))) 
        {
          $buffer = $app->getBody();
          $buffer = str_replace("<head>", "<head>"."\n".$markertext."\n", $buffer);
          $app->setBody($buffer);
        }
        return true;
    }
}