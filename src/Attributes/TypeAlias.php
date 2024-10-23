<?php

namespace Filecage\GraphQL\Annotations\Attributes;

#[\Attribute]
/**
 * To name types or returns where they can't be named automatically (e.g. in union types)
 */
final class TypeAlias {

    /**
     * @param string $typeAlias
     */
    function __construct (public readonly string $typeAlias) {}
}