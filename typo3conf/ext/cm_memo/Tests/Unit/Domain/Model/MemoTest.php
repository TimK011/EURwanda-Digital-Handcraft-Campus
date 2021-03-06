<?php

declare(strict_types=1);

namespace Cm\CmMemo\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Tim Koll 
 */
class MemoTest extends UnitTestCase
{
    /**
     * @var \Cm\CmMemo\Domain\Model\Memo|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Cm\CmMemo\Domain\Model\Memo::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTimestmapReturnsInitialValueForDateTime(): void
    {
        self::assertEquals(
            null,
            $this->subject->getTimestmap()
        );
    }

    /**
     * @test
     */
    public function setTimestmapForDateTimeSetsTimestmap(): void
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setTimestmap($dateTimeFixture);

        self::assertEquals($dateTimeFixture, $this->subject->_get('timestmap'));
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle(): void
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('title'));
    }

    /**
     * @test
     */
    public function getTextReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getText()
        );
    }

    /**
     * @test
     */
    public function setTextForStringSetsText(): void
    {
        $this->subject->setText('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('text'));
    }
}
