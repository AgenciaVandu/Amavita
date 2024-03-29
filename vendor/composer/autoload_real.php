<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit1a64e9bf25fdf33aa20d4e7c2efb1496
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit1a64e9bf25fdf33aa20d4e7c2efb1496', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit1a64e9bf25fdf33aa20d4e7c2efb1496', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit1a64e9bf25fdf33aa20d4e7c2efb1496::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit1a64e9bf25fdf33aa20d4e7c2efb1496::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire1a64e9bf25fdf33aa20d4e7c2efb1496($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire1a64e9bf25fdf33aa20d4e7c2efb1496($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
