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
final class LowerRomanTest extends AbstractFilterTest
{
    public function testMatchModeInvalid()
    {
        $this->expectException(\Twig_Error_Runtime::class);
        $this->expectExceptionMessageRegExp('#^Unsupported match mode string\#invalid.$#');

        $this->callFilter('IV', 'invalid');
    }
}
