<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class Product_Industry_ComposerStaticInit75f95ca3778976eb5c1bf35fe42ac3d4
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPTRT\\Customize\\Section\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPTRT\\Customize\\Section\\' => 
        array (
            0 => __DIR__ . '/..' . '/wptrt/customize-section-button/src',
        ),
    );

    public static function product_industry_getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit75f95ca3778976eb5c1bf35fe42ac3d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75f95ca3778976eb5c1bf35fe42ac3d4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
