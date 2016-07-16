<?php

/*
 * PHPUnit plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpunit\tests\unit\controllers;

use hidev\phpunit\controllers\PhpunitController;
use hidev\phpunit\controllers\PhpunitXmlController;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-11-26 at 10:52:52.
 */
class PhpunitControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PhpunitController
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new PhpunitController('phpunit', null);
    }

    protected function tearDown()
    {
    }

    /**
     * @covers hidev\phpunit\controllers\PhpunitController::init
     *
     * @todo   Implement testInit().
     */
    public function testInit()
    {
        $this->assertNull($this->object->init());
    }

    public function testOptions()
    {
        $this->assertContains('force', $this->object->options('any'));
    }

    public function testGetConfiguration()
    {
        // $this->assertInstanceOf(PhpunitXmlController::class, $this->object->getConfiguration());
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    public function testActionMake()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers hidev\phpunit\controllers\PhpunitController::actionRun
     *
     * @todo   Implement testActionRun().
     */
    public function testActionRun()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers hidev\phpunit\controllers\PhpunitController::actionGenfake
     *
     * @todo   Implement testActionGenfake().
     */
    public function testActionGenfake()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers hidev\phpunit\controllers\PhpunitController::genFake
     *
     * @todo   Implement testGenFake().
     */
    public function testGenFake()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers hidev\phpunit\controllers\PhpunitController::actionGentest
     *
     * @todo   Implement testActionGentest().
     */
    public function testActionGentest()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers hidev\phpunit\controllers\PhpunitController::genSkel
     *
     * @todo   Implement testGenSkel().
     */
    public function testGenSkel()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers hidev\phpunit\controllers\PhpunitController::buildNamespace
     *
     * @todo   Implement testBuildNamespace().
     */
    public function testBuildNamespace()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers hidev\phpunit\controllers\PhpunitController::buildTestNamespace
     *
     * @todo   Implement testBuildTestNamespace().
     */
    public function testBuildTestNamespace()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers hidev\phpunit\controllers\PhpunitController::buildClass
     *
     * @todo   Implement testBuildClass().
     */
    public function testBuildClass()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers hidev\phpunit\controllers\PhpunitController::buildTestClass
     *
     * @todo   Implement testBuildTestClass().
     */
    public function testBuildTestClass()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers hidev\phpunit\controllers\PhpunitController::buildPath
     *
     * @todo   Implement testBuildPath().
     */
    public function testBuildPath()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers hidev\phpunit\controllers\PhpunitController::buildTestPath
     *
     * @todo   Implement testBuildTestPath().
     */
    public function testBuildTestPath()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers hidev\phpunit\controllers\PhpunitController::buildFakePath
     *
     * @todo   Implement testBuildFakePath().
     */
    public function testBuildFakePath()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
