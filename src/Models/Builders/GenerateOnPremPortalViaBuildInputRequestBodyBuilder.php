<?php

declare(strict_types=1);

/*
 * ApimaticAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApimaticAPILib\Models\Builders;

use ApimaticAPILib\Models\GenerateOnPremPortalViaBuildInputRequestBody;
use Core\Utils\CoreHelper;

/**
 * Builder for model GenerateOnPremPortalViaBuildInputRequestBody
 *
 * @see GenerateOnPremPortalViaBuildInputRequestBody
 */
class GenerateOnPremPortalViaBuildInputRequestBodyBuilder
{
    /**
     * @var GenerateOnPremPortalViaBuildInputRequestBody
     */
    private $instance;

    private function __construct(GenerateOnPremPortalViaBuildInputRequestBody $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new generate on prem portal via build input request body Builder object.
     */
    public static function init(string $file): self
    {
        return new self(new GenerateOnPremPortalViaBuildInputRequestBody($file));
    }

    /**
     * Initializes a new generate on prem portal via build input request body object.
     */
    public function build(): GenerateOnPremPortalViaBuildInputRequestBody
    {
        return CoreHelper::clone($this->instance);
    }
}
