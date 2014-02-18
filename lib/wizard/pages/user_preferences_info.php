<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: user_preferences_info.php 48685 2013-11-22 19:55:30Z xavidp $


require_once('lib/wizard/wizard.php');
include_once('lib/userprefs/userprefslib.php');
/**
 * Set up the Basic User Information
 */
class UserWizardPreferencesInfo extends Wizard 
{
	function isEditable ()
	{
		return true;
	}

	function onSetupPage ($homepageUrl) 
	{

		global	$smarty, $userlib, $tikilib, $user, $prefs;

		// Run the parent first
		parent::onSetupPage($homepageUrl);
		
		// Show page always since in case user prefs are not enabled,
		// a message will be shown to the user reporting that and 
		// suggesting to request the admin to enable it.
		$showPage = true;
		
		//// Show if option is selected
		//if ($prefs['feature_userPreferences'] === 'y') {
			//$showPage = true;
		//}
		
		$userwatch = $user;
		
		$userinfo = $userlib->get_user_info($userwatch);
		$smarty->assign_by_ref('userinfo', $userinfo);

		$smarty->assign('userwatch', $userwatch);
		$realName = $tikilib->get_user_preference($userwatch, 'realName', '');
		$smarty->assign('realName', $realName);
		if ($prefs['feature_community_gender'] == 'y') {
			$gender = $tikilib->get_user_preference($userwatch, 'gender', 'Hidden');
			$smarty->assign('gender', $gender);
		}
		$flags = $tikilib->get_flags('','','', true);
		$smarty->assign_by_ref('flags', $flags);
		$country = $tikilib->get_user_preference($userwatch, 'country', 'Other');
		$smarty->assign('country', $country);
		$homePage = $tikilib->get_user_preference($userwatch, 'homePage', '');
		$smarty->assign('homePage', $homePage);
		$avatar = $tikilib->get_user_avatar($userwatch);
		$smarty->assign_by_ref('avatar', $avatar);
		$smarty->assign_by_ref('user_prefs', $user_preferences[$userwatch]);
		$user_information = $tikilib->get_user_preference($userwatch, 'user_information', 'public');
		$smarty->assign_by_ref('user_information', $user_information);
		$usertrackerId = false;
		$useritemId = false;
		if ($prefs['userTracker'] == 'y') {
			$re = $userlib->get_usertracker($userinfo["userId"]);
			if (isset($re['usersTrackerId']) and $re['usersTrackerId']) {
				include_once ('lib/trackers/trackerlib.php');
				$info = $trklib->get_item_id($re['usersTrackerId'], $trklib->get_field_id($re['usersTrackerId'], 'Login'), $userwatch);
				$usertrackerId = $re['usersTrackerId'];
				$useritemId = $info;
			}
		}
		$smarty->assign('usertrackerId', $usertrackerId);
		$smarty->assign('useritemId', $useritemId);

		// Assign the page template
		$wizardTemplate = 'wizard/user_preferences_info.tpl';
		$smarty->assign('wizardBody', $wizardTemplate);
		
		return $showPage;		
	}

	function onContinue ($homepageUrl) 
	{
		global $tikilib, $user, $prefs;
		
		$userwatch = $user;
		
		// Run the parent first
		parent::onContinue($homepageUrl);
		
		if (isset($_REQUEST["realName"]) && ($prefs['auth_ldap_nameattr'] == '' || $prefs['auth_method'] != 'ldap')) {
	     $tikilib->set_user_preference($userwatch, 'realName', $_REQUEST["realName"]);
	     if ( $prefs['user_show_realnames'] == 'y' ) {
	       global $cachelib;
	       $cachelib->invalidate('userlink.'.$user.'0');
	     }
		}
		if ($prefs['feature_community_gender'] == 'y') {
			if (isset($_REQUEST["gender"])) $tikilib->set_user_preference($userwatch, 'gender', $_REQUEST["gender"]);
		}
		$tikilib->set_user_preference($userwatch, 'country', $_REQUEST["country"]);
		if (isset($_REQUEST["homePage"])) $tikilib->set_user_preference($userwatch, 'homePage', $_REQUEST["homePage"]);
		$tikilib->set_user_preference($userwatch, 'user_information', $_REQUEST['user_information']);
	
	}
}
