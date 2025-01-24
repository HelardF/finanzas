<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite11288fccffd7660033da4b052d77974
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite11288fccffd7660033da4b052d77974::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite11288fccffd7660033da4b052d77974::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite11288fccffd7660033da4b052d77974::$classMap;

        }, null, ClassLoader::class);
    }
}
