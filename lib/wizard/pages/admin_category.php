<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: admin_category.php 47650 2013-09-22 19:27:38Z arildb $

require_once('lib/wizard/wizard.php');

/**
 * Wizard page handler 
 */
class AdminWizardCategory extends Wizard 
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
		
		$showPage = false;

		// Show if option is selected
		if ($prefs['feature_categories'] === 'y') {
			$showPage = true;
		}
		
		// Assign the page tempalte
		$wizardTemplate = 'wizard/admin_category.tpl';
		$smarty->assign('wizardBody', $wizardTemplate);
		
		return $showPage;
	}

	function onContinue ($homepageUrl) 
	{
		// Run the parent first
		parent::onContinue($homepageUrl);
	}
}