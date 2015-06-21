<?php

try {
    $db = new PDO(
        "mysql:host=" . $parameters['dbHost'] .
        ";dbname=" . $parameters['dbName'] .
        ";charset=utf8", $parameters['dbUser'],
        $parameters['dbPass']
    );
  
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    $error = 'Impossible de se connecter à la bd.<br />';
}

// $user = new \User\Model\User(array());

$userController = new \User\Controller\UserController();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $data = [];
  try {
    if(!empty($_POST['email'])) {
        $data[] = ['email' => $_POST['email']];
    } else {
      throw new Exception("Email is required");
    }
  } catch (Exception $e) {
    $error = $e->getMessage();
  }
  
  if(!empty($_POST['password'])) {
      $data[] = ['password' => $_POST['password']];
  }

  if(!empty($_POST['name'])) {
      $data[] = ['name' => $_POST['name']];
  }

  if(!empty($_POST['surname'])) {
      $data[] = ['surname' => $_POST['surname']];
  }

  if(!empty($_POST['phone'])) {
      $data[] = ['phone' => $_POST['phone']];
  }
  if(!empty($data)) {
    $user = new \User\Model\User($data);
    $userController->createUserAction($user, $parameters, $db);
  }
}

?>

<div class="row">
  <div class="container">
<form action="?bundle=user&action=new" method="POST" class="form-horizontal">
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="name" name="name" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="surname" class="col-sm-2 control-label">Surname</label>
    <div class="col-sm-10">
      <input type="surname" class="form-control" id="surname" name="surname" placeholder="Surname">
    </div>
  </div>
  <div class="form-group">
    <label for="phone" class="col-sm-2 control-label">Phone</label>
    <div class="col-sm-10">
      <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Créer le compte</button>
    </div>
  </div>
</form>
    
  </div>
</div>