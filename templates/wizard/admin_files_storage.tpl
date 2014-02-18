{* $Id: admin_files_storage.tpl 48186 2013-10-27 01:40:31Z lindonb $ *}

<h1>{tr}File storage setup{/tr}</h1>

<div class="adminWizardIconleft"><img src="img/icons/large/fileopen48x48.png" alt="{tr}File storage setup{/tr}" /></div>
<div class="adminWizardContent">
<p>

{if isset($promptElFinder) AND $promptElFinder eq 'y'}
<div>
<fieldset>
	<legend>{tr}elFinder{/tr}</legend>
	<img src="img/icons/large/file-manager.png" class="adminWizardIconright" />
	<input type="checkbox" name="useElFinderAsDefault" {if !isset($useElFinderAsDefault) or $useElFinderAsDefault eq true}checked='checked'{/if} /> {tr}Set elFinder as the default file gallery viewer{/tr}.
	<div class="adminoptionboxchild">
		{tr}See also{/tr} <a href="http://doc.tiki.org/elFinder" target="_blank">{tr}elFinder{/tr} @ doc.tiki.org</a>
	</div>
	<br>
</fieldset>
</div>
{/if}

{if isset($promptFileGalleryStorage) AND $promptFileGalleryStorage eq 'y'}
<div>
<fieldset>
	<img src="img/icons/large/file-manager.png" class="adminWizardIconright" />
	<legend>{tr}File Gallery storage{/tr}</legend>
	{preference name='fgal_use_dir'}
</fieldset>
</div>
{/if}

{if isset($promptAttachmentStorage) AND $promptAttachmentStorage eq 'y'}
<div>
<fieldset>
	<legend>{tr}Attachment storage{/tr}</legend>
	<img src="img/icons/large/wikipages.png" class="adminWizardIconright" />
	{preference name=w_use_db}
	{preference name=w_use_dir}
</fieldset>
</div>
{/if}

</p>


</div>
