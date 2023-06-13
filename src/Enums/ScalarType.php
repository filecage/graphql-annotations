<?php

namespace Filecage\GraphQL\Annotations\Enums;

enum ScalarType {
    case INT;
    case FLOAT;
    case STRING;
    case BOOLEAN;
    case ID;
}