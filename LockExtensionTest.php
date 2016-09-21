<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Tests\Admin\Extension;


class LockExtensionTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigureFormFields()
    {
        $this->admin = $this->prophesize('Sonata\AdminBundle\AbstractAdmin');
	$this->admin->reveal();
    }
}
