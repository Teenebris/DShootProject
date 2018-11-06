<?php

  function checkUser($usermail, $userpass)
  {
    include("connect.php");
    $sql = mysqli_query($connect, 'SELECT mail, password FROM users WHERE mail="'.$usermail.'"') or die(json("Error: wrong request"));
    $data = mysqli_fetch_assoc($sql);

    if($usermail == $data['mail'] && password_verify($userpass,$data['password']))
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  function tableData($tablename)
  {
    include("connect.php");
    $r = mysqli_query($connect, 'SELECT * FROM '.$tablename.'') or die(json("Error: wrong request"));
    if(mysqli_num_rows($r) == 0)
    {
      json("Brak rekordów");
      return 0;
    }

    $text = array();
    $i = 0;
    while($row = mysqli_fetch_assoc($r))
    {
        $i++;
        $tab[$i]=$row;
    }
    return $tab;
  }
  function tableDataUser($usermail)
  {
    include("connect.php");
    $r = mysqli_query($connect, 'SELECT * FROM users WHERE mail="'.$usermail.'"')
      or die(json("Error: wrong request"));

    $text = array();
    $i = 0;
    return $row = mysqli_fetch_assoc($r);

  }

  function json($data)
  {
    return $json = json_encode($data);
  }

  function search($tablename, $row, $id_function, $param_s)
  {
    include("connect.php");
    $r = mysqli_query($connect, 'SELECT name, numer_licencji, address_country, address_city,
      address_street, address_house, address_flat_nr, zip_code
      FROM '.$tablename.' WHERE '.$row.'="'.$param_s.'"')
      or die(json("Error: wrong request"));

    $tab = array();
    $i = 0;
    while($row = mysqli_fetch_assoc($r))
    {
        $i++;
        $tab[$i]=$row;
    }
    return $tab;
  }

  // Debug function
  // /*
  function saveData($data)
  {
    $time = date('Y-m-d H:i:s');
    $string = str_replace('&quot;', '"', $data);
    $dane = $time." | ".$string."\n";
    $file = "test.txt";
    $fp = fopen($file, "a");
    flock($fp, 2);
    fwrite($fp, $dane);
    flock($fp, 3);
    fclose($fp);
  }
  // */

  function registerUser($data)
  {
    $letters = array('&quot;', '{', '}');
    $data = str_replace($letters, '', $data);
    $dane = explode(",", $data);

    saveData($dane); //debug

    $temp = count($dane);

    for($i = 0; $i < $temp; $i++)
    {
      $table[$i] = explode(":", $dane[$i]);
    }

    include("connect.php");
    $r = mysqli_query($connect, 'SELECT mail FROM users WHERE mail="'.$table[0][1].'"')
      or die(json("Error: wrong request"));

    $r2 = mysqli_query($connect, 'SELECT username FROM users WHERE username="'.$table[1][1].'"')
      or die(json("Error: wrong request"));

    $ile = mysqli_num_rows($r) + mysqli_num_rows($r2);
    if($ile!=0) {
      json("Taki użytkownik istnieje");
      exit;
    }

    $address = "http://".$_SERVER['SERVER_NAME']."/users/hasher?mail=".$table[0][1]."&username=".
    $table[1][1]."&password=".$table[2][1]."&name=".
    $table[3][1]."&address_country=".$table[4][1]."&address_city=".
    $table[5][1]."&address_street=".$table[6][1]."&address_house=".
    $table[7][1]."&address_flat_nr=".$table[8][1]."&numer_licencji=".
    $table[9][1]."&zip_code=".$table[10][1];

    ini_set('max_execution_time', 10); // set execution time on request at 5sec
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL, $address);

    saveData($address); //debug

		curl_setopt($c, CURLOPT_TIMEOUT, 5); // set timeout on request at 3sec
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_exec($c);
		if ($error_number = curl_errno($c))
		{
	    if (in_array($error_number, array(CURLE_OPERATION_TIMEDOUT, CURLE_OPERATION_TIMEOUTED)))
			{
	        echo "cURL Timeout";
					exit;
	    }
		}
		curl_close($c);
  }

  function reservation($data)
  {
    $hour = array();
    for($i = 0; $i < 24; ++$i)
    {
      $hour[$i] = '0';
    }
    include("connect.php");
    $r = mysqli_query($connect, 'SELECT * FROM reservations WHERE res_date_start>"'.
      $data.'" AND res_date_end <"'.date("Y-m-d", strtotime("+1 day",strtotime($data))).'"')
      or die(json("Error: wrong request"));

    while($row = mysqli_fetch_assoc($r))
    {
      $temp = date("G",strtotime($row['res_date_start']));
      $temp2 = date("G",strtotime($row['res_date_end']));
      $temp3 = $temp2 - $temp;
      for ($i = $temp; $i < $temp2; ++$i)
      {
        $hour[$i] = '1';
      }
    }
    return $hour;
  }

?>
