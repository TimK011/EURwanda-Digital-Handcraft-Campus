<?php

declare(strict_types=1);

namespace Cm\CmMemo\Domain\Model;


/**
 * This file is part of the "memo" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Tim Koll
 */

/**
 * Memo
 */
class Memo extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * timestmap
     *
     * @var \DateTime
     */
    protected $timestmap = 0;

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * text
     *
     * @var string
     */
    protected $text = '';

    /**
     * Returns the title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets the text
     *
     * @param string $text
     * @return void
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }

    /**
     * Returns the timestmap
     *
     * @return \DateTime timestmap
     */
    public function getTimestmap()
    {
        return $this->timestmap;
    }

    /**
     * Sets the timestmap
     *
     * @param int $timestmap
     * @return void
     */
    public function setTimestmap(int $timestmap)
    {
        $this->timestmap = $timestmap;
    }
}
