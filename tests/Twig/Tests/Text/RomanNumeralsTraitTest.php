<?php

/*
 * This file is part of the GeckoPackages.
 *
 * (c) GeckoPackages https://github.com/GeckoPackages
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use GeckoPackages\Twig\Text\RomanNumeralsTrait;

/**
 * @requires PHPUnit 5.2
 *
 * @author SpacePossum
 *
 * @internal
 */
final class RomanNumeralsTraitTest extends \PHPUnit_Framework_TestCase
{
    use RomanNumeralsTrait;

    public function testInvalid()
    {
        $this->expectException(\Twig_Error_Runtime::class);
        $this->expectExceptionMessageRegExp('#^Unsupported match mode string\#__invalid__.$#');

        $this->numeralRomanMatchCallBack(
            'xx',
            '__invalid__',
            function () {
            }
        );
    }
}
