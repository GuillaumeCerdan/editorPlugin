<?php
/*************************************************************************************/
/*      This file is part of the Thelia package.                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : dev@thelia.net                                                       */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

use Thelia\Math\Number;

/**
 * Class NumberTest
 * @author Benjamin Perche <bperche@openstudio.com>
 */
class NumberTest extends PHPUnit_Framework_TestCase
{
    public function testMult()
    {
        $numberA = new Number('1');
        $numberB = $numberA->multiply('1.2393');

        $this->assertEquals(1.2393, $numberB->getNumber(-1));
    }

    public function testNumberAdd()
    {
        $numberA = new Number('1.99');
        $numberB = new Number('2.58');

        $numberC = $numberA->add($numberB);

        $this->assertEquals(4.57, $numberC->getNumber(-1));
    }

    public function testNumberSub()
    {
        $price = new Number('1.99');

        $subPrice = $price->sub('1.766');
        $this->assertEquals(0.22, $subPrice->getNumber());
        $this->assertEquals(1.99, $price->getNumber());
        $this->assertEquals(0.224, $subPrice->getNumber(3));
        $this->assertEquals(0.224, $subPrice->getNumber(-1));
    }

    public function testNumberDivideThenMultiply()
    {
        $price = new Number('3.99');

        $divPrice = $price->divide('1.2');
        $this->assertEquals(3.33, $divPrice->getNumber());

        $mulPrice = $divPrice->multiply('1.2');
        $this->assertEquals(3.99, $mulPrice->getNumber());
    }
}
 