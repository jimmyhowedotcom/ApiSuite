<?php namespace JimmyHoweDotCom\ApiSuite\File;

use JimmyHoweDotCom\ApiSuite\Xml\XmlReader;
use JimmyHoweDotCom\ApiSuite\Xml\XmlReaderException;

/**
 * Class FileReader
 *
 * @package JimmyHoweDotCom\ApiSuite
 */
class FileReader
{
	/**
	 * @var string
	 */
	private $path;

	/**
	 * FileReader constructor.
	 *
	 * @param string $path
	 */
	public function __construct( string $path )
	{
		$this->path = $path;
	}

	/**
	 * @return XmlReader
	 * @throws XmlReaderException
	 */
	public function asXml()
	{
		return new XmlReader($this->loadFileFromPath());
	}

	/**
	 * @return bool|string
	 */
	private function loadFileFromPath()
	{
		return file_get_contents($this->path);
	}
}