<?php namespace JimmyHoweDotCom\ApiSuite;

use JimmyHoweDotCom\ApiSuite\Xml\XmlReader;

/**
 * Class DataReader
 *
 * @package JimmyHoweDotCom\ApiSuite
 */
class DataReader
{
	/**
	 * @var
	 */
	private $data;

	/**
	 * DataReader constructor.
	 *
	 * @param $data
	 */
	public function __construct( $data )
	{
		$this->data = $data;
	}

	/**
	 * @param $xml
	 *
	 * @return XmlReader
	 * @throws Xml\XmlReaderException
	 */
	public function Xml( $xml )
	{
		return new XmlReader($xml);
	}
}