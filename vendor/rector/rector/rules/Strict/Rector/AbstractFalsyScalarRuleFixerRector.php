<?php

declare (strict_types=1);
namespace Rector\Strict\Rector;

use Rector\Core\Contract\Rector\ConfigurableRectorInterface;
use Rector\Core\Rector\AbstractRector;
use RectorPrefix20211020\Webmozart\Assert\Assert;
/**
 * @see \Rector\Tests\Strict\Rector\BooleanNot\BooleanInBooleanNotRuleFixerRector\BooleanInBooleanNotRuleFixerRectorTest
 */
abstract class AbstractFalsyScalarRuleFixerRector extends \Rector\Core\Rector\AbstractRector implements \Rector\Core\Contract\Rector\ConfigurableRectorInterface
{
    /**
     * @var string
     */
    public const TREAT_AS_NON_EMPTY = 'treat_as_non_empty';
    /**
     * @var bool
     */
    protected $treatAsNonEmpty = \false;
    /**
     * @param array<string, mixed> $configuration
     */
    public function configure(array $configuration) : void
    {
        $treatAsNonEmpty = $configuration[self::TREAT_AS_NON_EMPTY] ?? \false;
        \RectorPrefix20211020\Webmozart\Assert\Assert::boolean($treatAsNonEmpty);
        $this->treatAsNonEmpty = $treatAsNonEmpty;
    }
}
