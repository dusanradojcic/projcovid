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
            <button class="button" onclick='location.href="index.html"'>Volontiraj</button>
            <button class="button">Zatrazi pomoc</button>
        </div>
    </div>

    <div class="forma-div">
        <div class="forma-sub">
            <form>
                <div id="error">
                    
                </div>
                <div class="red">
                    <input type="text" placeholder="Ime" id="ime">
                    <input type="text" placeholder="Prezime" id="prezime">
                </div>
                <div class="red">
                    <input type="text" placeholder="JMBG" id="jmbg">
                    <input type="text" placeholder="Broj licne karte" id="brlk">
                </div>
                <div class="red">
                    <input type="button" value="POSALJI" id="send-btn" onclick="submitForm()">
                </div>
            </form>

        </div>

    </div>

    <?php include 'footer.php' ?>
</body>

</html>