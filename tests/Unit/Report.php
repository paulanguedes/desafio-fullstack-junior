<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\TestCase;

class ReportTest extends TestCase
{
    public function testIndexReport()
    {
        $reports = DB::table('customers');
        $this->assertTrue($reports->index());
    }
}