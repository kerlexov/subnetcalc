<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <nav class="teal lighten-2">
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="center hide-on-med-and-down">
                    <li><a href="https://howhigh.technology">Home</a></li>
                    <li><a href="index.php">Subnet calculator</a></li>
                    <li><a href="report.php">Ip calculator</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="row">
        <form class="col s12" action="getreport.php" method="post">
            <div class="input-field col s1">
                <label>Ip adresa:</label>
            </div>
            <div class="input-field col s1">
                <input type="number" name="oct1" value="10" min="1" max="255" required>
            </div>
            <div class="input-field col s1">
                <input type="number" name="oct2" value="0" min="0" max="255" required>
            </div>
            <div class="input-field col s1">
                <input type="number" name="oct3" value="0" min="0" max="255" required>
            </div>
            <div class="input-field col s1">
                <input type="number" name="oct4" value="0" min="0" max="255" required>
            </div>
            <div class="input-field col s1">
            </div>
            <div class="input-field col s1">
                <label>Subnet maska:</label>
            </div>
            <div class="input-field col s1">
                <input type="number" name="maska" value="24" min="1" max="31" required>
            </div>
            <div class="col s3 m5">
            <button class="btn waves-effect waves-light" type="submit" name="action">Posalji
                <i class="material-icons right"></i>
            </button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
