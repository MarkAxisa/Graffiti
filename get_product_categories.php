
<?php
header("Content-Type:application/json");
//connection with the database
include_once ("dbconnect.php");

$categories = getNftCategories($conn);
if (empty($categories))
{
	jsonResponse(200, "No collections found", NULL);
}
else
{
	jsonResponse(200, "Collections Found", $categories);
}

function jsonResponse($status, $status_message, $data) {
	header("HTTP/1.1 " . $status_message);
	$response['status'] = $status;
	$response['status_message'] = $status_message;
	$response['data'] = $data;
	// converting the $response object into json
	$json_response = json_encode($response);
	// returning the json string which will be parsed by the jsoncontentimporter plugin
	echo $json_response;
}

function getNftCategories($conn) {
	// Constructing SQL Query
	$sql = "SELECT terms.name, terms.slug FROM wp_wc_category_lookup as category INNER JOIN wp_terms as terms ON category.category_id=terms.term_id Where category.category_id != 22";

	// Using dbconnection and query string to retrieve categories from database otherwise and error is returned
	$resultset = mysqli_query($conn, $sql) or die("There was an error while fetching all categories" . mysqli_error($conn));
	$data = array();
	// iterating over rows and populating $data array
	while ($rows = mysqli_fetch_assoc($resultset))
	{
		$data[] = $rows;
	}

	return $data;
}
?>