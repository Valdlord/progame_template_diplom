<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit600cad3988935a561d12eb3f75bacaee
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mvs\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'V' => 
        array (
            'Valitron\\' => 9,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mvs\\' => 
        array (
            0 => __DIR__ . '/..' . '/mvs',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Valitron\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit600cad3988935a561d12eb3f75bacaee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit600cad3988935a561d12eb3f75bacaee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit600cad3988935a561d12eb3f75bacaee::$classMap;

        }, null, ClassLoader::class);
    }
}
