
<div class="container w-25 mt-5 pt-5 border border-primary shadow p-3 mb-5 bg-body-tertiary rounded">
  <h2>選課系統登入</h2>
  <form action="./api/login.php" method="post">
    <div class="mb-3 mt-3">
      <label for="acc">帳號:</label>
      <input type="text" class="form-control" id="acc" placeholder="Enter acc" name="acc">
    </div>
    <div class="mb-3">
      <label for="pw">密碼:</label>
      <input type="password" class="form-control" id="pw" placeholder="Enter password" name="pw">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

    <?PHP
    if (isset($_SESSION['error'])) {
        echo "<span style='color:red;'>";
        echo $_SESSION['error'];
        echo "</span>";
    }
    ?>
