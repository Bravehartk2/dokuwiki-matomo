<?php
/**
 * DokuWiki plugin for Matomo
 *
 * Hook into application -> executed after header metadata was rendered
 *
 * @license GPLv3 (http://www.gnu.org/licenses/gpl.html)
 * @author  Marcel Lange <info@ask-sheldon.con>
 */

if (!defined('DOKU_INC')) {
    die();
}
if (!defined('DOKU_PLUGIN')) {
    define('DOKU_PLUGIN', DOKU_INC . 'lib/plugins/');
}
require_once DOKU_PLUGIN . 'action.php';
require_once DOKU_PLUGIN . 'matomo/code.php';

class action_plugin_matomo extends DokuWiki_Action_Plugin
{
    function register(Doku_Event_Handler $controller)
    {
        $controller->register_hook(
            'TPL_METAHEADER_OUTPUT', 'BEFORE', $this, '_hook_header'
        );
    }

    function _hook_header(Doku_Event $event, $param)
    {
        $data = matomo_code();
        $event->data['script'][] = array(
            'type'    => 'text/javascript',
            'charset' => 'utf-8',
            '_data'   => $data,
        );
    }
}
