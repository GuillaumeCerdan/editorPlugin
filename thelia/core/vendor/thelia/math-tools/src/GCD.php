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
 * Class GCD
 * @package Thelia\Math
 * @author Benjamin Perche <bperche@openstudio.com>
 */
class GCD
{
    public static function getGCD($numberA, $numberB)
    {
        if (! self::isInteger($numberA) | ! self::isInteger($numberB)) {
            throw new \InvalidArgumentException(
                "GCD number must be an integer"
            );
        }

        if (function_exists("gmp_gcd")) {
            return gmp_intval(gmp_gcd($numberA, $numberB));
        }

        if ($numberA == 0 || $numberB == 0) {
            return max(abs($numberA), abs($numberB));
        }
        
        $r = $numberA % $numberB;

        return ($r != 0) ? self::getGCD($numberB, $r) : abs($numberB);
    }

    public static function isInteger($var)
    {
        if (is_int($var)) {
            // the most obvious test
            return true;
        } elseif (is_numeric($var)) {
            // cast to string first
            return ctype_digit((string)$var);
        }
        return false;
    }
}
