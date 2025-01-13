function logout() {
    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "logout.php", true);
    xhttp.send();

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('msg').innerHTML = this.responseText;
        }
    };
}
