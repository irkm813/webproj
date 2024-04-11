<script>
    window.onload = async () => {
        let messages = await fetch("/getMessages", {
                "method": "get"
            })
            .then(response => response.json())
            .then((data) => {
                for (var msg in data) {
                    if (data) {
                        $name = data[msg][2] != null ? data[msg][6] + " " + data[msg][7] : "Vendég";
                        let newDiv = document.querySelector("#messages").appendChild(document.createElement("div"));

                        newDiv.classList.add("comment-box");

                        newDiv.appendChild(document.createElement("div")).textContent = data[msg][1];
                        newDiv.appendChild(document.createElement("div")).textContent = $name;
                        newDiv.appendChild(document.createElement("div")).textContent = data[msg][3];
                        newDiv.appendChild(document.createElement("div")).textContent = data[msg][4];
                        newDiv.appendChild(document.createElement("p")).textContent = data[msg][5];
                            
                    }else{
                        document.querySelector("#messages")
                    .appendChild(document.createElement("p"))
                    .textContent = "Nincs még bejegyzés! Légy te az első!";
                    }
                }
            }).catch((e) => {
                document.querySelector("#messages")
                    .appendChild(document.createElement("p"))
                    .textContent = "Ismeretlen hiba lépett fel! Próbálkozzon később!";
            })
    };
</script>

<div >

    <div id="messages" class="container">
    </div>

</div>