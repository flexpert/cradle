<?php
namespace Cradle\Core;

/**
 * Acts as a manager for a view file.
 */
class View
{
	// Holds the file path to the view file
	private $filePath;

	// Holds the parameters to be passed into the view file for dynamic page rendering
	private $parameters;

	public function __construct(string $file, array $param = [])
	{
		$this->filePath = $file;
		$this->parameters = $param;
	}

	/**
	 * Gets the file path of the view file relative to the document root.
	 */
	public function getFilePath(): string
	{
		return $_SERVER['DOCUMENT_ROOT'] . '/application/views/' . $this->filePath . '.php';
	}

	/**
	 * Gets the parameters to be passed into the view file.
	 */
	public function getParameters(): array
	{
		return $this->parameters;
	}
}
