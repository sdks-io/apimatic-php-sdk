<?php

declare(strict_types=1);

/*
 * ApimaticAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApimaticAPILib\Models\Builders;

use ApimaticAPILib\Models\ImportAPIViaFileRequestBody;
use Core\Utils\CoreHelper;

/**
 * Builder for model ImportAPIViaFileRequestBody
 *
 * @see ImportAPIViaFileRequestBody
 */
class ImportAPIViaFileRequestBodyBuilder
{
    /**
     * @var ImportAPIViaFileRequestBody
     */
    private $instance;

    private function __construct(ImportAPIViaFileRequestBody $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new import apivia file request body Builder object.
     */
    public static function init(string $file): self
    {
        return new self(new ImportAPIViaFileRequestBody($file));
    }

    /**
     * Initializes a new import apivia file request body object.
     */
    public function build(): ImportAPIViaFileRequestBody
    {
        return CoreHelper::clone($this->instance);
    }
}
