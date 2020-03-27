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
                <div class="red">
                    <input type="text" placeholder="Ime">
                    <input type="text" placeholder="Prezime">
                </div>
                <div class="red">
                    <input type="text" placeholder="JMBG">
                    <input type="text" placeholder="Broj licne karte">
                </div>
                <div class="red">
                    <input type="button" value="POSALJI" id="send-btn">
                </div>
            </form>
        </div>

    </div>

    <div class="footer">
        <div class="footer-content">
            <p>Kontakt: volontiraj@gmail.com</p>
            <p style="margin-top: 20px;">Ovo je sajt za povezivanje volontera sa sugradjanima kojima je neophodna bilo
                koja vrsta pomoci u ovim teskim
                trenucima. Ne snosimo nikakvu odgovornost u slucaju bilo kakvih problema.</p>
        </div>

    </div>
</body>

</html>