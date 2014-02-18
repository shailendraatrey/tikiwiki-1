<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: admin_date_time.php 47636 2013-09-21 20:35:30Z arildb $

require_once('lib/wizard/wizard.php');

/**
 * Set up the date and time settings
 */
class AdminWizardDateTime extends Wizard 
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

		// Assign the page temaplte
		$wizardTemplate = 'wizard/admin_date_time.tpl';
		$smarty->assign('wizardBody', $wizardTemplate);
		
		return true;
	}

	function onContinue ($homepageUrl) 
	{
		// Run the parent first
		parent::onContinue($homepageUrl);
	}
}