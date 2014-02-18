<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Math.php 46458 2013-06-25 17:06:31Z lphuberdeau $

/**
 * Handler to perform a calculation for the tracker entry.
 * 
 * Letter key: ~GF~
 *
 */
class Tracker_Field_Math extends Tracker_Field_Abstract implements Tracker_Field_Synchronizable, Tracker_Field_Indexable
{
	public static function getTypes()
	{
		return array(
			'math' => array(
				'name' => tr('Mathematical Calculation'),
				'description' => tr('Performs a calculation upon saving the item based on other fields within the same item.'),
				'help' => 'Mathematical Calculation Field',
				'prefs' => array('trackerfield_math'),
				'tags' => array('advanced'),
				'default' => 'n',
				'params' => array(
					'calculation' => array(
						'name' => tr('Calculation'),
						'description' => tr('Calculation in the Rating Language'),
						'filter' => 'text',
						'legacy_index' => 0,
					),
				),
			),
		);
	}

	function getFieldData(array $requestData = array())
	{
		if (isset($requestData[$this->getInsertId()])) {
			$value = $requestData[$this->getInsertId()];
		} else {
			$value = $this->getValue();
		}

		return array(
			'value' => $value,
		);
	}

	function renderInput($context = array())
	{
		return tr('Feature cannot be set or modified through this interface.');
	}

	function renderOutput($context = array())
	{
		return $this->getValue();
	}

	function importRemote($value)
	{
		return $value;
	}

	function exportRemote($value)
	{
		return $value;
	}

	function importRemoteField(array $info, array $syncInfo)
	{
		return $info;
	}

	function getDocumentPart(Search_Type_Factory_Interface $typeFactory)
	{
		$baseKey = $this->getBaseKey();
		return array(
			$baseKey => $typeFactory->identifier($this->getValue()),
		);
	}

	function getProvidedFields()
	{
		$baseKey = $this->getBaseKey();
		return array($baseKey);
	}

	function getGlobalFields()
	{
		return array();
	}

	function handleFinalSave(array $data)
	{
		try {
			$runner = new Math_Formula_Runner(
				array(
					'Math_Formula_Function_' => '',
				)
			);

			$runner->setFormula($this->getOption('calculation'));
			$runner->setVariables($data);

			return $runner->evaluate();
		} catch (Math_Formula_Exception $e) {
			return $e->getMessage();
		}
	}
}

