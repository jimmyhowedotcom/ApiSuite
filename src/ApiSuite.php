<?php namespace JimmyHoweDotCom\ApiSuite;

use JimmyHoweDotCom\ApiSuite\File\FileReader;
use JimmyHoweDotCom\ApiSuite\Xml\XmlReader;
use JimmyHoweDotCom\ApiSuite\Xml\XmlReaderException;

/**
 * Class ApiSuite
 *
 * @package JimmyHoweDotCom\ApiSuite
 */
class ApiSuite
{
	/**
	 * @param $xml
	 *
	 * @return XmlReader
	 * @throws XmlReaderException
	 */
	public static function Xml( $xml )
	{
		return new XmlReader($xml);
	}

	/**
	 * @param string $path
	 *
	 * @return FileReader
	 */
	public static function File( string $path )
	{
		return new FileReader($path);
	}
}