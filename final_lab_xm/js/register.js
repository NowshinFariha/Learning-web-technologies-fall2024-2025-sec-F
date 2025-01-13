function registerEmployee() {
    const name = document.getElementById('name').value.trim();
    const contact = document.getElementById('contact').value.trim();
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();
    const msg = document.getElementById('msg');

  
    if (!name || !contact || !username || !password) {
        msg.innerHTML = "All fields are required!";
        return false; 
    }

    msg.innerHTML = "";
    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "register.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`name=${name}&contact=${contact}&username=${username}&password=${password}`);

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            msg.innerHTML = this.responseText;
        }
    };

    return false;
}
