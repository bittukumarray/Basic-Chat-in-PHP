<?php
include 'db.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script>
        function ajax(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
                if(req.readyState==4 && req.status == 200){
                    document.getElementById('chat').innerHTML = req.responseText;

                }
            }

            req.open('GET','chat.php',true);
            req.send();
        }
        setInterval(function(){ajax();},1000);
    
    </script>
</head>
<body onload="ajax() ;">

<div id="container">
    <div id="chat_box">
        <div id="chat"></div>
    </div>
    <form action="index.php" method="POST">
    <input type="text" name="name" placeholder="Enter Your Name" required>
    <textarea name="message" id="" placeholder="Enter Messages" required></textarea>
    <button type="submit" name="submit" id="submit">Send</button>
    
    </form>

    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $msg = $_POST['message'];
            $query = "insert into chat (name,msg) values('$name','$msg')";
            $run = $conn->query($query);
            if($run){
                echo "<embed loop='false' src='chat.ogg' hidden='true' autoplay='true'/>";

            }
            
        }

    ?>

</div>
    
</body>
</html>