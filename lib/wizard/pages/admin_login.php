<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: admin_login.php 48584 2013-11-20 16:36:05Z xavidp $

require_once('lib/wizard/wizard.php');

/**
 * The Wizard's editor type selector handler 
 */
class AdminWizardLogin extends Wizard
{
	function isEditable ()
	{
		return true;
	}
	
	function onSetupPage ($homepageUrl) 
	{
		global	$smarty, $prefs;

		// Run the parent first
		parent::onSetupPage($homepageUrl);

		// Assign the page template
		$wizardTemplate = 'wizard/admin_login.tpl';
		$smarty->assign('wizardBody', $wizardTemplate);
		
		return true;
	}

	function onContinue ($homepageUrl) 
	{
        global $tikilib;

        // Run the parent first
        parent::onContinue($homepageUrl);

        // Configure detail preferences in own page
	}

}
