{* $Id: admin_structures.tpl 48189 2013-10-27 04:14:28Z lindonb $ *}

<h1>{tr}Set up Structures{/tr}</h1>
<div class="adminWizardIconleft"><img src="img/icons/large/wikipages48x48.png" alt="{tr}Set up Structures{/tr}" /></div>
{tr}Structures organize a group of wiki pages into a tree or book that can be easily navigated by users. Creating a structure is the fastest method for creating multiple pages at once. It's a great way to make a book, as well as to allow users to create new pages that will be automatically found in a common table of contents. New pages can inherit permissions from the structure homepage{/tr}.
<div class="adminWizardContent">
<fieldset>
	<legend>{tr}Structures options{/tr}</legend>
		{preference name=feature_wiki_open_as_structure}
		{preference name=feature_wiki_make_structure}
		{if $isCategories eq true}
			{preference name=feature_wiki_categorize_structure}
		{/if}
		{preference name=feature_wiki_multiprint}
		{preference name=feature_listorphanStructure}
		{preference name=feature_wiki_no_inherit_perms_structure}
		<br>
		<em>{tr}See also{/tr} <a href="https://doc.tiki.org/Structures" target="_blank">{tr}Structures{/tr} @ doc.tiki.org</a></em>
</fieldset>
</div>
