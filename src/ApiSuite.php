<?php namespace JimmyHoweDotCom\ApiSuite;

use JimmyHoweDotCom\ApiSuite\File\FileReader;
use JimmyHoweDotCom\ApiSuite\Xml\XmlReader;
use JimmyHoweDotCom\ApiSuite\Xml\XmlReaderException;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;

/**
 * Class ApiSuite
 *
 * @package JimmyHoweDotCom\ApiSuite
 */
class ApiSuite
{
	/**
	 * @param $data
	 *
	 * @return DataReader
	 */
	public static function Data($data)
	{
		return new DataReader($data);
	}

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

	/**
	 * @param string $root
	 *
	 * @return Filesystem
	 */
	public static function Disk($root = "/")
	{
		return new Filesystem(new Local($root));
	}
}