<?php
namespace Rob2022\UkBankHolidays\ValueObjects;

use DateTime;
use InvalidArgumentException;

class BankHoliday
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $notes;

    public function __construct(string $title, DateTime $date, string $notes)
    {
        $this->setTitle($title);
        $this->date = $date;
        $this->notes = $notes;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    private function setTitle(string $title)
    {
        if (trim($title) === '') {
            throw new InvalidArgumentException('$title cannot be empty.');
        }

        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getNotes(): string
    {
        return $this->notes;
    }
}