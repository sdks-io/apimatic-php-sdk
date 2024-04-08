<?php

declare(strict_types=1);

/*
 * ApimaticAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApimaticAPILib\Models\Builders;

use ApimaticAPILib\Models\Attributes;
use Core\Utils\CoreHelper;

/**
 * Builder for model Attributes
 *
 * @see Attributes
 */
class AttributesBuilder
{
    /**
     * @var Attributes
     */
    private $instance;

    private function __construct(Attributes $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attributes Builder object.
     */
    public static function init(string $id): self
    {
        return new self(new Attributes($id));
    }

    /**
     * Initializes a new attributes object.
     */
    public function build(): Attributes
    {
        return CoreHelper::clone($this->instance);
    }
}
