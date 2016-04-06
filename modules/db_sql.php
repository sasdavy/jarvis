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


/**********************************************************
* Function dbSelectData
*
* Get the associate data from mysql as required keyword and return the associate value
*
* Parameters:
* -$dbname (database name)
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
function dbSelectData($dbname, $sql)
{
    $conn = mysqli_connect($host_with_port, $user_name, $user_pw, $dbname);
	if (!$conn)
    {
        die('could not connect to:'.mysqli_error());
    }
	else
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
			 return false;
		 }
	}
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