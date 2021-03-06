<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE - CONFIDENTIAL                                |
// +---------------------------------------------------------------------+
// | Copyright (c) 2017 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.fr for more information about licensing.  |
// +---------------------------------------------------------------------+
// | NOTICE:  All information contained herein is, and remains the       |
// | property of Code Inc. SAS. The intellectual and technical concepts  |
// | contained herein are proprietary to Code Inc. SAS are protected by  |
// | trade secret or copyright law. Dissemination of this information or |
// | reproduction of this material  is strictly forbidden unless prior   |
// | written permission is obtained from Code Inc. SAS.                  |
// +---------------------------------------------------------------------+
//
// Author:   Joan Fabrégat <joan@codeinc.fr>
// Date:     05/12/2017
// Time:     10:42
// Project:  ArrayAccess
//
namespace CodeInc\ArrayAccess;


/**
 * Class AbstractArrayAccess
 *
 * @package CodeInc\ArrayAccess
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
abstract class AbstractArrayAccess implements \ArrayAccess, \IteratorAggregate {
	use ArrayAccessTrait;

	/**
	 * @return \ArrayIterator
	 */
	public function getIterator():\ArrayIterator {
		return new \ArrayIterator($this->getAccessibleArray());
	}
}