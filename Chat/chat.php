<?php

    include 'db.php';

    $query = "select * from chat order by id desc";
    $run = $conn->query($query);
    while($row = $run->fetch_array()) :
?>
<div id="chat_data">
    <span style="color:green;"><?php echo $row['name'] ; ?> :</span>
    <span style="color:brown;"><?php echo $row['msg'] ; ?></span>
    <span style="float:right;"><?php echo formateDate($row['date']) ; ?></span>
</div>
    <?php endwhile ; ?>