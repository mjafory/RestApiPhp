<?php
require 'db.php';

function getData() {
    global $conn;
    $query = "SELECT * FROM your_table";
    $query_run = mysqli_query($conn, $query );

    if ( $query_run ) {
        if ( mysqli_num_rows( $query_run ) > 0 ) {
            $res = mysqli_fetch_all( $query_run, MYSQLI_ASSOC );
            $data = [
                'status' => 200,
                'message' => 'ALL DATA FETCHED SUCCESFULL',
                'data' => $res

            ];
            header( "НТТР/1.0 200 ok" );
            return json_encode( $data );
        } else {
            $data = [
                'status' => 404,
                'message' => 'No DATA found',
            ];
            header( "НТТР/1.0 404 No Data found" );
            return json_encode( $data );
        }
    } else {
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
        header( "НТТР/1.0 500 Internal Server Error" );
        return json_encode( $data );
    }
}

?>
