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
 * @author SpacePossum
 *
 * @internal
 */
final class FilePermissionsTest extends AbstractFilterTest
{
    public function testFileNotExists()
    {
        $this->expectException(\Twig_Error_Runtime::class);
        $this->expectExceptionMessageRegExp('#^Cannot determine permissions for "invalid".$#');

        $this->callFilter('invalid');
    }

    /**
     * @requires PHPUnit 5.2
     */
    public function testSymLink()
    {
        $symLink = $this->getAssetsDir().'test_link';
        if (!file_exists($symLink)) {
            symlink($this->getAssetsDir().'test_file_link_target.txt', $symLink); // make symlink
        }

        $result = $this->callFilter($symLink);
        unlink($symLink);
        $this->assertSame('lrwxrwxrwx', $result);
    }
}
