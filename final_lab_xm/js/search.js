function searchEmployee() {
    const query = document.getElementById('query').value.trim();

    if (!query) {
        document.getElementById('results').innerHTML = "<li>Please enter a search term!</li>";
        return;
    }

    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", `search.php?query=${encodeURIComponent(query)}`, true);
    xhttp.send();

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('results').innerHTML = this.responseText;
        }
    };
}