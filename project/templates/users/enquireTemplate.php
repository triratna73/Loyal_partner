<article>

    <?php
        $id='0';
        foreach($data as $value){
            $id=$value['prop_id'];
    ?>

    <div class="propdetails">
        <h2><?php echo 'Name  '.$value['prop_name'];?></h2>
        <h4><p><?php echo $value['prop_type'];?> Located at: </p>
        <p><?php echo $value['prop_StreetName'].' '.$value['prop_suburb'].' '.$value['prop_state'].' '.$value['prop_postCode'];?></p>
        <p>Recommended Guests: <?php echo $value['prop_occupancy'];?></p>
        <p>Details: <?php echo $value['prop_det']; ?></p>
        <p>Price: $<?php echo  $value['price'];?></p><br></h4>
    </div>
    <?php } ?>

    <form method="post" action="index.php?page=book">
        <label>From  : </label>
        <input type="date" name="start_time" required><br>

        <label>To      :  </label>
        <input type="date" name="end_time" required><br>

        <input type="hidden" name="prop_id" value=<?php echo $id;?>><br>
        <input type="hidden" name="status" value="Not-Confirmed">
        <input type="submit" name="book" value="Book">
        <input type="hidden" name="user_id" value=<?php echo $uid;?>>
    </form>

    <h3>Confused about this? <br>Need to find out more? <br><br> Take a chat with us and we can guide you..<br></h3>
    <button><a href ="index.php?page=chatnow"> CHAT NOW </a></button>
</article>