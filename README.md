CHIMEZIRIM VICTOR EKEMAM INTEROPERABILITY PROJECT

For CODE IMPLEMENTATIONS

-To test code, install xampp at https://www.apachefriends.org/xampp-files/7.3.31/xampp-windows-x64-7.3.31-3-VC15-installer.exe
-once installation is completed, go to xampp folder then htdocs
-clone repository into htdocs folder. If you use wampp, then clone repository into www folder. You should have the interop folder created
-start xampp (or wamp) server, start apache.

on the browser

//PRIMITIVE TYPES
To test base64 manipulation, visit localhost/interop/primitive_types/base_64_manipulation.php
To test date and time manipulation, visit localhost/interop/primitive_types/date_and_time.php

//TABULAR DATA
To test parsing csv data from a csv file, visit localhost/interop/data_formats/tabular_data/parsing_tabular_data.php
CSV file can be found at localhost/interop/data_formats/tabular_data/sample.csv

To test writing data to excel file, visit localhost/interop/data_formats/tabular_data/write_to_excel.php
This should create an excel file to download in your browser

//CREATING CLASSES FROM JSON SCHEMA
To test this, visit localhost/interop/using-xml-and-json-docs-with-php/using-xml-and-json.php
This json schema is saved at localhost/interop/using-xml-and-json-docs-with-php/schema/weather-forecast-schema.json
The classes generated will be found atlocalhost/interop/using-xml-and-json-docs-with-php/result

For the rest of the modules or other parts, the folder names correspond to the required task