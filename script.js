function submitForm() {
    var ime = document.getElementById('ime').value;
    var prezime = document.getElementById('prezime').value;
    var jmbg = document.getElementById('jmbg').value;
    var brlk = document.getElementById('brlk').value;

    if (ime === "") {
        document.getElementById('error').innerHTML = 'Ime nije uneto ispravno';
    } else {
        if (prezime === "") {
            document.getElementById('error').innerHTML = "Prezime nije uneto ispravno";
        } else {
            if (jmbg === "") {
                document.getElementById('error').innerHTML = "JMBG nije validan";
            } else {
                if (brlk == "") {
                    document.getElementById('error').innerHTML = "BRLK nije validan";
                } else {
                    document.getElementById('error').innerHTML = "";
                }
            }
        }
    }

    document.getElementById('myForm').submit();

}