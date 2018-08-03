<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3
 * Time: 15:54
 */

namespace WPHP\Core\AbstractInterface;

/**
 * 单例模式
 * Trait Singleton
 * @package WPHP\Core\AbstractInterface
 */
trait Singleton
{
    private static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance(...$args)
    {
        if (!is_null(self::$instance)) {
            self::$instance = new static(...$args);
        }

        return self::$instance;
    }
}