<?php

  include("connect.php");
  include("function.php");

  $login = "";
  $password = "";
  $table = "";
  $search = "";
  $id_function = "";
  $takedata = "";

  if(isset($_GET['login']))
  {
	   $login = htmlspecialchars($_GET['login']);
  }

  if(isset($_GET['pass']))
  {
     $password = htmlspecialchars($_GET['pass']);
  }

  if(isset($_GET['table']))
  {
	   $table = htmlspecialchars($_GET['table']);
  }

  if(isset($_GET['search']))
  {
	   $search = htmlspecialchars($_GET['search']);
  }

  if(isset($_GET['id']))
  {
	   $id_function = htmlspecialchars($_GET['id']);
  }

  if(isset($_GET['data']))
  {
	   $takedata = htmlspecialchars($_GET['data']);

     if($id_function = "0")
     {
       registerUser($takedata);
       exit;
     }
     saveData($takedata);
     $array = array('log_msg'=>'Dane zapisane');
     echo json($array);
     exit;
  }
  if(isset($_POST['post']))
  {
	   $takedata = htmlspecialchars($_POST['post']);
     saveData($takedata);
     $array = array('log_msg'=>'Dane zapisane');
     echo json($array);
     exit;
  }

  header("Content-Type: application/json");

  if(checkUser($login, $password) && $id_function != null)
  {
    if($id_function == "1") // pobranie danych do wyswietlenia profilu
    {
      $tab = search("users","mail",$id_function,$login);
      //var_dump($tab);
      echo substr(json($tab), 5, -1);
      exit;
    }


    if($table == "users")
    {
      $tab = tableDataUser($login);
    }
    else
    {
      $tab = tableData($table);
    }

    echo json($tab);
    exit;
  }
  else if(checkUser($login, $password))
  {
    $array = array('id'=>'1');
    echo json($array);
  }
  else
  {
    $array = array('id'=>'0');
    echo json($array);
    exit;
  }
?>
