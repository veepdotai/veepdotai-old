<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Helper;

use WBW\Library\Types\Exception\IntegerArgumentException;

/**
 * Integer helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Helper
 */
class IntegerHelper {

    /**
     * Factorial.
     *
     * @param int|null $n The number.
     * @return float|null Returns the factorial.
     */
    public static function factorial(?int $n): ?float {

        if (null === $n || $n < 0) {
            return null;
        }

        if (0 === $n) {
            return 1;
        }

        $result = $n;
        while (1 < --$n) {
            $result *= $n;
        }

        return $result;
    }

    /**
     * Determine if a value is an integer.
     *
     * @param mixed $value The value.
     * @return void
     * @throws IntegerArgumentException Throws an integer argument exception if the value is not of expected type.
     */
    public static function isInteger($value): void {
        if (false === is_integer($value)) {
            throw new IntegerArgumentException($value);
        }
    }

    /**
     * Parse a boolean.
     *
     * @param bool|null $value The boolean value.
     * @return int Returns 1 in case of success, 0 otherwise.
     */
    public static function parseBoolean(?bool $value): int {
        return $value === true ? 1 : 0;
    }

    /**
     * Parse a string.
     *
     * @param string|null $value The string value.
     * @return int|null Returns the integer in case of success, null otherwise.
     * @throws IntegerArgumentException Throws an integer argument exception if the string value does not represent an integer.
     */
    public static function parseString(?string $value): ?int {

        if (null === $value) {
            return null;
        }

        if (0 === preg_match("/^-?[0-9]+$/", $value)) {
            throw new IntegerArgumentException($value);
        }

        return intval($value);
    }

    /**
     * Summation.
     *
     * @param int|null $n The number.
     * @return float|null Returns the summation.
     */
    public static function summation(?int $n): ?float {

        if (null === $n) {
            return null;
        }

        $q = $n * ($n + 1);

        return $q / 2;
    }

    /**
     * Usort callback.
     *
     * @param bool $asc ASC ?
     * @return callable Returns the usort callback.
     */
    public static function usortCallback(bool $asc = true): callable {

        return function(?int $int1, ?int $int2) use ($asc): int {

            $result = null;

            if ($int1 < $int2) {
                $result = -1;
            }
            if ($int1 === $int2) {
                $result = 0;
            }
            if ($int1 > $int2) {
                $result = 1;
            }

            return true === $asc ? $result : -$result;
        };
    }
}
