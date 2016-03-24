<?php

/*********************************************************************
* This a module of scripts for database function
*
**********************************************************************/

    $user_name = 'root';
    $user_pw = 'root';
    $host = 'localhost';
    $host_with_port = "$host".':'."$port";
    $port = '8889';


/*********************************************************************
* Function dbConnect
*
* Building up the connection with the mysql database
*
* Parameters:
* $dbname
* 
* Returns:
* - 1 (connect success), 0 (connect failed)
*
* Synopsis:
* (Example)
* <connection> = dbConnect;
*
* (end)
**********************************************************************/
function dbConnect($dbname)
{
    $conn = mysqli_connect($host_with_port, $user_name, $user_pw, $dbname);
    if (!$conn)
    {
        die('could not connect to:'.mysqli_error());
        return 0;
    }
    elseif ($conn)
    {
        return $conn;
    }
}

/**********************************************************
* Function dbSelectData
*
* Get the data from mysql as required keyword
*
* Parameters:
* -$conn (connection of DB)
* -$sql
*   
* Returns:
* - $result (Array of match row), 0 (no result match)
*
* Synopsis:
* (Example)
* <result> = dbSelectData(<conn>, <sql>);
*
* (end)
**********************************************************************/
function dbSelectData($conn, $sql)
{
    $result = mysqli_query($conn, $sql)
    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
            return $result;
        }
        else
        {
            return "0 Result";
        }
    }
    else
    {
        //die('Get Data from DB Error:'.mysqli_error($conn));
        return false;
    }
}


?>