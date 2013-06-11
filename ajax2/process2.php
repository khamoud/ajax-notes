<?php
	require("connect2.php");
	
	$data = array();
	$query = "SELECT * FROM leads 
					WHERE first_name LIKE '{$_POST['name']}%' 
					OR last_name LIKE '{$_POST['name']}%';";
	
	$users = fetch_all($query);
	
	$html = "
					<table>
						<thead>
							<tr>
								<th>leads_id</th>
								<th>first_name</th>
								<th>last_name</th>
								<th>registered_datetime</th>
								<th>email</th>
							</tr>
						</thead>
						<tbody>
						";
	foreach($users as $user)
	{
		$html .= "
						<tr>
							<td>{$user['leads_id']}</td>
							<td>{$user['first_name']}</td>
							<td>{$user['last_name']}</td>
							<td>{$user['registered_datetime']}</td>
							<td>{$user['email']}</td>
						</tr>";				
	}
	
	$html .="
				</tbody>
			</table>
	";
	$data['html'] = $html;
	echo json_encode($data);

?> 