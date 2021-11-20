<?php


use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Writer\WriterFactory;
use Box\Spout\Common\Type;
use Box\Spout\Writer\Style\StyleBuilder;
use Box\Spout\Writer\Style\Color;

require_once './phpoffice/phpspreadsheet/src/PhpSpreadsheet/IOFactory.php';
require_once './phpoffice/phpspreadsheet/src/PhpSpreadsheet/Spreadsheet.php';

parseExcelFile();

function parseExcelFile()
{
    try {
        $reader = IOFactory::load('sample.csv');
        $worksheet = $reader->getWorksheetIterator();

        $records = $worksheet->current()->toArray();
        var_dump($records);
    } catch (\Exception $e) {
        // dd($e);
        $this->Flash->error('Please upload correct file. See sample template');
        return $this->redirect($this->referer());
    }
}

function parseExcelFileOld()
{
    try {
        $reader = ReaderEntityFactory::createReaderFromFile('/path/to/file.ext');
    } catch (\Box\Spout\Common\Exception\UnsupportedTypeException $e) {
        die('An error occurred');
    }

    $filePath = "sample.csv";
    try {
        $reader->open($filePath);
    } catch (\Box\Spout\Common\Exception\IOException $e) {
    }

    try {
        echo "File contents <hr>";
        foreach ($reader->getSheetIterator() as $sheet) {
            foreach ($sheet->getRowIterator() as $row) {
                // do stuff with the row
                $cells = $row->getCells();

                var_dump($cells);
            }
        }
    } catch (\Box\Spout\Reader\Exception\ReaderNotOpenedException $e) {
    }

    $reader->close();
}

?>