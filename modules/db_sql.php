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
* <none>
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
function dbConnect()
{
    $conn = mysql_connect($host_with_port, $user_name, $user_pw);
    if (!$conn)
    {
        die('could not connect to:'.mysql_error());
        return 0;
    }
    elseif ($conn)
    {
        return 1;
    }
}



?>