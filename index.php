<html>

<head>
<title>Chris Haig Test Message board</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link rel = "stylesheet" type = "text/css" href ="css/index.css" />
</head>

<body>

    <div class="container">
    <h1>CROBoard</h1>
    <div id="nav">
    <ul>
        <li><a href="#home">Insert</a></li>
        <li><a href="#news">Le</a></li>
        <li><a href="#contact">Categories</a></li>
        <li style="float:right"><a class="active" href="#about"><?php 
        
        if(isset($_SESSION['user'])){
            echo "Account";
        }else{
            echo "Login";
        }

        ?></a></li>
    </ul>
    </div>
    </div>

</body>

</html>