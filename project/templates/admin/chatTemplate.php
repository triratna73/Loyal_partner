<article class="chattemplate">

    <div class="handled">
        <h3> Your Clients </h3>
        <?php
        foreach ($handledname as $value) {
            echo '<li><a class="msg" href="index.php?page=chat&chat='. $value.'">'.$value.'</a></li><br><br>';
        }
        ?>
    </div>

    <div class="chatscreen">
        <div class="messages">
            <?php
            $client="";
            foreach ($message as $mes) {
                if($mes['message_by']==$_SESSION['username']){
                    echo "<p class='messageto'> (".$_SESSION['username'].") : ". $mes['message'].'</p>';
                }
                else{
                    echo "<p class='messageby'> (".$mes['message_by'].") : ". $mes['message'].'</p>';
                    $client=$mes['message_by'];
                    
                }
            }
            ?>
        </div>

        <br>
        <br>
        <br>

        <div class="messagebox">
            <form method="post" action="index.php?page=chat">
                <input type="text" name="message" required>
                <input type="hidden" name="message_to" value=<?php if($client!=""){echo $client;} else echo " ";?>>
                <input type="hidden" name="message_by" value=<?php echo $_SESSION['username'];?>>
                <input type="submit" name="send" value="Send">
            </form>
        </div>
    </div>

    <div class ="requests">
        <h3>New Client Requests</h3>
        <?php
            foreach ($unhandledname as $value) {
                echo '<li><a class="msg" href="index.php?page=chat&handle='. $value.'">'.$value.'</a></li><br><br>';
        }
        ?>
    </div>
       
</article> 