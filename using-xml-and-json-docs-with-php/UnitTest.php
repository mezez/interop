<?php
//require_once '../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Interop\WeatherForecast;
final class UnitTest extends TestCase
{
    //check if class was created.
    /** @test */
    public function weatherForecastClassIsGeneratedandWorking(): void
    {
        $this->assertFileExists(__DIR__ . '/result/WeatherForecast.php',"The weather forecast class is created");
    }

}