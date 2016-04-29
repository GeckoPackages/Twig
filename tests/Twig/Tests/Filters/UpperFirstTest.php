<?php

/*
 * This file is part of the GeckoPackages.
 *
 * (c) GeckoPackages https://github.com/GeckoPackages
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * @requires PHPUnit 5.2
 *
 * @author SpacePossum
 *
 * @internal
 */
final class UpperFirstTest extends AbstractFilterTest
{
    public function testUpperFirst()
    {
        $this->callFilter($this->getEnvironment(), null);
    }

    public function testUpperFirstInvalidInput()
    {
        $this->expectException(\Twig_Error_Runtime::class);
        $this->expectExceptionMessageRegExp('#^Invalid input, expected string got \"stdClass\".$#');

        $this->callFilter($this->getEnvironment(), new \stdClass());
    }
}
