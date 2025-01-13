function deleteEmployee() {
    const id = document.getElementById('id').value.trim();

    if (!id) {
        document.getElementById('msg').innerHTML = "Employee ID is required!";
        return false;
    }

    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "delete.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`id=${id}`);

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('msg').innerHTML = this.responseText;
        }
    };

    return false;
}