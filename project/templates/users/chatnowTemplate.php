<article class="chattemplate">
    <div class="messages">
        <?php
        $agent="";
        foreach ($message as $mes) {
            if($mes['message_by']==$_SESSION['username']){
                echo "<p class='messageby'>You (".$_SESSION['username'].") : ". $mes['message'].'</p>';
            }
            else{
                echo "<p class='messageto'>Loyal Partners (".$mes['message_by'].") : ". $mes['message'].'</p>';
                $agent=$mes['message_by'];
                
            }
        }
        ?>
    </div>

    <br>
    <br>
    <br>

    <div class="messagebox">
        <form method="post" action="index.php?page=chatnow">
            <input type="text" name="message" required>
            <input type="hidden" name="message_to" value=<?php if($agent!=""){echo $agent;} else echo " ";?>>
            <input type="hidden" name="message_by" value=<?php echo $_SESSION['username'];?>>
            <input type="submit" name="send" value="Send">
        </form>
    </div>
</article>