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
        <form class="col s12" action="calc.php" method="post">
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
    </div>
    <div class="row">
    <div class="input-field col s1">Broj uredaja 1. mreze
        <input type="number" name="subnet0" id="subnet0" minlength="1" maxlength="7" value="10" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 2. mreze
        <input type="number" name="subnet1" id="subnet1" minlength="1" maxlength="7" value="0" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 3. mreze
        <input type="number" name="subnet2" id="subnet2" minlength="1" maxlength="7" value="0" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 4. mreze
        <input type="number" name="subnet3" id="subnet3" minlength="1" maxlength="7" value="0" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 5. mreze
        <input type="number" name="subnet4" id="subnet4" minlength="1" maxlength="7" value="0" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 6. mreze
        <input type="number" name="subnet5" id="subnet5" minlength="1" maxlength="7" value="0" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 7. mreze
        <input type="number" name="subnet6" id="subnet6" minlength="1" maxlength="7" value="0" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 8. mreze
        <input type="number" name="subnet7" id="subnet7" minlength="1" maxlength="7" value="0" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 9. mreze
        <input type="number" name="subnet8" id="subnet8" minlength="1" maxlength="7" value="0" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 10. mreze
        <input type="number" name="subnet9" id="subnet9" minlength="1" maxlength="7" value="0" placeholder="10" required><br>
    </div>

    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Posalji
        <i class="material-icons right"></i>
    </button>

</form>
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>
</body>
</html>