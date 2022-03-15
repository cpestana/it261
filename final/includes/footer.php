<footer>
        <div id="inner-footer">
            <ul>
                <li>Copyright &copy;
                 <?php echo date('Y') ; ?>
                </li>
                <li>All Rights Reserved</li>
                <li><a href="../index.php">Web Design by Christine</a></li>
                <li><a href="https://github.com/cpestana/it261/">Github</a></li>
            </ul>
        </div> <!--end inner-footer-->
    </footer>

<?php
 //release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);
?>
</body>
</html>