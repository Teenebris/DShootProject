<?php

  include("connect.php");
  include("function.php");

  $login = "";
  $password = "";
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

  if(isset($_GET['id']))
  {
	   $id_function = htmlspecialchars($_GET['id']);
  }

  if(isset($_GET['data']))
  {
	   $takedata = htmlspecialchars($_GET['data']);

     if($id_function == "0") // obsluga rejestracji
     {
       registerUser($takedata);
       exit;
     }
     if($id_function == "-1") // obsluga kamery
     {
       cameraData($takedata);
       exit;
     }
     else if($id_function == null)
     {
       saveData($takedata);
     }
  }

  header("Content-Type: application/json");

  if(checkUser($login, $password) && $id_function != null)
  {
    if($id_function == "1") // wysylanie danych do wyswietlenia profilu
    {
      $tab = userData("users","mail",$id_function,$login);
      echo substr(json($tab), 5, -1);
      exit;
    }
    if($id_function == "1.1") // pobieranie danych do aktualizacji profilu
    {
      $tab = userUpdate($login, $takedata);
      echo json($tab);
      exit;
    }

    if($id_function == "2") // wysylanie danych do rezerwacji
    {
      $exp_data = explode(",", $takedata);
      $tab = reservation($exp_data[0],$exp_data[1]);
      echo json($tab);
      exit;
    }
    if($id_function == "2.1") // pobieranie danych do rezerwacji
    {
      saveData($takedata);
      //echo json();
      exit;
    }

    if($id_function == "3") // wysylanie danych do rankingu
    {
      $tab = ranks();
      echo json($tab);
      exit;
    }

    if($id_function == "4") // wysylanie danych do wyswietlenia ostatniej serii (tarcza)
    {
      $tab = laststat($login);
      echo json($tab);
      exit;
    }
    if($id_function == "5") // wysylanie danych do wyswietlania twoich statystyk
    {
      $tab = laststat($login);
      echo json($tab);
      exit;
    }

    if($id_function == "6") // wysylanie sygnalu do silnika
    {
      $tab = engine();
      exit;
    }

    echo json($tab);
    exit;
  }
  else if(checkUser($login, $password))
  {
    $array = array('id'=>'1'); // logowanie pomyslne
    echo json($array);
  }
  else
  {
    $array = array('id'=>'0'); // blad logowania
    echo json($array);
    exit;
  }
?>
