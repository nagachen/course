

<form action="./api/login.php" method="post" class="login">
    <div>
        <label for="">帳號</label>
        <input type="text" name="acc" id="acc">
    </div>
    <div>
        <label for="">密碼</label>
        <input type="text" name="pw" id="pw">
    </div>
    <div><input type="submit" value="登入"></div>
    <?PHP
    if (isset($_SESSION['error'])) {
        echo "<span style='color:red;'>";
        echo $_SESSION['error'];
        echo "</span>";
    }
    ?>
</form>