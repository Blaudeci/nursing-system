<?php 

	echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
	/*$connect = mysqli_connect("localhost", "root", "root", "nursing_system");
	$columns = array('paciente_id', 'tipo_queixa', 'created_at', 'user_id');



	$query = "SELECT * FROM ocorrencias WHERE ";

	if($_POST["is_date_search"] == "yes"){

		$query.= 'created_at BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
	}

	if(isset($_POST["search"]["value"])){
		$query .= '
			(paciente_id LIKE "%'.$_POST["search"]["value"].'%"
			OR tipo_queixa LIKE "%'.$_POST["search"]["value"].'%"
			OR user_id LIKE "%'.$_POST["search"]["value"].'%")';
	}

	if(isset($_POST["order"])){
		$query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].$_POST['order']['0']['dir'].'';
	}else{
		$query .= 'ORDER BY paciente_id DESC ';
	}

	$query1 = '';

	if($_POST["length"] != -1){
		$query1 = 'LIMIT ' .$_POST['start'] . ', ' . $_POST['length'];
	}

	$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

	$result = mysqli_query($connect, $query . $query1);

	$data = array();

	while($row = mysqli_fetch_array($result)){
		$sub_array = array();
		$sub_array[] = $row["paciente_id"];
		$sub_array[] = $row["tipo_queixa"];
		$sub_array[] = $row["created_at"];
		$sub_array[] = $row["user_id"];
		$data[] = $sub_array;
	}

	function get_all_data($connect){
		$query = "SELECT * FROM ocorrencias";
		$result = mysqli_query($connect, $query);
		return mysqli_num_rows($result);
	}

	$output = array(
		"draw"				=> intval($_POST["draw"]),
		"recordsTotal" 		=> get_all_data($connect),
		"recordsFiltered"   => $number_filter_row,
		"data"				=> $data
	);

	echo json_encode($output);
*/
?>