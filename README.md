CHIMEZIRIM VICTOR EKEMAM INTEROPERABILITY PROJECT

For CODE IMPLEMENTATIONS

-To test code, install xampp at https://www.apachefriends.org/xampp-files/7.3.31/xampp-windows-x64-7.3.31-3-VC15-installer.exe
-once installation is completed, go to xampp folder then htdocs. (usually at c://xampp/htdocs)
-clone repository into htdocs folder. If you use wampp, then clone repository into www folder. You should have the interop folder created.
-search for xampp from the windows search (or it's mac equivalent)
-start the xampp (or wamp) control panel app, then on the xampp application, start apache.


[Please note that the vendor packages for this project is included in the Github Repo (Though this is not a best practise, it has been done to
prevent difficulties in installing various packages requiring different composer versions for Non PHP experts, considering the context of this project).]

ON THE BROWSER
//PRIMITIVE TYPES
To test base64 manipulation, visit localhost/interop/primitive_types/base_64_manipulation.php
To test date and time manipulation, visit localhost/interop/primitive_types/date_and_time.php

//TABULAR DATA
To test parsing csv data from a csv file, visit http://localhost/interop/data_formats/tabular_data/excel_manipulation/parsing_tabular_data.php
CSV file can be found at localhost/interop/data_formats/tabular_data/excel_manipulation/sample.csv

To test writing data to excel file, visit localhost/interop/data_formats/tabular_data/excel_manipulation/write_to_excel.php
This should create an excel file to download in your browser.

//CREATING CLASSES FROM JSON SCHEMA and Regenerating Json Schema from the Classes
To test this, visit localhost/interop/using-xml-and-json-docs-with-php/using-xml-and-json.php to generate the class

This json schema of reference can be seen at localhost/interop/using-xml-and-json-docs-with-php/schema/weather-forecast-schema.json
The classes generated will be found at localhost/interop/using-xml-and-json-docs-with-php/result

To regenerate the schema from the class generated, visit http://localhost/interop/using-xml-and-json-docs-with-php/generate-schema-from-class.php

To run unit test after creation of classes, from command line inside the project folder, run [vendor\bin\phpunit using-xml-and-json-docs-with-php/UnitTest.php] on the command line inside the project folder


For the rest of the modules or other parts, the folder names correspond to the required task.