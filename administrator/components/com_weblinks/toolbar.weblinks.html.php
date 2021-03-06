<?php
/**
* @version $Id: toolbar.weblinks.html.php,v 1.2 2005/11/08 10:26:19 eliasan Exp $
* @package Mambo
* @subpackage Weblinks
* @copyright (C) 2000 - 2005 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

/**
* @package Mambo
* @subpackage Weblinks
*/
class TOOLBAR_weblinks {
	function _EDIT() {
		global $id;
		
		mosMenuBar::startTable();
		mosMenuBar::save();
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancel', _A_CLOSE );
		} else {
			mosMenuBar::cancel();
		}
		mosMenuBar::spacer();
		mosMenuBar::help( '454.screen.weblink.edit' );
		mosMenuBar::endTable();
	}
	function _DEFAULT() {
		mosMenuBar::startTable();
		mosMenuBar::spacer();
		mosMenuBar::publishList();
		mosMenuBar::spacer();
		mosMenuBar::unpublishList();
		mosMenuBar::spacer();
		mosMenuBar::addNewX();
		mosMenuBar::spacer();
		mosMenuBar::editListX();
		mosMenuBar::spacer();
		mosMenuBar::deleteList();
		mosMenuBar::spacer();
		mosMenuBar::help( '454.screen.weblink' );
		mosMenuBar::endTable();
	}
}
?>
