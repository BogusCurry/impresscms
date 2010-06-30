<?php
/**
 * Block Positions manager for the Impress Persistable Framework
 *
 * @copyright	http://www.impresscms.org/ The ImpressCMS Project
 * @license		LICENSE.txt
 * @category	ICMS
 * @package		Block
 * @subpackage	Position
 * @since		1.0
 * @version		SVN: $Id$
 */

defined('ICMS_ROOT_PATH') or die('ImpressCMS root path not defined');

/**
 * icms_block_position_Object
 * @category	ICMS
 * @package		Block
 * @subpackage	Position
 */
class icms_block_position_Object extends icms_ipf_Object {

	/**
	 * Constructor
	 *
	 * @param icms_block_position_Handler $handler
	 */
	public function __construct(& $handler) {

		parent::__construct($handler);

		$this->quickInitVar('id', XOBJ_DTYPE_INT);
		$this->quickInitVar('pname', XOBJ_DTYPE_TXTBOX, true);
		$this->quickInitVar('title', XOBJ_DTYPE_TXTBOX, true);
		$this->quickInitVar('description', XOBJ_DTYPE_TXTAREA);
		$this->quickInitVar('block_default', XOBJ_DTYPE_INT);
		$this->quickInitVar('block_type', XOBJ_DTYPE_TXTBOX);

	}
}

