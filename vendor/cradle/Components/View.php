<?php
namespace Cradle\Components;

/**
 * Acts as an abstract representation of a view file.
 */
class View
{
	/** @var string $filePath Holds the file path to the view file */
	protected $filePath;

	/** @var array $parameters Holds the parameters to be passed into the view file for dynamic page rendering */
	protected $parameters;

	public function __construct(string $file, array $param = [])
	{
		$this->filePath = $file;
		$this->parameters = $param;
	}

	/**
	 * Gets the file path of the view file relative to the document root.
	 * 
	 * @return string The complete file path to the view file
	 */
	public function getFilePath(): string
	{
		return VIEWS_DIR . "/{$this->filePath}.php";
	}

	/**
	 * Gets the parameters to be passed into the view file.
	 * 
	 * @return array The array of parameters to be passed into the view
	 */
	public function getParameters(): array
	{
		return $this->parameters;
	}
}