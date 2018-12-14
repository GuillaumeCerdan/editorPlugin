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

namespace Thelia\Math;

/**
 * Class Number
 * @package Lovenunu\Math
 * @author Benjamin Perche <bperche@openstudio.com>
 */
class Number implements \Serializable, \JsonSerializable
{
    // Regex to find correct numbers
    const NUMBER_PATTERN = "#^\d+(\.\d+)?$#";

    // Internal variables
    protected $dividend;

    protected $divisor;

    // --- Object construction ------------
    public function __construct($number = null)
    {
        list($this->dividend, $this->divisor) = $this->retrieve($number);
    }

    protected function initialize($dividend, $divisor)
    {
        $this->dividend = $dividend;

        $this->divisor = $divisor;
    }

    // --- Number processor ------------

    protected function retrieve($number)
    {
        $dividend = 0;
        $divisor = 1;

        if ($number !== null) {
            if (is_scalar($number) && preg_match(static::NUMBER_PATTERN, $number)) {
                $dividend = (int) str_replace(".", "", $number);

                if (false !== $pos = strpos($number, ".")) {
                    $divisor = pow(10, strlen($number) - $pos - 1);
                }
            } elseif ($number instanceof $this) {
                $dividend = $number->getDividend();
                $divisor = $number->getDivisor();
            } else {
                throw new \InvalidArgumentException(
                    "The given price is not valid"
                );
            }
        }

        return array($dividend, $divisor);
    }

    protected function computeDividend($askedDividend, $askedDivisor, Number $number)
    {
        if ($number->divisor !== $askedDivisor) {
            $number->dividend *= $askedDivisor;
            $askedDividend *= $number->divisor;

            $number->divisor *= $askedDivisor;
        }

        return $askedDividend;
    }

    protected function simplify()
    {
        if (1 < $gcd = GCD::getGCD($this->dividend, $this->divisor)) {
            $this->dividend /= $gcd;
            $this->divisor /= $gcd;
        }
    }

    // --- Operations ------------

    public function add($number)
    {
        list($askedDividend, $askedDivisor) = $this->retrieve($number);
        $returnNumber = clone $this;

        $askedDividend = $this->computeDividend($askedDividend, $askedDivisor, $returnNumber);

        /**
         * If divisors are different, just multiply them
         */

        $returnNumber->dividend += $askedDividend;
        $returnNumber->simplify();

        return $returnNumber;
    }

    public function sub($number)
    {
        list($askedDividend, $askedDivisor) = $this->retrieve($number);
        $returnNumber = clone $this;

        $askedDividend = $this->computeDividend($askedDividend, $askedDivisor, $returnNumber);

        /**
         * If divisors are different, just multiply them
         */

        $returnNumber->dividend -= $askedDividend;
        $returnNumber->simplify();

        return $returnNumber;
    }

    public function multiply($number)
    {
        list($askedDividend, $askedDivisor) = $this->retrieve($number);
        $returnNumber = clone $this;

        $returnNumber->dividend *= $askedDividend;
        $returnNumber->divisor *= $askedDivisor;
        $returnNumber->simplify();

        return $returnNumber;
    }

    public function divide($number)
    {
        list($askedDividend, $askedDivisor) = $this->retrieve($number);
        $returnNumber = clone $this;

        $returnNumber->dividend *= $askedDivisor;
        $returnNumber->divisor *= $askedDividend;
        $returnNumber->simplify();

        return $returnNumber;
    }

    // --- Results ------------

    public function getNumber($roundPrecision = 2, $roundMode = PHP_ROUND_HALF_UP)
    {
        $value = $this->dividend / $this->divisor;

        if ($roundPrecision >= 0) {
            $value = round($value, $roundPrecision, $roundMode);
        }

        return $value;
    }

    // --- Accessor ------------

    /**
     * @return mixed
     */
    public function getDividend()
    {
        return $this->dividend;
    }

    /**
     * @return mixed
     */
    public function getDivisor()
    {
        return $this->divisor;
    }

    // --- Interfaces implementation ------------
    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     */
    public function serialize()
    {
        return json_encode(array($this->dividend, $this->divisor));
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     */
    public function unserialize($serialized)
    {
        list($this->dividend, $this->divisor) = json_decode($serialized, true);
    }

    /**
     * (PHP 5 &gt;= 5.4.0)<br/>
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     */
    function jsonSerialize()
    {
        return $this->serialize();
    }

}
