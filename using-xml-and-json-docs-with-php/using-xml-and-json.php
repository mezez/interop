<?php
require_once '../vendor/autoload.php';

use PHPModelGenerator\Model\GeneratorConfiguration;
use PHPModelGenerator\ModelGenerator;
use PHPModelGenerator\SchemaProvider\OpenAPIv3Provider;
use PHPModelGenerator\SchemaProvider\RecursiveDirectoryProvider;

function useXmlAndJson(){
    deletePreviousFiles();
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

function deletePreviousFiles(){
    $files = glob(__DIR__ . '/result/*'); // get all file names
    foreach($files as $file){ // iterate files
        if(is_file($file)) {
            unlink($file); // delete file
        }
    }
}


echo "<p><b>Bootstrapping the API implementation in PHP: Classes for your datamodels</b><hr>
From the WeatherForecast datamodel, generate the set of classes using the php Wol-soft plugin</p>";
echo "<p>Please Note: The wol-soft plugin does not support the date-time format for date in the schema file, so that line has been removed</p>";
echo "<p>See interop/using-xml-and-json-docs-with-php/result folder for generated class</p>";
echo "<hr>";
echo "<p>After generating classes from the schema, you can also generate a schema from the class.</p>";
echo "<p>Click <a href='./generate-schema-from-class.php'>here</a> to generate schema.</p>";
echo "<hr>";
echo "<p>To run Unit test after creation of classes, run <b>vendor\bin\phpunit using-xml-and-json-docs-with-php/UnitTest.php</b> from command line inside project directory</p>";

useXmlAndJson();
