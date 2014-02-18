{* $Id: admin_advanced.tpl 48186 2013-10-27 01:40:31Z lindonb $ *}

<h1>{tr}Set up some advanced options{/tr}</h1>

<div class="adminWizardIconleft"><img src="img/icons/large/icon-configuration48x48.png" alt="{tr}Set up Workspaces & Areas{/tr}" /></div>
{tr}If you are an experienced Tiki site administrator, consider whether the advanced features below would be useful for your use case. They are useful for creating a similar set of Tiki objects for different groups of users with like permissions{/tr}.
<div class="adminWizardContent">
<fieldset>
	<legend>{tr}Workspaces{/tr}</legend>
	<img src="img/icons/large/areas48x48.png" class="adminWizardIconright" />
	{preference name=workspace_ui}
	<em>{tr}See also{/tr} <a href="https://doc.tiki.org/Workspaces UI" target="_blank">{tr}Workspaces UI in doc.tiki.org{/tr}</a></em>
</fieldset>
<fieldset>
	<legend>{tr}Dependencies{/tr}</legend>
	{tr}Enable using the same wiki page name in different contexts{/tr}. {tr}E.g. ns1:_:MyPage and ns2:_:MyPage{/tr}.
	{preference name=namespace_enabled}
	{preference name=feature_perspective}
	{preference name=feature_categories}
	<br>
	<em>{tr}See also{/tr} <a href="tiki-admin.php?page=workspace" target="_blank">{tr}Workspaces & Areas admin panel{/tr}</a></em>
</fieldset>

</div>
