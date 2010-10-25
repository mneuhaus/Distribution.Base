<?php
declare(ENCODING = 'utf-8');
namespace F3\FLOW3\Build;

/*                                                                        *
 * This script belongs to the FLOW3 build system.                         *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License as published by the Free   *
 * Software Foundation, either version 3 of the License, or (at your      *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        *
 * You should have received a copy of the GNU General Public License      *
 * along with the script.                                                 *
 * If not, see http://www.gnu.org/licenses/gpl.html                       *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

require_once('PHPUnit/Autoload.php');
@include_once('vfsStream/vfsStreamWrapper.php');

if (!class_exists('vfsStreamWrapper')) {
	exit("\nFLOW3 Bootstrap Error: The functional test bootstrap requires vfsStream to be installed (e.g. via PEAR). Please also make sure that it is accessible via the PHP include path.\n\n");
}


$_SERVER['FLOW3_ROOTPATH'] = dirname(__FILE__) . '/../../';
$_SERVER['FLOW3_WEBPATH'] = dirname(__FILE__) . '/../../Web/';

require_once($_SERVER['FLOW3_ROOTPATH'] . 'Packages/Framework/Testing/Classes/BaseTestCase.php');
require_once($_SERVER['FLOW3_ROOTPATH'] . 'Packages/Framework/Testing/Classes/FunctionalTestCase.php');
?>