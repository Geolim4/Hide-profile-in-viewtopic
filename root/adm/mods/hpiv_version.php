<?php
//
//	file: adm/mods/hpiv_version.php
//	author: Geolim4
//	begin: 21/01/2013
//	version: 1.0.1 - 11/02/2013
//	licence: http://opensource.org/licenses/gpl-license.php GNU Public License
//

// ignore
if ( !defined('IN_PHPBB') )
{
	exit;
}

class hpiv_version
{
	function version()
	{
		return array(
			'author' => 'Geolim4',
			'title' => 'Hide Profile In Viewtopic',
			'tag' => 'hpiv',
			'version' => '1.0.1',
			'file' => array('gl4.fr', '', 'hpiv_version.xml'), //Direct link: http://gl4.fr/pap_version.xml
		);
	}
}
