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
                    <li><a href="">Subnet calculator</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="row">
        <form class="col s12" action="calc.php" method="post">
            <div class="col s5">
                <label>Ip adresa:</label> <input type="text" name="ip" value="192.168.0.0" required><br>
            </div>
            <!--<div class="col s3 m2">
                <label>Subnet maska:</label> <input type="text" name="maska" value="24" required><br>
            </div>-->
            <div class="input-field col s6 m2">
                <select>
                    <option value="" disabled selected>Odaberi klasu</option>
                    <option name="klasa" value="a">A</option>
                    <option name="klasa" value="b">B</option>
                    <option name="klasa" value="c">C</option>
                </select>
                <label>Klase</label>
            </div>
    </div>
    <div class="row">
    <div class="input-field col s1">Broj uredaja 1. mreze
        <input type="number" name="subnet0" id="subnet0" minlength="1" maxlength="10" value="10" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 2. mreze
        <input type="number" name="subnet1" id="subnet1" minlength="1" maxlength="10" value="0" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 3. mreze
        <input type="number" name="subnet2" id="subnet2" minlength="1" maxlength="10" value="0" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 4. mreze
        <input type="number" name="subnet3" id="subnet3" minlength="1" maxlength="10" value="0" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 5. mreze
        <input type="number" name="subnet4" id="subnet4" minlength="1" maxlength="10" value="0" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 6. mreze
        <input type="number" name="subnet5" id="subnet5" minlength="1" maxlength="10" value="0" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 7. mreze
        <input type="number" name="subnet6" id="subnet6" minlength="1" maxlength="10" value="0" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 8. mreze
        <input type="number" name="subnet7" id="subnet7" minlength="1" maxlength="10" value="0" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 9. mreze
        <input type="number" name="subnet8" id="subnet8" minlength="1" maxlength="10" value="0" placeholder="10" required><br>
    </div>
    <div class="input-field col s1">Broj uredaja 10. mreze
        <input type="number" name="subnet9" id="subnet9" minlength="1" maxlength="10" value="0" placeholder="10" required><br>
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