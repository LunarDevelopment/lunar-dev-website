<?php
include 'db-local.php';
# include 'db-server.php';
require 'Slim/Slim.php';
date_default_timezone_set('Europe/London');
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->add(new \Slim\Middleware\SessionCookie(array(
    'expires' => '20 minutes',
    'path' => '/',
    'domain' => null,
    'secure' => false,
    'httponly' => false,
    'name' => 'slim_session',
    'secret' => 'CHANGE_ME',
    'cipher' => MCRYPT_RIJNDAEL_256,
    'cipher_mode' => MCRYPT_MODE_CBC
)));


$app->get('/posts','getPosts');
$app->post('/posts', 'insertPost');
$app->delete('/posts/delete/:post_id','deletePost');

$app->get('/projects','getProjects');
$app->post('/projects', 'insertProject');
$app->delete('/projects/delete/:project_id','deleteProject');

$app->run();

function getPosts() {
  $sql = "SELECT * FROM posts ORDER BY created DESC";
  try {
    $db = getDB();
    $stmt = $db->prepare($sql); 
    $stmt->execute();		
    $updates = $stmt->fetchAll(PDO::FETCH_OBJ);
    $db = null;
    echo '{"posts": ' . json_encode($updates) . '}';

  } catch(PDOException $e) {
    //error_log($e->getMessage(), 3, '/var/tmp/php.log');
    echo '{"error":{"text":'. $e->getMessage() .'}}'; 
  }
}

function insertPost() {
  $request = \Slim\Slim::getInstance()->request();
  $update = json_decode($request->getBody());
  $sql = "INSERT INTO posts (FIELD, FIELD, FIELD, FIELD, FIELD) VALUES (:user_update, :user_id, :created, :ip)";
  try {
    $db = getDB();
    $stmt = $db->prepare($sql);  
    $stmt->bindParam("user_update", $update->user_update);
    $stmt->bindParam("post_id", $update->post_id);
    $time=time();
    $stmt->bindParam("created", $time);
    $ip=$_SERVER['REMOTE_ADDR'];
    $stmt->bindParam("ip", $ip);
    $stmt->execute();
    $update->id = $db->lastInsertId();
    $db = null;
    $update_id= $update->id;
    getPostUpdate($post_id);
  } catch(PDOException $e) {
    //error_log($e->getMessage(), 3, '/var/tmp/php.log');
    echo '{"error":{"text":'. $e->getMessage() .'}}'; 
  }
}

function getPostUpdate($post_id) {
  $sql = "SELECT * FROM posts WHERE post_id=:post_id";
  try {
    $db = getDB();
    $stmt = $db->prepare($sql);
    $stmt->bindParam("post_id", $post_id);		
    $stmt->execute();		
    $updates = $stmt->fetchAll(PDO::FETCH_OBJ);
    $db = null;
    echo '{"posts": ' . json_encode($updates) . '}';

  } catch(PDOException $e) {
    //error_log($e->getMessage(), 3, '/var/tmp/php.log');
    echo '{"error":{"text":'. $e->getMessage() .'}}'; 
  }
}

function deletePost($post_id) {

  $sql = "DELETE FROM posts WHERE post_id=:post_id";
  try {
    $db = getDB();
    $stmt = $db->prepare($sql);  
    $stmt->bindParam("post_id", $post_id);
    $stmt->execute();
    $db = null;
    echo true;
  } catch(PDOException $e) {
    echo '{"error":{"text":'. $e->getMessage() .'}}'; 
  }

}

function getProjects() {
  $sql = "SELECT * FROM projects ORDER BY created DESC";
  try {
    $db = getDB();
    $stmt = $db->prepare($sql); 
    $stmt->execute();		
    $updates = $stmt->fetchAll(PDO::FETCH_OBJ);
    $db = null;
    echo '{"projects": ' . json_encode($updates) . '}';

  } catch(PDOException $e) {
    //error_log($e->getMessage(), 3, '/var/tmp/php.log');
    echo '{"error":{"text":'. $e->getMessage() .'}}'; 
  }
}

function insertProject() {
  $request = \Slim\Slim::getInstance()->request();
  $update = json_decode($request->getBody());
  $sql = "INSERT INTO projects (FIELD, FIELD, FIELD, FIELD, FIELD) VALUES (:user_update, :user_id, :created, :ip)";
  try {
    $db = getDB();
    $stmt = $db->prepare($sql);  
    $stmt->bindParam("user_update", $update->user_update);
    $stmt->bindParam("project_id", $update->project_id);
    $time=time();
    $stmt->bindParam("created", $time);
    $ip=$_SERVER['REMOTE_ADDR'];
    $stmt->bindParam("ip", $ip);
    $stmt->execute();
    $update->id = $db->lastInsertId();
    $db = null;
    $update_id= $update->id;
    getPostUpdate($post_id);
  } catch(PDOException $e) {
    //error_log($e->getMessage(), 3, '/var/tmp/php.log');
    echo '{"error":{"text":'. $e->getMessage() .'}}'; 
  }
}

function getProjectUpdate($project_id) {
  $sql = "SELECT * FROM projects WHERE project_id=:project_id";
  try {
    $db = getDB();
    $stmt = $db->prepare($sql);
    $stmt->bindParam("project_id", $project_id);		
    $stmt->execute();		
    $updates = $stmt->fetchAll(PDO::FETCH_OBJ);
    $db = null;
    echo '{"projects": ' . json_encode($updates) . '}';

  } catch(PDOException $e) {
    //error_log($e->getMessage(), 3, '/var/tmp/php.log');
    echo '{"error":{"text":'. $e->getMessage() .'}}'; 
  }
}

function deleteProject($project_id) {

  $sql = "DELETE FROM projects WHERE project_id=:project_id";
  try {
    $db = getDB();
    $stmt = $db->prepare($sql);  
    $stmt->bindParam("project_id", $project_id);
    $stmt->execute();
    $db = null;
    echo true;
  } catch(PDOException $e) {
    echo '{"error":{"text":'. $e->getMessage() .'}}'; 
  }
}
?>