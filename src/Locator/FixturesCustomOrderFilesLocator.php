<?php

declare(strict_types=1);

namespace App\Locator;

use Hautelook\AliceBundle\FixtureLocatorInterface;
use Nelmio\Alice\IsAServiceTrait;

final class FixturesCustomOrderFilesLocator implements FixtureLocatorInterface
{
    use IsAServiceTrait;

    private $decoratedFixtureLocator;

    public function __construct(FixtureLocatorInterface $decoratedFixtureLocator)
    {
        $this->decoratedFixtureLocator = $decoratedFixtureLocator;
    }

    /**
     * Re-order the files found by the decorated finder.
     *
     * {@inheritdoc}
     */
    public function locateFiles(array $bundles, string $environment): array
    {
        $files = $this->decoratedFixtureLocator->locateFiles($bundles, $environment);

        // TODO: order the files found in whatever order you want

        // Warning: the order will only affect how the fixture definitions are merged. Indeed the order in which they
        // are instantiated afterwards by nelmio/alice may change due to handling the fixture dependencies and
        // circular references.
        $orderfiles = [];
        foreach ($files as $filename) {
            $arr = explode('/', $filename);
            $file = end($arr);

            if (preg_match('/all.ya?ml/i', $file)) {
                $orderfiles[] = $filename;
            }
        }

        return $orderfiles ?? $files;
    }
}
