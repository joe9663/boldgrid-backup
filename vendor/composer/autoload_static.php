<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8809c4959d5c69d35f1a4ec0363597e7
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Ifsnop\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ifsnop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ifsnop/mysqldump-php/src/Ifsnop',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8809c4959d5c69d35f1a4ec0363597e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8809c4959d5c69d35f1a4ec0363597e7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
