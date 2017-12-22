<?php

namespace Sunzinet\SzQuickfinder\Tests\Domain\Model;


/**
 * Class AbstractSearchTest
 */
class AbstractSearchTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Sunzinet\SzQuickfinder\Tests\Stub\AbstractSearch::__construct $subject
     */
    protected $subject;

    public function setUp()
    {
        $this->subject = new \Sunzinet\SzQuickfinder\Tests\Stub\AbstractSearch();
    }

    /**
     * @test
     */
    public function injectSettings()
    {
        $settings = $this->getMock(\Sunzinet\SzQuickfinder\TyposcriptSettings::class);
        $this->subject->injectSettings($settings);
        $this->assertSame($settings, $this->subject->getSettings());
    }

    /**
     * @test
     */
    public function getPid()
    {
        $this->assertSame(123, $this->subject->getPid());
    }
}
