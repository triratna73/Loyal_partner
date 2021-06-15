<article class="findclients">

    <div class="add">
        <p> LIST OF CLIENTS </p>
    </div>
    <table id="listClients">

    <tr><th>First Name</th><th>Last Name</th><th>E-mail Address</th><th>Edit Details</th><th>History</th> </tr>

    <?php
    foreach ($data as $value) {
        echo '<tr><td>'.$value['firstname'].'</td><td>'.$value['lastname'].'</td><td>'.$value['email'].'</td><td><a href="index.php?page=editClientDetails&cid='.$value['user_id'].'">Edit</a></td><td>
        <button><a href="index.php?page=clienthistory&uid='.$value['user_id'].'">Check</a></button>
        </td></tr>';
    }
    ?>

    </table>
</article>