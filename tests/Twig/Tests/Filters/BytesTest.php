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
final class BytesTest extends AbstractFilterTest
{
    public function testFilterErrorSymbol1()
    {
        $this->expectException(\Twig_Error_Runtime::class);
        $this->expectExceptionMessageRegExp('#^Unsupported symbol \'c\'.$#');

        $this->callFilter($this->getEnvironment(), 1, 'c');
    }

    public function testFilterSymbol2()
    {
        $this->expectException(\Twig_Error_Runtime::class);
        $this->expectExceptionMessageRegExp('#^Binary symbol must be end with either \'b\' or \'B\', got "MiK".$#');

        $this->callFilter($this->getEnvironment(), 1, 'MiK');
    }

    public function testFilterSymbol3()
    {
        $this->expectException(\Twig_Error_Runtime::class);
        $this->expectExceptionMessageRegExp('#^Symbol must start with \'k\', \'K\', \'M\', \'G\', \'T\', \'P\', \'E\', \'Z\', or \'Y\', got "xiB".$#');

        $this->callFilter($this->getEnvironment(), 1, 'xiB');
    }

    public function testFilterSymbol4()
    {
        $this->expectException(\Twig_Error_Runtime::class);
        $this->expectExceptionMessageRegExp('#^Unsupported symbol "__invalid__".$#');

        $this->callFilter($this->getEnvironment(), 1, '__invalid__');
    }

    public function testFilterSymbol5()
    {
        $this->expectException(\Twig_Error_Runtime::class);
        $this->expectExceptionMessageRegExp('#^Symbol must be binary \(b|B\[x\]\) or SI and must end with either \'b\' or \'B\', got "bti".$#');

        $this->callFilter($this->getEnvironment(), 1, 'bti');
    }

    public function testFilterSymbol6()
    {
        $this->expectException(\Twig_Error_Runtime::class);
        $this->expectExceptionMessageRegExp('#^Binary symbol must be end with either \'b\' or \'B\', got "bi".$#');

        $this->callFilter($this->getEnvironment(), 1, 'bi');
    }
}
