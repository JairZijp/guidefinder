<hr>
<hr>
<div class="container">
    <div class="row">
        <table class="tftable" border="1">
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>City</th>
                <th>Description</th>
                <th>Verified</th>
            </tr>
        <?php
        if (isset($_SESSION['admin'])) {
            $result = $mysqli->query("SELECT * FROM members");
            while ($info = $result->fetch_assoc()) {
                echo '<tr>
						<td>' . $info['username'] . '</td>
						<td>' . $info['email'] .  '</td>
						<td>' . $info['firstname'] . '</td>
                        <td>' . $info['lastname'] . '</td>
                        <td>' . $info['sex'] . '</td>
                        <td>' . $info['phone'] . '</td>
                        <td>' . $info['city'] . '</td>
                        <td>' . $info['description'] . '</td>
                        <td>' . $info['activeAdmin'] . '</td>';

        ?>
        <td>
            <?php
            if(!$info['activeAdmin'] == "Yes"){
                ?>
                <form name="form1"  method="post">
                    <input name="checkbox" type="checkbox" id="checkbox" value="<?php echo $info['memberID']; ?>">

            <?php } $user = $info['username'];  ?>
            <!-- checkbox voor verwijderen -->
        </td>

    <?php
} ?>
    </tr>
</table>
<input class="btn" type="submit" name="verify" value="Verify" id="verify">
</form>
    <?php

    if(isset($_POST['verify'])){
        $verify_id = $_POST['checkbox'];
        $rs = $mysqli->query("UPDATE members SET activeAdmin = 'Yes' WHERE memberID ='$verify_id'");
        echo "<script> window.location = 'index.php';</script>";
    } } ?>
    </div>
</div>
