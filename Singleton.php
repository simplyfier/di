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
 * The Singleton
 * -----------------------------------------------------------------------.
 *
 * Simply extends this Singleton class if you wish to use the Singleton
 * pattern of programming in your project
 *
 * @since 0.5.0
 */
class Singleton
{
    private static $instances = [];

    /**
     * Constructor method.
     *
     * @since 0.5.0
     */
    protected function __construct()
    {
        //
    }

    /**
     * Avoid cloning.
     *
     * @since 0.5.0
     */
    protected function __clone()
    {
        //
    }

    /**
     * Avoid unserialization.
     *
     * @since 0.5.0
     */
    public function __wakeup()
    {
        throw new Exception('Cannot unserialize singleton');
    }

    /**
     * Get the instance of desired class.
     *
     * @since 0.5.0
     */
    public static function getInstance()
    {
        $class = get_called_class(); // late-static-bound class name
        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = new static();
        }

        return self::$instances[$class];
    }
}
