<?php
include_once 'database.php';
if (isset($_POST['brlk'])) {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $jmbg = $_POST['jmbg'];
    $brlk = $_POST['brlk'];

    try {
        $sqlInsert = "INSERT INTO users(ime, prezime, jmbg, brlk)
    VALUES (:ime, :prezime, :jmbg, :brlk)";

        $statement = $db->prepare($sqlInsert);
        $statement->execute(array(
            ':ime' => $ime, ':prezime' => $prezime,
            ':jmbg' => $jmbg, ':brlk' => $brlk
        ));

        if ($statement->rowCount() == 1) {
            $message = '<p>Database input successful</p>';
        }
    } catch (PDOException $ex) {
        $message = $ex->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php include 'head.php' ?>
</head>

<body>
    <div class="header">
        <h1 class="naslov">VOLONTIRAJ</h1>
        <ul class="main-menu">
            <li><a id="pomoc-btn">Zatrazi pomoc</a></li>
            <li><a>Volontiraj</a></li>
            <li><a>O nama / Kontakt</a></li>
        </ul>
    </div>
    <div class="firstdiv">

        <div class="dugmici">
            <h1 class="podnaslov">Pomozi najugroženijim sugrađanima tokom epidemije COVID-19</h1>
            <button class="button">Volontiraj</button>
            <button class="button">Zatrazi pomoc</button>
        </div>
    </div>


    <div class="forma-div">

        <div class="forma-sub">
            <?php if (isset($message)) echo $message; ?>
            <form method="POST" action="" id="myForm"> 
                <div id="error">

                </div>
                <div class="red">
                    <input type="text" name="ime" placeholder="Ime" id="ime">
                    <input type="text" name="prezime" placeholder="Prezime" id="prezime">
                </div>
                <div class="red">
                    <input type="text" name="jmbg" placeholder="JMBG" id="jmbg">
                    <input type="text" name="brlk" placeholder="Broj licne karte" id="brlk">
                </div>
                <div class="red">
                    <input type="submit" value="POSALJI" id="send-btn" onclick="event.preventDefault(); submitForm();">
                </div>
            </form>

        </div>

    </div>

    <?php include 'footer.php' ?>
</body>

</html>