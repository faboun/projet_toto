<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a95a97227a788bf7c2a8103279855e9
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whatsma\\ZodiacSign\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whatsma\\ZodiacSign\\' => 
        array (
            0 => __DIR__ . '/..' . '/whatsma/zodiacsign/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a95a97227a788bf7c2a8103279855e9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a95a97227a788bf7c2a8103279855e9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}