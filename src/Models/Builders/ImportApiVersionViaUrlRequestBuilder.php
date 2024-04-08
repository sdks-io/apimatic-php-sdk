<?php

declare(strict_types=1);

/*
 * ApimaticAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApimaticAPILib\Models\Builders;

use ApimaticAPILib\Models\ImportApiVersionViaUrlRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model ImportApiVersionViaUrlRequest
 *
 * @see ImportApiVersionViaUrlRequest
 */
class ImportApiVersionViaUrlRequestBuilder
{
    /**
     * @var ImportApiVersionViaUrlRequest
     */
    private $instance;

    private function __construct(ImportApiVersionViaUrlRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new import api version via url request Builder object.
     */
    public static function init(string $versionOverride, string $url): self
    {
        return new self(new ImportApiVersionViaUrlRequest($versionOverride, $url));
    }

    /**
     * Initializes a new import api version via url request object.
     */
    public function build(): ImportApiVersionViaUrlRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
