<!DOCTYPE HTML>
<html>
    <body>
        <h1>It works! It's very nice! ...  </h1>



        <?php
		echo "<h1>helloWorld</h1>";
		echo "<p></p>";
		
        echo PHP_VERSION;
        echo "<p></p>";
        echo PHP_OS;
		echo "<p></p>";

        var_dump(PDO::getAvailableDrivers());
        echo "<p></p>";

        phpinfo(INFO_GENERAL);
        phpinfo(INFO_LICENSE);
        echo "<hr/>";
		echo "<p></p>";
        phpinfo();
        ?>

    </body>
</html>
