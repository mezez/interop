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

    try {
        $generator->generateModels(new RecursiveDirectoryProvider(__DIR__ . '/schema'), __DIR__ . '/result');
    } catch (\PHPModelGenerator\Exception\FileSystemException $e) {
        echo json_encode($e->getMessage());
    } catch (\PHPModelGenerator\Exception\RenderException $e) {
        echo json_encode($e->getMessage());
    } catch (\PHPModelGenerator\Exception\SchemaException $e) {
        echo json_encode($e->getMessage());
    }
}


echo "<p><b>Bootstrapping the API implementation in PHP: Classes for your datamodels</b><hr>
From the WeatherForecast datamodel, generate the set of classes using the php Wol-soft plugin</p>";
echo "<p>Please Note: Te wol-soft plugin does not support the date-time format for date in the schema file, so that line has been removed</p>";
echo "<p>See interop/using-xml-and-json-docs-with-php/result folder for generated class</p>";
echo "<hr>";
echo "<p>If you get the message '[path] doesn't exist or is not empty', please empty the contents of the interop/using-xml-and-json-docs-with-php/result folder</p>";
echo "<hr>";

useXmlAndJson();
