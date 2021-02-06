<?php

  /////////////////////////
  // demarrer la session //
  /////////////////////////

  session_start();

  //////////////////////////////////////////////////////////////
  // inclure le fichier de fonction et de connection à la bdd //
  //////////////////////////////////////////////////////////////

  require_once('../../app/inc/connect.php');

  require_once('../../app/inc/function.php');

  $user = $_SESSION['auth'];

  if ($_SESSION['auth']) {

    //////////////////////////////
    // recupération du username //
    //////////////////////////////

    $requser = $pdo->prepare("SELECT * FROM clients WHERE mail = ?");

    $requser->execute([$user]);

    $userinfo = $requser->fetch();

    $username = $userinfo['username'];

    $query = '';

    $output = [];

    $query .= "SELECT * FROM articles WHERE username = ? ";

    if(isset($_POST["search"]["value"]))
    {
     $query .= 'AND nom LIKE "%'.$_POST["search"]["value"].'%" ';
     $query .= 'OR marque LIKE "%'.$_POST["search"]["value"].'%" ';
     $query .= 'OR cat LIKE "%'.$_POST["search"]["value"].'%" ';
    }
    if(isset($_POST["order"]))
    {

     $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
    }
    else
    {
     $query .= 'ORDER BY id DESC ';
    }
    if($_POST["length"] != -1)
    {
     $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
    }
    $statement = $pdo->prepare($query);
    $statement->execute([$username]);
    $result = $statement->fetchAll();
    $data = array();
    $filtered_rows = $statement->rowCount();
    foreach($result as $row)
    {

     $sub_array = array();
     $sub_array[] = $row["id"];
     $sub_array[] = $row['cat'];
     $sub_array[] = $row["marque"];
     $sub_array[] = $row["nom"];
     $sub_array[] = $row['prix'];
     $sub_array[] = $row["stock"];
     $sub_array[] = $row["livre"];
     $sub_array[] = '<div class="table-data-feature">

                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Éditer">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <button id="btn-del" data-nom="'.$row['nom'].'" data-id3="'.$row['id'].'" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Supprimer">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>';
     $data[] = $sub_array;
    }
    $output = array(
     "draw"    => intval($_POST["draw"]),
     "recordsTotal"  =>  $filtered_rows,
     "recordsFiltered" => get_total_all_records('articles','username',$username),
     "data"    => $data
    );
    echo json_encode($output);

  }elseif (!isset($_SESSION["auth"])){

    redirect('../../logout.php');

  }

?>
