<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>

    <?php
    if(isset($_POST['deletebtn'])){

        $con =  include 'sql_conn.php';
        $tud_id = $_POST['sid'];
        $qur = "DELETE FROM student WHERE sid = {$tud_id}";
        $result = mysqli_query($conn,$qur);

        header('Location: http://localhost/php_crud/index.php');

        mysqli_close($conn);

    }
    

    ?>

</div>
</div>
</body>
</html>
