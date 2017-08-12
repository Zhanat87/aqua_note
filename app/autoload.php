<?php

//use Doctrine\Common\Annotations\AnnotationRegistry;
//use Composer\Autoload\ClassLoader;
//
//error_reporting(error_reporting() & ~E_USER_DEPRECATED);
//
///**
// * @var ClassLoader $loader
// */
//$loader = require __DIR__.'/../vendor/autoload.php';
//
//AnnotationRegistry::registerLoader(array($loader, 'loadClass'));
//
//return $loader;


// https://stackoverflow.com/questions/35741970/semantical-error-happens-when-using-behat-only
use Doctrine\Common\Annotations\AnnotationRegistry;

require_once dirname( __DIR__ ).'/vendor/composer/autoload_real.php';

$loader = ComposerAutoloaderInit5138c7233a95d024a6caef40efc9d592::getLoader();

AnnotationRegistry::registerFile( dirname( __DIR__ ).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php' );
AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;