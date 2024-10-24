<?php

namespace Filecage\GraphQL\Annotations\Attributes;

use BackedEnum;
use UnitEnum;

#[\Attribute]
/**
 * To name types or returns where they can't be named automatically (e.g. in union types)
 */
final class TypeAlias {

    /**
     * @param string|UnitEnum $typeAlias
     */
    function __construct (public readonly string|UnitEnum $typeAlias) {}

    function getTypeAlias () : string {
        if ($this->typeAlias instanceof BackedEnum) {
            $typeAlias = $this->typeAlias->value;

            if (is_string($typeAlias)) {
                return $typeAlias;
            }
        }

        if ($this->typeAlias instanceof UnitEnum) {
            return $this->typeAlias->name;
        }

        return $this->typeAlias;
    }
}