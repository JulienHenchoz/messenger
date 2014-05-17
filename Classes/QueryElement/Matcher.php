<?php
namespace Vanilla\Messenger\QueryElement;
/***************************************************************
*  Copyright notice
*
*  (c) 2013 Fabien Udriot <fabien.udriot@typo3.org>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
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

/**
 * A class for handling matches
 */
class Matcher {

	/**
	 * @var string
	 */
	protected $searchTerm = '';

	/**
	 * Contains associative values used for finding matches array($fieldName => $value)
	 *
	 * @var array
	 */
	protected $matches = array();

	/**
	 * Constructs a new Matcher
	 *
	 * @param array $matches associative array($field => $value)
	 */
	public function __construct($matches = array()) {
		$this->matches = $matches;
	}

	/**
	 * @param string $searchTerm
	 * @return \Vanilla\Messenger\QueryElement\Matcher
	 */
	public function setSearchTerm($searchTerm) {
		$this->searchTerm = $searchTerm;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSearchTerm() {
		return $this->searchTerm;
	}

	/**
	 * @return array
	 */
	public function getMatches() {
		return $this->matches;
	}

	/**
	 * @param array $matches
	 * @return \Vanilla\Messenger\QueryElement\Matcher
	 */
	public function setMatches($matches) {
		$this->matches = $matches;
		return $this;
	}

	/**
	 * Add a value to be used for filtering a given field.
	 *
	 * @param string $field
	 * @param string $value
	 * @return \Vanilla\Messenger\QueryElement\Matcher
	 */
	public function addMatch($field, $value) {
		if ($this->tcaService->hasRelationManyToMany($field)) {
			if (empty($this->matches[$field])) {
				$this->matches[$field] = array();
			}
			$this->matches[$field][] = $value;
		} else {
			$this->matches[$field] = $value;
		}
		return $this;
	}
}

?>