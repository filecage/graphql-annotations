<?php

namespace Filecage\GraphQL\Annotations\Attributes;

use Filecage\GraphQL\Annotations\Enums\ScalarType;

#[\Attribute(\Attribute::IS_REPEATABLE | \Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::TARGET_PROPERTY)]
/**
 * To clarify array contents
 */
final class Contains {

    /**
     * @param ScalarType|class-string $type
     * @param bool $allowsNull
     */
    function __construct (public readonly ScalarType|string $type, public readonly bool $allowsNull = false) {}

}