<?php // Example 26-1: functions.php
  $dbhost  = 'localhost:8889';    // Unlikely to require changing
  $dbname  = 'sys';   // Modify these...
  $dbuser  = 'root';   // ...variables according
  $dbpass  = 'root';   // ...to your installation
  
  
  
$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  if ($connection->connect_error) die("Fatal Error");

  function createTable($user, $query)
  {
//    echo "Table '$user' created or already exists.<br>'$query' ";
    queryMysql("CREATE TABLE IF NOT EXISTS $user($query)");
    echo "Table '$user' created or already exists.<br>";
  }

  function queryMysql($query)
  {
    global $connection;
//    echo "qury is   '$query'";
    $result = $connection->query($query);
    if (!$result) die("Fatal Error 1");
    return $result;
  }

  function destroySession()
  {
    $_SESSION=array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
      setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
  }

  function sanitizeString($var)
  {
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    if (get_magic_quotes_gpc())
      $var = stripslashes($var);
    return $connection->real_escape_string($var);
  }

    function showProfile($users)
  {
    if (file_exists("$user.jpg"))
      echo "<img src='$user.jpg' style='float:left;'>";

    $result = queryMysql("SELECT * FROM users WHERE username='$username'");

    if ($result->num_rows)
    {
      $row = $result->fetch_array(MYSQLI_ASSOC);
      echo stripslashes($row['text']) . "<br style='clear:left;'><br>";
    }
    else echo "<p>Nothing to see here, yet</p><br>";
  }