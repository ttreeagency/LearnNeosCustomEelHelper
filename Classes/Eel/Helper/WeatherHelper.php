<?php

namespace Ttree\LearnNeosCustomEelHelper\Eel\Helper;

use Neos\Eel\ProtectedContextAwareInterface;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Utility\Now;

/**
 * @Flow\Proxy(false)
 */
class WeatherHelper implements ProtectedContextAwareInterface
{
    /**
     * @return array
     */
    public function today(): array
    {
        return [
            'today' => new Now()
        ];
    }

    /**
     * All methods are considered safe
     *
     * @param string $methodName
     * @return boolean
     */
    public function allowsCallOfMethod($methodName)
    {
        return true;
    }
}
