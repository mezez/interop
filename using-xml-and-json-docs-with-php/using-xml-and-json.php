<?php
require_once '../vendor/autoload.php';

use PHPModelGenerator\Model\GeneratorConfiguration;
use PHPModelGenerator\ModelGenerator;
use PHPModelGenerator\SchemaProvider\OpenAPIv3Provider;
use PHPModelGenerator\SchemaProvider\RecursiveDirectoryProvider;

function useXmlAndJson(){
    $generator = new ModelGenerator((new GeneratorConfiguration())
        ->setNamespacePrefix('Interop')
        ->setImmutable(false)
    );

    $generator->generateModels(new RecursiveDirectoryProvider(__DIR__ . '/schema'), __DIR__ . '/result');
}


echo "<p>Bootstrapping the API implementation in PHP: Classes for your datamodels<br>
From the WeatherForecast datamodel, generate the set of classes using the php Wol-soft plugin</p><br>";
echo "<p>Please Note: Te wol-soft plugin does not support the date-time format for date in the schema file, so that line has been removed</p>";
echo "<p>See interop/using-xml-and-json-docs-with-php/result folder for generated class</p>";
echo "<hr>";

useXmlAndJson();
