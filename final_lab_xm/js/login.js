function login() {
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();

    if (!username || !password) {
        document.getElementById('msg').innerHTML = "All fields are required!";
        return false;
    }

    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "login.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`username=${username}&password=${password}`);

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('msg').innerHTML = this.responseText;
        }
    };

    return false;
}
