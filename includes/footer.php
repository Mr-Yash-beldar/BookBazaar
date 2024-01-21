<div id="sidebar">

    <?php
        if(isset($_SESSION['client']['status']))
        {
              echo '<ul>
                        <li>
                            <h2>Hi : '.$_SESSION['client']['unm'].'</h2>
                            <ul>
                                <li><a href="logout.php">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>';
        }
    ?>

    <ul>
        <li>
            <h2>Category</h2>
            <ul>
                <?php

                    include("includes/connection.php");

                    $cat_q = "SELECT * FROM category ORDER BY cat_nm ASC";
                    $cat_res = $mysqli->query($cat_q);

                    while($cat_row = $cat_res->fetch_assoc())
                    {
                        echo '<li><a href="book_list.php?id='.$cat_row['cat_id'].'&cat='.$cat_row['cat_nm'].'">'.$cat_row['cat_nm'].'</a></li>';
                    }
                ?>
            </ul>
        </li>
    </ul>
</div>
<!-- end #sidebar -->
<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->
<div id="footer">
    <p>&copy; 2024. All rights reserved. Project Made By <a href="https://www.github.com/Mr-Yash-beldar" target="blank">Yashodip Beldar</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
