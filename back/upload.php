<h1>檔案上傳</h1>
<form action="./api/upload.php" method="post" enctype="multipart/form-data">
    <input type=file name="img">
    <input type=submit value="上傳">
    <?php
    $sql = "select `img` from `img`";
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    echo "<br>";
    
    if (isset($_GET['error'])) {
        echo "<span style='color:red'>";
        echo $_GET['error'];
        echo "</span>";
    }
    foreach ($rows as $row) {

    ?>
        <br>
        <?php
        if (!empty($row['img'])) {
        ?>
            <img src="./upload/<?= $row['img']; ?>" style="width:360px;height:240px">
    <?php
        }
    }
    ?>
</form>