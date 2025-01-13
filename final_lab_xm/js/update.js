function updateEmployee() {
    const id = document.getElementById('id').value.trim();
    const name = document.getElementById('name').value.trim();
    const contact = document.getElementById('contact').value.trim();
    const msg = document.getElementById('msg');

  
    if (!id || !name || !contact) {
        msg.innerHTML = "All fields are required!";
        return false; 
    }

    msg.innerHTML = "";
    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "update.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`id=${id}&name=${name}&contact=${contact}`);

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            msg.innerHTML = this.responseText;
        }
    };

    return false;
}
