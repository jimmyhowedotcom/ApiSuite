<?php namespace JimmyHoweDotCom\ApiSuite;

use Illuminate\Support\Collection;

/**
 * Class ApiSuiteCollection
 *
 * @package JimmyHoweDotCom\ApiSuite
 */
class ApiSuiteCollection extends Collection
{
	/**
	 * @param string $prepend
	 *
	 * @return ApiSuiteCollection
	 */
	public function toDot( $prepend = '' )
	{
		return new ApiSuiteCollection(array_dot($this->toArray(), $prepend));
	}
}