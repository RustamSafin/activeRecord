<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit343126df682e2600528400e9e08261bb
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit343126df682e2600528400e9e08261bb::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
