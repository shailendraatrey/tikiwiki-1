{* $Id: admin_date_time.tpl 48189 2013-10-27 04:14:28Z lindonb $ *}

<h1>{tr}Set up Date and Time{/tr}</h1>

{tr}Set the site timezone and format for displaying dates and times{/tr}.
<div class="adminWizardIconleft"><img src="img/icons/large/icon-configuration48x48.png" alt="{tr}Set up your Date and Time{/tr}" /></div>
<div class="adminWizardContent">
<fieldset>
	<legend>{tr}Date and Time setup{/tr}</legend>
	<img src="img/icons/large/admin.gif" class="adminWizardIconright"/>
	{preference name=server_timezone}
	{preference name=users_prefs_display_timezone}
	<br>
	{preference name=display_field_order}
	{preference name=users_prefs_display_12hr_clock}
	<br>
	<em>{tr}See also{/tr} <a href="tiki-admin.php?page=general&alt=General#content4" target="_blank">{tr}Date and Time admin panel{/tr}</a></em>
</fieldset>
<br>
</div>
