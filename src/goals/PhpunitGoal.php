<?php

/*
 * PHPUnit plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpunit\goals;

use Yii;
use hidev\handlers\BaseHandler;

/**
 * Goal for Phpunit.
 */
class PhpunitGoal extends \hidev\goals\DefaultGoal
{
    public $configFile = 'phpunit.xml.dist';

    public function init()
    {
        $this->setDeps($this->configFile);
    }

    public function options($action)
    {
        return array_merge(parent::options($action), ['force']);
    }

    public function actionMake()
    {
        return $this->actionRun();
    }

    public function actionRun()
    {
        return $this->passthru('phpunit');
    }

    public function actionGenfake($file)
    {
        $path = $this->buildFakePath($file);
        if (!$this->force && file_exists($path)) {
            Yii::warning("already exists: $path");
            return 1;
        }
        return $this->genFake($file, $path);
    }

    public function genFake($file, $path)
    {
        $text = $this->getView()->render('phpunit/fake.twig', [
            'class'         => $this->buildClass($file),
            'namespace'     => $this->buildTestNamespace(),
            'name'          => $file,
        ]);
        BaseHandler::write($path, $text);
    }

    public function actionGentest($file)
    {
        $path = $this->buildTestPath($file);
        if (!$this->force && file_exists($path)) {
            Yii::warning("already exists: $path");
            return 1;
        }
        return $this->genSkel($file);
    }

    public function genSkel($file)
    {
        return $this->passthru('phpunit-skelgen', [
            'generate-test', '--bootstrap', 'tests/_bootstrap.php', '--',
            $this->buildClass($file), $this->buildPath($file), $this->buildTestClass($file), $this->buildTestPath($file)
        ]);
    }

    public function buildNamespace($dir = '')
    {
        return $this->package->namespace . ($dir ? '\\' . strtr($dir, '/', '\\') : '');
    }

    public function buildTestNamespace($dir = 'tests\\unit')
    {
        return $this->buildNamespace($dir);
    }

    public function buildClass($file, $dir = '')
    {
        return $this->buildNamespace($dir) . '\\' . strtr($file, '/', '\\');
    }

    public function buildTestClass($file, $dir = 'tests\\unit')
    {
        return $this->buildClass($file, $dir);
    }

    public function buildPath($file, $dir = 'src', $prefix = '', $postfix = 'Test')
    {
        return $dir . DIRECTORY_SEPARATOR . $prefix . $file . $postfix . '.php';
    }

    public function buildTestPath($file, $dir = 'tests/unit')
    {
        return $this->buildPath($file, $dir);
    }

    public function buildFakePath($file, $dir = 'tests/unit', $prefix = 'Fake', $postfix = '')
    {
        return $this->buildPath($file, $dir, $prefix, $postfix);
    }
}
