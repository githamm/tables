<?php

// $dbDetails = array(
//  'host' => 'localhost',
//  'user' => 'root',
//  'pass' => 'root',
//  'db' => 'coderworld'
// );

// $table = 'members';

// $primaryKey = 'id';

// $columns = array(
//  array( 'db' => 'first_name', 'dt' => 0),
//  array( 'db' => 'last_name', 'dt' => 1),
//  array( 'db' => 'email', 'dt' => 2),
//  array( 'db' => 'gender', 'dt' => 3),
//  array( 'db' => 'country', 'dt' => 4)
// );

// require( 'ssp.class.php' );

// echo json_encode(
//  SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
// );

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
// $table = 'lobbyist_data';
$table = 'mytable';
 
// Table's primary key
$primaryKey = 'rowId';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'rowId', 'dt' => 0 ),
    array( 'db' => 'clientName', 'dt' => 1 ),
    array( 'db' => 'clientCity', 'dt' => 2 ),
    array( 'db' => 'clientState', 'dt' => 3 ),
    array( 'db' => 'clientBusinessDescription', 'dt' => 4),
    array( 'db' => 'incomeAmount', 'dt' => 5) ,
    array( 'db' => 'lobbyistLastName', 'dt' => 6 ),
    array( 'db' => 'lobbyistFirstName', 'dt' => 7),
    array( 'db' => 'billInformationAndPosition', 'dt' => 8 ),
    array( 'db' => 'lobbyistState', 'dt' => 9 ),
    array( 'db' => 'reportMonth', 'dt' => 10 ),
    array( 'db' => 'fiscalYear', 'dt' => 11 ),
    array( 'db' => 'lobbyistCity', 'dt' => 12)
);
 
// SQL server connection information - plus server
// $sql_details = array(
//     'user' => '',
//     'pass' => '',
//     'db'   => 'lobbyists',
//     'host' => 'localhost'
// );

$sql_details = array(
    'user' => 'root',
    'pass' => 'root',
    'db'   => 'lobbyist_test',
    'host' => 'localhost'
);
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);

// From https://stackoverflow.com/questions/41507443/yadcf-datatables-server-side-populate-select-with-php

// $data=SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns/*, $joinQuery, $extraWhere*/ );

// $db = SSP::sql_connect( $sql_details );
// $stmt3 = $db->prepare( 'SELECT DISTINCT(district) FROM immunization.immunization_records' );
// $stmt3->execute();
// $data['filter-1'] = $stmt3->fetchAll(PDO::FETCH_COLUMN, 0);

// $stmt5 = $db->prepare( 'SELECT DISTINCT(value2) FROM table' );
// $stmt5->execute();
// $data['yadcf_data_5'] = $stmt5->fetchAll(PDO::FETCH_COLUMN, 0);

// $stmt6 = $db->prepare( 'SELECT DISTINCT(value3) FROM table' );
// $stmt6->execute();
// $data['yadcf_data_6'] = $stmt6->fetchAll(PDO::FETCH_COLUMN, 0);


// echo json_encode($data);
