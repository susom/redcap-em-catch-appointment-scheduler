<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit855be90368b79cf36866337319a61b85
{
    public static $files = array (
        '47b18101462cdeb25f661813113e3182' => __DIR__ . '/..' . '/kigkonsult/icalcreator/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'K' => 
        array (
            'Kigkonsult\\Icalcreator\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Kigkonsult\\Icalcreator\\' =>
            array(
                0 => __DIR__ . '/..' . '/kigkonsult/icalcreator/src',
                1 => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util',
                2 => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits',
            ),
    );

    public static $classMap = array(
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit855be90368b79cf36866337319a61b85::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit855be90368b79cf36866337319a61b85::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit855be90368b79cf36866337319a61b85::$classMap;

        }, null, ClassLoader::class);
    }
}
