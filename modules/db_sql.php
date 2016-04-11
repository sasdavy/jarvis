<?php

/*********************************************************************
* This a module of scripts for database function
*
**********************************************************************/

    $user_name = 'root';
    $user_pw = 'root';
    $host = 'localhost';
	$port = '8889';
    $host_with_port = "$host".':'."$port";
	$db_name = 'jarvis';


/**********************************************************
* Function dbSelectData
*
* Get the associate data from mysql as required keyword and return the associate value
*
* Parameters:
* -$sql
*   
* Returns:
* - $result (Array of match row), 0 Result (no result match)
*
* Synopsis:
* (Example)
* <result> = dbSelectData(<conn>, <sql>);
*
* (end)
**********************************************************************/
function dbSelectData($sql)
{
	global $host, $port, $user_name, $user_pw, $db_name;
    $conn = mysqli_connect($host, $user_name, $user_pw, $db_name, $port);
	if (!$conn)
    {
        die('could not connect to:'.mysqli_connect_error());
    }
	else
	{
		$result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0)
			 
        {
            return $result;
        }
        else
        {
            return "0 Result";
		}
	}
}



function test($sql)

{
	echo $sql."<br/>";
}
/**********************************************************
* Function dbReadSelectedData
*
* Read the 
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


?>