<html>

<head>
<title>Chris Haig Test Message board</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel = "stylesheet" type = "text/css" href ="css/index.css" />

</head>

<body>

    <div class="container">
    <h1>CROBoard</h1>
    <div id="nav">
    <?php
    
    if(!isset($_SESSION['user'])){
        echo '<ul><li style="float:right"><a id="login" class="active" onclick="document.getElementById(\'id01\').style.display=\'block\'">Login</a></li></ul>';
    }

    ?>
    
    </div>

    <div id="nav">
    <ul>
        <?php
                $servername = "localhost";
                $username = "chrishai_CROBoard";
                $password = "GG!qjpJr?rWG";
                $dbname = "chrishai_CRO";
    
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    // set the PDO error mode to exception
                    $stmt = $conn->prepare('SELECT * FROM `Cateogry`');
                    $stmt->execute();
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach($results as $row){
                      echo '<li style="float:left"><a  id=' . $row['Title'] . '>' . $row['Title'] .'</a></li>';
                    }
                    
                }catch(PDOException $e){
                    echo "error 2";
                    echo $sql . "<br>" . $e->getMessage();
                }
    
                $conn = null;
        


        

        ?>
    </ul>
    </div>
    </div>

    <!-- Modal for registering and signing in -->
    <div id="id01" class="w3-modal" >
    <div class="w3-modal-content" style="width: 30vw; background:#282828;">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <div style="text-align:center;">
        <form method="POST" action="">
        <h5 class="modeltext" for="username">Username</h5>
        <br>
        <input id="username" type="text">
        <br><br>
        <h5 class="modeltext" for="password" style=" margin-top: -10px ;">Password</h5>
        <br>
        <input id="password" type="password">
        <br><br>
        <h5 class="modeltext" for="retry" style=" margin-top: -10px ;">Verify password</h5>
        <br>
        <input id="retry" type="password">
        <br><br>
        <input type="button" value="login">
        <a class="hyperspa" id="create">No Account? (Create Account)</a>
        </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html> 