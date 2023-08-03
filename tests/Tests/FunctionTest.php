<?php
 
namespace Tests;
 
use PHPUnit\Framework\TestCase;
use app\Helpers\TeHelper;
 
class FunctionTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_basic_test(): void
    {
        $due_time = date('Y-m-d', strtotime( '+'.mt_rand(0,30).' days'));
        $created_at = Carbon::now();

        $test = TeHelper::willExpireAt();
        $this->assertTrue($test);
    }
}