<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: StaticFactory.php 44444 2013-01-05 21:24:24Z changi67 $

/**
 * Simple factory always providing the same resolver. Used to provide
 * a grant-all resolver to admin users.
 */
class Perms_ResolverFactory_StaticFactory implements Perms_ResolverFactory
{
	private $key;
	private $resolver;

	function __construct( $key, $resolver )
	{
		$this->key = $key;
		$this->resolver = $resolver;
	}

	function bulk( array $baseContext, $bulkKey, array $values )
	{
		return array();
	}

	function getHash( array $context )
	{
		return $this->key;
	}

	function getResolver( array $context )
	{
		return $this->resolver;
	}
}
