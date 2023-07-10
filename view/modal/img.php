    
    <h1>檔案上傳</h1>
    <table class="table table-Warning table-striped w-75 text-center mx-auto mt-3 shadow p-3 mb-5 bg-body-tertiary rounded">
    <form action="./api/img.php" method="post" enctype="multipart/form-data">    
    <tr>
            <td>
                <input type=file name="img">
            </td>
            <td>
                <input type=submit value="上傳">
            </td>
        </tr>
        <tr>
            <?php
            $sql = "select `img` from `img`";
            $rows=$Img->all();
            
           
            if (isset($_GET['error'])) {
                echo "<span style='color:red'>";
                echo $_GET['error'];
                echo "</span>";
            }
            $count = 0;
            foreach ($rows as $row) {

            ?>
                
                <?php
                if (!empty($row['img'])) {

                ?>
                    <td>
                        <img src="./upload/<?= $row['img']; ?>" style="width:360px;height:240px">
                    </td>
            <?php
                    $count += 1;
                    if ($count % 2 == 0) {
                        echo "</tr><tr>";
                    }
                }
            }
            ?>
        </tr>
        </form>
    </table>
