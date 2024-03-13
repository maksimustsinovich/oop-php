<?php

class SmartDate {
    private DateTime $date;

    public function __construct($date) {
        try {
            $this->date = new DateTime($date);
        } catch (Exception $e) {
            throw new InvalidArgumentException;
        }
    }

    public function isWeekend(): bool
    {
        $dayOfWeek = $this->date->format('N');
        return $dayOfWeek >= 6;
    }

    public function getDifference($unit) {
        $now = new DateTime();
        $interval = $now->diff($this->date);
        return $interval->$unit;
    }

    public function isLeapYear(): bool
    {
        $year = $this->date->format('Y');
        return (($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0);
    }
}