<!-- 課程查詢後台 -->

<!-- 現有資料列表 -->


<?php


$rows = $Subject->all();


?>
<div class=" mx-auto w-75 fs-3 text-center boder shadow p-3 mb-5 bg-body-tertiary rounded">
<form action="./api/set_class.php" method="post">
<table class="query_student">
    <h1>課程查詢</h1>
    <tr>

        <td>課程名稱</td>
        <td>課程代號</td>
        <td>開課老師</td>
        <td>開始時間</td>
        <td>結束時間</td>
        <td>啟用</td>

    </tr>
    
    <?php
    foreach ($rows as $row) {
    ?>
        <tr>
            <td><?= $row['subject'] ?></td>
            <td><?= $row['subject_no'] ?></td>
            <td><?php
            
                $name = $Student->find(["id"=>"{$row['create_id']}"]);
                
                echo "$name[name]";
                ?></td>
            <td><?= $row['start_time'] ?></td>
            <td><?= $row['end_time'] ?></td>

            <td>
                
                    <input type="checkbox" 
                    <?=($row['close']==1)?"checked":""?>
                    name="option[]" value="<?= $row['subject'] ?>"> 啟用<br>    
            </td>
        </tr>
        
    <?php
    }
    ?>
    
</table>
<br>
<input type="submit" value="提交" >
        </form>
</div>