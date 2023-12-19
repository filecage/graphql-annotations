<?php

namespace Filecage\GraphQL\Annotations\Attributes;

#[\Attribute(\Attribute::TARGET_METHOD)]
/**
 * To promote a method to the schema that would otherwise be ignored
 */
final class Promote {

    /**
     * @param string|null $name The name in the GraphQL schema (as-is if unset)
     */
    function __construct (
        public readonly ?string $name = null
    ) {}

}