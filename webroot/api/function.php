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
      echo "Brak rekordów";
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

  function registerUser($data)
  {

  }

?>
