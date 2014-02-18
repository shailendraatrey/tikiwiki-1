{* $Id: admin_text_area.tpl 48189 2013-10-27 04:14:28Z lindonb $ *}

<h1>{tr}Set up the Text Area{/tr}</h1>

{tr}Set up the text area environment (Editing and Plugins){/tr}.
<div class="adminWizardIconleft"><img src="img/icons/large/editing48x48.png" alt="{tr}Set up the Text Area{/tr}" /></div>
<div class="adminWizardContent">
<fieldset>
	<legend>{tr}General settings{/tr}</legend>
	{preference name=feature_fullscreen}
	{preference name=wiki_edit_icons_toggle}
	{if $isRTL eq false and $isHtmlMode neq true}
		{* Disable Codemirror for RTL languages. It doesn't work. *}
		{preference name=feature_syntax_highlighter}
		{preference name=feature_syntax_highlighter_theme}
	{/if}
	<br>
	<em>{tr}See also{/tr} <a href="tiki-admin.php?page=textarea&alt=Editing+and+Plugins#content1" target="_blank">{tr}Editing and plugins admin panel{/tr}</a></em>
</fieldset>
</div>
