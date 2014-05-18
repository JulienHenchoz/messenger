<?php
namespace Vanilla\Messenger\Validator;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Fabien Udriot <fabien.udriot@typo3.org>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
use Vanilla\Messenger\Exception\InvalidEmailFormatException;

/**
 * Validate Email in the context of SwiftMailer
 */
class EmailValidator {

	/**
	 * Validate emails to be used in the SwiftMailer framework
	 *
	 * @throws InvalidEmailFormatException
	 * @param $emails
	 * @return boolean
	 */
	public function validate($emails) {
		foreach ($emails as $email => $name) {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$message = sprintf('Email provided is not valid, given value "%s"', $email);
				throw new InvalidEmailFormatException($message, 1350297165);
			}
			if (strlen($name) <= 0) {
				$message = sprintf('Name should not be empty, given value "%s"', $name);
				throw new InvalidEmailFormatException($message, 1350297170);
			}
		}
		return TRUE;
	}
}
?>