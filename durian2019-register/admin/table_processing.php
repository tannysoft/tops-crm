<?php
 

$table = 'registration';
 
// Table's primary key
$primaryKey = 'id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'id', 'dt' => 0 ),
    array( 'db' => 'bu', 'dt' => 1 ),
    array( 'db' => 'empid', 'dt' => 2 ),
    array( 'db' => 'name', 'dt' => 3 ),
    array( 'db' => 'tel', 'dt' => 4 ),
    array( 'db' => 'email', 'dt' => 5 ),
    array( 'db' => 'round', 'dt' => 6 ),
    array( 'db' => 'seat', 'dt' => 7 ),
    array( 'db' => 'seat', 'dt' => 8 ),
    array( 'db' => 'status', 'dt' => 9 ),
    array( 'db' => 'slip', 'dt' => 10 )
);

// SQL server connection information
  $sql_details = array(
    'user' => 'top_user',
    'pass' => '1isylzjkoot0Ut@',
    'db'   => 'top_db',
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