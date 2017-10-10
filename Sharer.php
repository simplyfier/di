<?php
/**
 * StupidlySimple Framework - A PHP Framework For Lazy Developers.
 *
 * Copyright (c) 2017 Fariz Luqman
 *
 * Permission is hereby granted, free of charge, to any person obtaining a
 * copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
 * CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @author      Fariz Luqman <fariz.fnb@gmail.com>
 * @copyright   2017 Fariz Luqman
 * @license     MIT
 *
 * @link        https://stupidlysimple.github.io/
 */

namespace Simplyfier\DI;

/**
 *  The Sharer
 * -----------------------------------------------------------------------.
 *
 * Sharer are also used for dependency injection (see Core\App). Sharer
 * is used to import variables directly into the current symbol table from
 * the array. It is also used for dependency injection to the template
 * files.
 *
 * Simply use extract(Core\Sharer::get()); to import the variables.
 *
 * @since 0.5.0
 */
class Sharer
{
    /**
     * The array of objects / variables. The array key is the variable name,
     * while the array values are references to objects / variables.
     *
     * @var object
     * @static
     *
     * @since 0.5.0
     */
    public static $store = null;

    /**
     * Stores references to variable or object to the static $store.
     *
     * @param string $key    the variable name
     * @param mixed  &$value reference to variable / object
     *
     * @static
     *
     * @since 0.5.0
     */
    public static function share($key, &$value)
    {
        self::$store[$key] = &$value;
    }

    /**
     * Get data stored into $store.
     *
     * @return array $store	the array of data
     *
     * @static
     *
     * @since 0.5.0
     */
    public static function get()
    {
        return self::$store;
    }
}
