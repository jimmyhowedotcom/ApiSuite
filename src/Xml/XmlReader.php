<?php namespace JimmyHoweDotCom\ApiSuite\Xml;

use JimmyHoweDotCom\ApiSuite\ApiSuiteCollection;
use JimmyHoweDotCom\ApiSuite\Xml\Support\DescribesXml;
use SimpleXMLElement;

/**
 * Class XmlReader
 *
 * @package JimmyHoweDotCom\ApiSuite
 */
class XmlReader
{
	/**
	 * @var SimpleXMLElement
	 */
	private $xml;

	/**
	 * XmlReader constructor.
	 *
	 * @param $xml
	 *
	 * @throws XmlReaderException
	 */
	public function __construct( $xml )
	{
		$this->xml = $this->validateXml($xml);
	}

	/**
	 * @param $xml
	 *
	 * @return \SimpleXMLElement
	 * @throws XmlReaderException
	 */
	private function validateXml( $xml )
	{
		$xml = $this->loadXmlAndSuppressErrors($xml);

		if ( ! $xml )
		{
			throw new XmlReaderException();
		}

		return $xml;
	}

	/**
	 * @param $xml
	 * @param $class
	 * @param $options
	 *
	 * @return mixed
	 */
	private function loadXmlAndSuppressErrors( $xml, $class = "SimpleXMLElement", $options = LIBXML_NOCDATA )
	{
		return @simplexml_load_string($xml, $class, $options);
	}

	/**
	 * @return SimpleXMLElement
	 */
	public function toObject()
	{
		return new SimpleXMLElement($this->xml);
	}

	/**
	 * @return ApiSuiteCollection
	 */
	public function toCollection()
	{
		return new ApiSuiteCollection($this->toArray());
	}

	/**
	 * @return array
	 */
	public function toArray()
	{
		return json_decode(json_encode($this->xml), true);
	}

	/**
	 * @param $function
	 *
	 * @return mixed
	 */
	public function chain( $function )
	{
		return $function($this);
	}

	/**
	 * @param string $prepend
	 *
	 * @return ApiSuiteCollection
	 */
	public function toDot($prepend = '')
	{
		return $this->toCollection()->toDot($prepend);
	}
}