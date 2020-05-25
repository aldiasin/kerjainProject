var ajaxRequest;
function ajaxResponse() {
    if (ajaxRequest.readyState != 4) {
        return;
    } else {
        if (ajaxRequest.status == 200) {
            var json = JSON.parse(ajaxRequest.responseText);
            document.getElementById("showtime").innerHTML =
                json.year +
                "-" +
                json.mon +
                "-" +
                json.mday +
                " " +
                json.hours +
                ":" +
                json.minutes +
                ":" +
                json.seconds;
        } else {
            alert("Request failed: " + ajaxRequest.statusText);
        }
    }
}

function getServerTime() {
    ajaxRequest = new XMLHttpRequest();
    var svcUrl = "telltime-rest.php";
    ajaxRequest.onreadystatechange = ajaxResponse;
    ajaxRequest.open("GET", svcUrl);
    ajaxRequest.send(null);
}

function autoUpdateTime() {
    setInterval(function () {
        getServerTime();
    }, 1000);
}