<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: admin_profiles.php 48581 2013-11-20 15:27:20Z xavidp $

require_once('lib/wizard/wizard.php');

/**
 * Show the initial profiles choices
 */
class AdminWizardProfiles extends Wizard 
{
	function isEditable ()
	{
		return false;
	}
	
	function onSetupPage ($homepageUrl) 
	{
		global	$smarty, $prefs;

		// Run the parent first
		parent::onSetupPage($homepageUrl);
		
		// Assign the page temaplte
		$wizardTemplate = 'wizard/admin_profiles.tpl';
		$smarty->assign('wizardBody', $wizardTemplate);
		
		return true;		
	}

	function onContinue ($homepageUrl) 
	{
		// Run the parent first
		parent::onContinue($homepageUrl);
	}
}