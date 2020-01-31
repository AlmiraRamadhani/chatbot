<?php
    include "connection.php";

    $server_time = date("Y-m-d H:i:s");

    if (isset($_POST['text'])) {
        $msg = mysqli_real_escape_string($conn, $_POST['text']);
        $sql = "SELECT * FROM question WHERE question RLIKE '[[:<:]]" . $msg . "[[:>:]]'";
        $query = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($query);

        if ($count == "0") {
            $data = "I am sorry but i don't know about your question.";
            $sql1 = "INSERT INTO chat (user, chatbot, date) VALUES ('$msg', '$data', '$server_time')";
            $query1 = mysqli_query($conn, $sql1);
        }
        else {
            while ($row = mysqli_fetch_array($query)) {
                $data = $row['answer'];
                $sql2 = "INSERT INTO chat (user, chatbot, date) VALUES ('$msg', '$data', '$server_time')";
                $query2 = mysqli_query($conn, $sql2);
            }
        }
        //echo $msg;
    }
?>