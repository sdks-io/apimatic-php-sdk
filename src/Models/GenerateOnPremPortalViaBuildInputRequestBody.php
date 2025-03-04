<?php

declare(strict_types=1);

/*
 * ApimaticAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApimaticAPILib\Models;

use stdClass;

class GenerateOnPremPortalViaBuildInputRequestBody implements \JsonSerializable
{
    /**
     * @var string
     */
    private $file;

    /**
     * @param string $file
     */
    public function __construct(string $file)
    {
        $this->file = $file;
    }

    /**
     * Returns File.
     * The input file to the Portal Generator. Must contain the build file.
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * Sets File.
     * The input file to the Portal Generator. Must contain the build file.
     *
     * @required
     * @maps file
     */
    public function setFile(string $file): void
    {
        $this->file = $file;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['file'] = $this->file;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
