<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f49b4bc859dbdbbd8755c5d16a16765
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pingpp\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pingpp\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f49b4bc859dbdbbd8755c5d16a16765::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f49b4bc859dbdbbd8755c5d16a16765::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}