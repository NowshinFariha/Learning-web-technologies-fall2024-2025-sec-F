function checkSession() {
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", "session.php", true);
    xhttp.send();

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            if (this.responseText !== "logged_in") {
                document.getElementById('msg').innerHTML = "Access Denied! Please log in.";
                window.location.href = "login.html"; 
            }
        }
    };
}
checkSession();
