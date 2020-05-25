let content = document.getElementById('content');

function imu(input){
    if (input.length !== 0) {
        var XML = new XMLHttpRequest();
        XML.onreadystatechange = function(){
            if (XML.readyState == 4 && XML.status == 200){
                content.innerHTML = XML.responseText;
            }
        };

        XML.open('GET','search.php?hasil='+input, true);
        XML.send();
    }
}