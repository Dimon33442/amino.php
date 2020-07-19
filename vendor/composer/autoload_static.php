<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit46fde61436a147df0cebbb9fe0dbca15
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WebSocket\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WebSocket\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
            1 => __DIR__ . '/../..' . '/tests/mock',
        ),
    );

    public static $classMap = array (
        'WebSocket\\BadOpcodeException' => __DIR__ . '/../..' . '/lib/BadOpcodeException.php',
        'WebSocket\\BadUriException' => __DIR__ . '/../..' . '/lib/BadUriException.php',
        'WebSocket\\Base' => __DIR__ . '/../..' . '/lib/Base.php',
        'WebSocket\\Client' => __DIR__ . '/../..' . '/lib/Client.php',
        'WebSocket\\ConnectionException' => __DIR__ . '/../..' . '/lib/ConnectionException.php',
        'WebSocket\\Exception' => __DIR__ . '/../..' . '/lib/Exception.php',
        'WebSocket\\Server' => __DIR__ . '/../..' . '/lib/Server.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit46fde61436a147df0cebbb9fe0dbca15::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit46fde61436a147df0cebbb9fe0dbca15::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit46fde61436a147df0cebbb9fe0dbca15::$classMap;

        }, null, ClassLoader::class);
    }
}