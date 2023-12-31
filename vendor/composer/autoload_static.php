<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2007b1eb2f33aaaa270db6559feca9b6
{
    public static $files = array (
        'da253f61703e9c22a5a34f228526f05a' => __DIR__ . '/..' . '/wixel/gump/gump.class.php',
    );

    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'UTB\\' => 4,
        ),
        'R' => 
        array (
            'Rakit\\Validation\\' => 17,
        ),
        'G' => 
        array (
            'GUMP\\' => 5,
        ),
        'D' => 
        array (
            'Dcblogdev\\PdoWrapper\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'UTB\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Rakit\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/rakit/validation/src',
        ),
        'GUMP\\' => 
        array (
            0 => __DIR__ . '/..' . '/wixel/gump/src',
        ),
        'Dcblogdev\\PdoWrapper\\' => 
        array (
            0 => __DIR__ . '/..' . '/dcblogdev/pdo-wrapper/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2007b1eb2f33aaaa270db6559feca9b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2007b1eb2f33aaaa270db6559feca9b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2007b1eb2f33aaaa270db6559feca9b6::$classMap;

        }, null, ClassLoader::class);
    }
}
