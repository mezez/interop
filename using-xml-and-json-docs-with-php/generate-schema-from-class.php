<?php
require_once '../vendor/autoload.php';

use Dunglas\PhpToJsonSchema\Generator;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;

function generateSchemaFromClass(){
    $reflectionExtractor = new ReflectionExtractor();
    $propertyInfoExtractor = new PropertyInfoExtractor([$reflectionExtractor], [$reflectionExtractor], [], [$reflectionExtractor]);

    $generator = new Generator($propertyInfoExtractor);
    if(file_exists(__DIR__ . '/result/WeatherForecast.php')) {
        require_once '../using-xml-and-json-docs-with-php/result/WeatherForecast.php';
        $className = \Interop\WeatherForecast::class;

        echo "<p>Weatherforecast API Json Schema regenerated. See json below.</p>";
        echo "<hr>";
        echo json_encode($generator->generate($className));
    }else{
        echo "<p>You need to generate java class from the json schema first before trying to do the reverse</p>";
        echo "<p>Click <a href='./using-xml-and-json.php'>here</a> to generate class.</p>";
    }
}
generateSchemaFromClass();
