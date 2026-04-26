        <!-- row 1 -->
        <?php 
        while ($row = mysqli_fetch_assoc($result)) { 
            
            $locint = $row['location'];

            $locsql = "SELECT location FROM location WHERE id = $locint";
            $resultloc = $mysqli->query($locsql);


            $char = 1;
            $char = $row['class2'];
            $subclass = chr(64 + $char);
            
            while ($rowloc = mysqli_fetch_assoc($resultloc)) { 

        ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['datetime']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['class1'] . "-" . $subclass; ?></td>
                <td><?= $row['location']. ". " .$rowloc['location']; ?></td>
                <td><?= $row['ip']; ?></td>
                <td><?= $row['browser']; ?></td>
            </tr>
        <?php } }?>