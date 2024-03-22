<!----------------------------------------NAVBAR---------------------------------------------->
<?php include_once __DIR__."/navBar.php" ?>
    <h1>Current Server Time:</h1>
    <p id="time">Waiting for response...</p>

    <script>
        // AJAX request using fetch()
        fetch('/phpMVC/city')
        .then(response => response.text()) // Parse response as text
    .then(data => {
        // Update UI with the response data
        document.getElementById('time').innerText = data;
            })
            .catch(error => {
                console.error('Error:', error);
            });
    </script>

