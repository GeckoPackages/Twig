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
final class UpperRomanTest extends AbstractFilterTest
{
    public function testInvalidMatchModeString()
    {
        $this->expectException(\Twig_Error_Runtime::class);
        $this->expectExceptionMessageRegExp('#^Unsupported match mode string\#invalid.$#');

        $this->callFilter('XX', 'invalid');
    }

    public function testInvalidMatchModeObject()
    {
        $this->expectException(\Twig_Error_Runtime::class);
        $this->expectExceptionMessageRegExp('#^Unsupported match mode stdClass.$#');

        $this->callFilter('XX', new \stdClass());
    }

    public function testInvalidInputObject()
    {
        $this->expectException(\Twig_Error_Runtime::class);
        $this->expectExceptionMessageRegExp('#^Invalid input, expected string got \"stdClass\".$#');

        $this->callFilter(new \stdClass(), 'strict');
    }
}
