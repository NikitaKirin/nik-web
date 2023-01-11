<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class DateTransformTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDateToMonthNameYear()
    {
        $this->assertEquals(dateToMonthNameYear("2021-02-01"), "February 2021");
    }

    public function testDateToFormat()
    {
        $this->assertEquals(dateToDateFormat('2020-02-01', 'Y-m'), '2020-02');
    }
}
