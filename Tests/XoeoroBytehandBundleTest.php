<?php

namespace Xoeoro\BytehandBundle\Tests;

use Xoeoro\BytehandBundle\XoeoroBytehandBundle;
/**
 * Xoeoro Bytehand bundle test.
 *
 * @author xoeoro <xoeoro@gmail.com>
 */
class XoeoroBytehandBundleTest extends \PHPUnit_Framework_TestCase
{
    public function testBundle()
    {
        $bundle = new XoeoroBytehandBundle();
        $this->assertInstanceOf('Symfony\Component\HttpKernel\Bundle\Bundle', $bundle);
    }
}
