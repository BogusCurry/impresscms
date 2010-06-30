<?php
/**
 * XOOPS authentification class
 * Authorization classes, xoops authorization class file
 * @copyright    http://www.xoops.org/ The XOOPS Project
 * @copyright    XOOPS_copyrights.txt
 * @copyright    http://www.impresscms.org/ The ImpressCMS Project
 * @license      LICENSE.txt
 * @package      Authorization
 * @since        XOOPS
 * @author       http://www.xoops.org The XOOPS Project
 * @author       modified by UnderDog <underdog@impresscms.org>
 * @version      $Id: auth_xoops.php 19609 2010-06-24 20:06:09Z malanciault $
 */
/**
 * Authentification class for Native XOOPS
 * @package      kernel
 * @subpackage   auth
 * @author       Pierre-Eric MENUET <pemphp@free.fr>
 * @copyright    copyright (c) 2000-2003 XOOPS.org
 */
class icms_auth_Xoops extends icms_auth_Object
{
	/**
	 * Authentication Service constructor
	 * constructor
	 * @param object $dao reference to dao object
	 */
	function icms_auth_Xoops(&$dao)
	{
		$this->_dao = $dao;
		$this->auth_method = 'xoops';
	}

	/**
	 *  Authenticate user
	 * @param string $uname
	 * @param string $pwd
	 * @return object {@link icms_member_user_Object} icms_member_user_Object object
	 */
	function authenticate($uname, $pwd = null)
	{
		$member_handler = xoops_gethandler('member');
		$user = $member_handler->loginUser($uname, $pwd);
		$sess_handler = xoops_gethandler('session');
		$sess_handler->securityLevel = 3;
		$sess_handler->check_ip_blocks = 2;
		$sess_handler->salt_key = XOOPS_DB_SALT;
		$sess_handler->enableRegenerateId = true;
		$sess_handler->icms_sessionOpen();
		if($user == false)
		{
			$sess_handler->destroy(session_id());
			$this->setErrors(1, _US_INCORRECTLOGIN);
		}
		return ($user);
	}
}
?>