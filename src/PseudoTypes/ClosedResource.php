<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\PseudoTypes;

use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\PseudoType;
use phpDocumentor\Reflection\Types\Resource_;

/**
 * Value Object representing the 'closed-resource' Type.
 *
 * @psalm-immutable
 */
final class ClosedResource extends Resource_ implements PseudoType
{
    public function underlyingType(): Type
    {
        return new Resource_();
    }

    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString(): string
    {
        return 'closed-resource';
    }
}
