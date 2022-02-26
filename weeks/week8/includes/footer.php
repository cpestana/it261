<footer>
    <div class="inner">
<ul>
    <li>Copyright <?= date('Y') ?></li>

</ul>
</div>
</footer>

<?php
 //release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);
?>
</body>
</html>