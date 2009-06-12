<?php

/************************************************************************/
/* GURUCORE - Mô tả các hằng số dùng cho đường dẫn tuyệt đối, để include ở chỗ khác */
/************************************************************************/
define(ABSPATH, dirname(__FILE__).'/'); // LockeVN: ABSPATH has value=where this config.php is laid

class PATH
{
	const FILE = '/files';    
}

// $GLOBALS['mail_br'] = "\r\n";

require_once(ABSPATH."Lib/External/Savant3.php");
// LockeVN: init share Template Savant engine here
$tpl = new Savant3();
$tpl->setPath('template', array('template', '.'));


class CONFIG
{    
	const API_URL = 'http://smartlms.dyndns.org/api/';
	const WEB_URL = 'http://smartlms.dyndns.org/';    
	const ITEMPERPAGE = 20;    
	const CFG_QBLOG_EMAIL = 'SmartCom.vn <no-reply@smartcom.vn>';
	
	/**
	*@desc you put server name, you get serverinfo (address,username,password)
	*/
	public static $DB_Server_Mapping =
	array(
		'docebo'=>
		array(
			'address'=>'smartlms.dyndns.org',
			'username'=>'root',
			'password'=>'guruunited2008'
		)
	);    
}

class DB_PREFIX
{
	const CORE = 'core';
	const LMS = 'learning';
	const CMS = 'cms';
	const SCS = 'conference';
	const ECOM = 'ecom';
	const CRM = 'crm';    
}


?>