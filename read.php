
<?php

if(!empty($_GET['price'])) {
	$price=$_GET['price'];

	$properties = getPropertiesByPrice($price, $conn);
	if (empty($properties))
	{
		jsonResponse(200, "Nfts Not Found", NULL);
	}
	else
	{
		jsonResponse(200, "Nfts Found", $properties);
	}
} else {
	$properties = getAllProperties($conn);
	if (empty($properties))
	{
		jsonResponse(200, "Nfts Not Found", NULL);
	}
	else
	{
		jsonResponse(200, "Nfts Found", $properties);
	}
}


function jsonResponse($status, $status_message, $data)
	{
	header("HTTP/1.1 " . $status_message);
	$response['status'] = $status;
	$response['status_message'] = $status_message;
	$response['data'] = $data;
	$json_response = json_encode($response);
	echo $json_response;
	}

function getPropertiesByPrice($price, $conn) {
	$sql = "SELECT * FROM nft WHERE price >= " . $price;

	$resultset = mysqli_query($conn, $sql) or die("There was an error while fetching all nfts by price" . mysqli_error($conn));
	$data = array();
	while ($rows = mysqli_fetch_assoc($resultset))
		{
		$data[] = $rows;
		}

	return $data;
	}

function getAllProperties($conn) {
	$sql = "SELECT * FROM nft";

	$resultset = mysqli_query($conn, $sql) or die("There was an error while fetching all Nfts: " . mysqli_error($conn));
	$data = array();
	while ($rows = mysqli_fetch_assoc($resultset))
	{
		$data[] = $rows;
	}

	return $data;
}

?>
