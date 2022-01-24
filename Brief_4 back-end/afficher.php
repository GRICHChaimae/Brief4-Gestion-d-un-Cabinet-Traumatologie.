<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Aclonica&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="afficher.css">
    <title>Document</title>
</head>
<body>

    <nav>
        <div>
        <a href="Acceuil.html"><img src="logo.png" alt="logo" id="logo"></a>
        </div>
        <div class="menu">
            <ul>  
                <li><a href="Cabinet.html">Cabinet</a></li>
                <li><a href="Acceuil.html">Acceuil<img src="Vector.png" class='vec'></a></li>
                <li><a href="Administration.html" class="active">Administration</a></li>
            </ul>
        </div>
        <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <ul class="mobile-menu">
                <li><a href="Cabinet.html">Cabinet</a></li>
                <li><a href="Acceuil.html">Acceuil</a></li>
                <li><a href="Administration.html">Administration</a></li>
            </ul>
          </div>
    </nav>

<div class="container">
    <table>
        <tr>
            <th>Nom</th>
            <th>Preom</th>
            <th>Date de naissance</th>
            <th>N° de tél</th>
            <th>E-mail</th>
            <th>La maladie</th>
        </tr>



    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cabinet";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT nom, prenom, dtn, tele, gmail, maladie FROM patient";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    foreach ($result as $value) {


        $info1 = $value['nom'];
        $info2 = $value['prenom'];
        $info3 = $value['dtn'];
		$info4 = $value['tele'];
		$info5 = $value['gmail'];
		$info6 = $value['maladie'];

    echo "<tr>
            <td>$info1</td>
			<td>$info2</td>
			<td>$info3</td>
			<td>$info4</td>
			<td>$info5</td>
			<td>$info6</td>
            <tr/>";

}

    $conn->close();

    ?>
    </table>
</div>
    <div class="footer">
        <div class="firstP">
            <p>+212 123 - 456 - 7890</p>
            <p>DrRahbaniRafik@gmail.com</p>
        </div>
            <p id="centerP">© 2022 D.Rahbani Rafik</p>
            <ul>
                <li><img src="facebook.png" alt="facebook_cabinet dr Rahbani Rafik"></li>
                <li><img src="insta.png" alt="instagrame_cabinet dr Rahbani Rafik"></li>
                <li><img src="twitter.png" alt="twitter_cabinet dr Rahbani Rafik"></li>
            </ul>
    </div>



<script>
    function toggleMobileMenu(menu) {
    menu.classList.toggle('open');
    }
</script>
</body>
</html>