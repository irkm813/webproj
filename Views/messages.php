<script>
    window.onload = async () => {
        let messages = await fetch("/getMessages", {
                "method": "get"
            })
            .then(response => response.json())
            .then((data) => {
                console.log(data);
                for (var msg in data) {
                    $name = data[msg][2] != null ? data[msg][6] + " " + data[msg][7] : "Vendég";
                    document.querySelector("#messages")
                        .appendChild(document.createElement("p"))
                        .textContent = data[msg][1] + " - " + $name + " - " + data[msg][3] + " - " + data[msg][4] + " - " + data[msg][5];
                }
            }).catch((e) => {
                console.log(e);

            })
    };
</script>

<h1>Üzenetek</h1>

<div id="messages" class="container">
</div>