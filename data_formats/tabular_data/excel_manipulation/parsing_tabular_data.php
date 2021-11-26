<?php


//use Box\Spout\Reader\ReaderFactory;
//use Box\Spout\Writer\WriterFactory;
//use Box\Spout\Common\Type;
//use Box\Spout\Writer\Style\StyleBuilder;
//use Box\Spout\Writer\Style\Color;

require_once '../../../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet;


parseExcelFile();

function parseExcelFile()
{
    try {
//        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::load('sample.csv');
        $reader = PhpSpreadsheet\IOFactory::load('sample.csv');
//        $reader = IOFactory::load('sample.csv');
        $worksheet = $reader->getWorksheetIterator();

        $records = $worksheet->current()->toArray();
        echo "<table>";
        foreach ($records as $row):
            echo "<tr>";
            echo "<td>";
            echo $row[0];
            echo "</td>";
            echo "<td>";
            echo $row[1];
            echo "</td>";
            echo "<td>";
            echo $row[2];
            echo "</td>";
            echo "<td>";
            echo $row[3];
            echo "</td>";
            echo "</tr>";
        endforeach;

        echo "</table>";
    } catch (\Exception $e) {
        // dd($e);
        $this->Flash->error('Please upload correct file. See sample template');
        return $this->redirect($this->referer());
    }
}

//function parseExcelFileOld()
//{
//    try {
//        $reader = ReaderEntityFactory::createReaderFromFile('/path/to/file.ext');
//    } catch (\Box\Spout\Common\Exception\UnsupportedTypeException $e) {
//        die('An error occurred');
//    }
//
//    $filePath = "sample.csv";
//    try {
//        $reader->open($filePath);
//    } catch (\Box\Spout\Common\Exception\IOException $e) {
//    }
//
//    try {
//        echo "File contents <hr>";
//        foreach ($reader->getSheetIterator() as $sheet) {
//            foreach ($sheet->getRowIterator() as $row) {
//                // do stuff with the row
//                $cells = $row->getCells();
//
//                var_dump($cells);
//            }
//        }
//    } catch (\Box\Spout\Reader\Exception\ReaderNotOpenedException $e) {
//    }
//
//    $reader->close();
//}

?>