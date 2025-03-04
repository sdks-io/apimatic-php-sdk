<?php

declare(strict_types=1);

/*
 * ApimaticAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApimaticAPILib\Models\Builders;

use ApimaticAPILib\Models\ValidateAPIViaFileRequestBody;
use Core\Utils\CoreHelper;

/**
 * Builder for model ValidateAPIViaFileRequestBody
 *
 * @see ValidateAPIViaFileRequestBody
 */
class ValidateAPIViaFileRequestBodyBuilder
{
    /**
     * @var ValidateAPIViaFileRequestBody
     */
    private $instance;

    private function __construct(ValidateAPIViaFileRequestBody $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new validate apivia file request body Builder object.
     */
    public static function init(string $file): self
    {
        return new self(new ValidateAPIViaFileRequestBody($file));
    }

    /**
     * Initializes a new validate apivia file request body object.
     */
    public function build(): ValidateAPIViaFileRequestBody
    {
        return CoreHelper::clone($this->instance);
    }
}
