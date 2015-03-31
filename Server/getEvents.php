<?
	header('Content-type: text/html; charset=utf-8');
	include('db_function.php');
	
	try 
	{
		$start_date = getStartDate();
		$last_date = getEndDate();
		echo json_encode(checkQueryDB($start_date, $last_date), JSON_UNESCAPED_UNICODE);
	}
	catch (Exception $e)
	{
		echo 'Error: ',  $e->getMessage(), "\n";
	}

?>	

