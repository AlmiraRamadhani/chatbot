<?php include "connection.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Chatbot</title>
</head>

<body>
    <span id="ref">
        <div class="square">
            <center>
                <h2>Messages</h2>
            </center>

            <br>

            <?php
            $query = "SELECT * FROM chat ORDER BY date ASC";
            $res = mysqli_query($conn, $query);

            while ($data = mysqli_fetch_array($res)) {
                $user = $data['user'];
                $chatbot = $data['chatbot'];
                $date = $data['date'];
            ?>

                <div class="container1" style="margin-right: 400px;">
                    <img src="avatar.jpg" alt="Avatar" style="width: 100%;">
                    <p id="message"><?= $user; ?></p>
                    <span class="time-right"><?= $date; ?></span>
                </div>

                <div class="container1 darker" style="margin-left: 400px;">
                    <img src="avatar.jpg" alt="Avatar" class="right" style="width: 100%;">
                    <p><?= $chatbot; ?></p>
                    <span class="time-left"><?= $date; ?></span>
                </div>

            <?php } ?>

            <div class="sticky">
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="msg">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary" type="button" onclick="send();">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </span>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</body>

</html>