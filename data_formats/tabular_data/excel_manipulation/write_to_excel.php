<?php
//require_once 'vendor/spout-2.7.0/src/Spout/Autoloader/autoload.php';
require_once 'spout-2.7.0/src/Spout/Autoloader/autoload.php';
//use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Box\Spout\Common\Entity\Row;

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Writer\WriterFactory;
use Box\Spout\Common\Type;
use Box\Spout\Writer\Style\StyleBuilder;
use Box\Spout\Writer\Style\Color;

writeToExcel();
function writeToExcel(){
//    $writer = WriterFactory::create(Type::XLSX); // for XLSX files
    $writer = WriterFactory::create(Type::CSV); // for CSV files
    //$writer->openToFile($fullFilePath); // write data to a file or to a PHP stream
    $fileName = "generated.csv";
    $writer->openToBrowser($fileName); // stream data directly to the browser

    $itemNameArray = ['S/N', 'NAME'];
    $style = (new StyleBuilder())
        ->setFontBold()
        ->build();

    $writer->addRowWithStyle($itemNameArray, $style); // header
    $writer->addRow(['1', 'John Doe']); // header
    $writer->addRow(['2', 'Jane Doe']); // header

}

function writeToExcelNew()
{
    $writer = WriterEntityFactory::createCSVWriter();

    $fileName = "generated.csv";

    try {
//        $writer->openToFile($fileName); // write data to a file or to a PHP stream
        $writer->openToBrowser($fileName); // stream data directly to the browser

        $cellOne = [
            WriterEntityFactory::createCell('S/N'),
            WriterEntityFactory::createCell('Name'),
            ];

        $cellTwo = [
            WriterEntityFactory::createCell('1'),
            WriterEntityFactory::createCell('John Doe'),
        ];

        $cellThree = [
            WriterEntityFactory::createCell('2'),
            WriterEntityFactory::createCell('Jane Doe'),
        ];

            $rows = [
                WriterEntityFactory::createRow($cellOne),
                WriterEntityFactory::createRow($cellTwo),
                WriterEntityFactory::createRow($cellThree),
            ];
        $writer->addRows($rows);
        $writer->close();
    } catch (\Box\Spout\Common\Exception\IOException $e) {

    }
}