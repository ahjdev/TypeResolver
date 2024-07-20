<?php
/*
 * This file is part of phpDocumentor.
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @link      http://phpdoc.org
 *
 */

declare(strict_types=1);

namespace phpDocumentor\Reflection\PseudoTypes;

use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\Types\Integer;
use phpDocumentor\Reflection\PseudoTypes\AggregatedPseudoType;

/** @psalm-immutable */
final class IntMask  extends AggregatedPseudoType
{
    public function __construct(array $types)
    {
        parent::__construct($types, ', ');
    }

    public function underlyingType(): Type
    {
        return new Integer();
    }

    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString(): string
    {
        return 'int-mask<' . parent::__toString() . '>';
    }
}
