The content in the gray box is loaded via an AJAX call.

<div class="bg-light border rounded-3" id="dynamicArea"></div>

<script>
    /**
     * simple AJAX call demo
     */
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE) {
           if (xmlhttp.status == 200) {
               document.getElementById("dynamicArea").innerHTML = xmlhttp.responseText;
           }
        }
    };
    xmlhttp.open("GET", "./demo/ajax", true);
    xmlhttp.send();
</script>
