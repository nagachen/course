<!-- 後台修改課程資料 -->
<?php


// 確認課程id是否有傳過來，不在就轉址去查詢那
if (empty($_POST['id'])) {
    header("location:?do=query_class");
}

$sql = "select * from `class` where `id`='{$_POST['id']}'";
$row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

?>


<div class="update_student">
    <h1> 修改課程資料 </h1>

    <form action="./api/update_class.php" method="post">
        <div>
            <label for="subject">課程名稱:</label>
            <input type="text" name="subject" value="<?= $row['subject']; ?>">
        </div>
        <div>
            <label for="subject_no">課程代號:</label>
            <input type="text" name="subject_no" value="<?= $row['subject_no']; ?>">
        </div>
        <div>
            <label for="create_id">課程建立者:</label>
            <input type="text" name="create_id" value="<?= $row['create_id']; ?>">
        </div>

        <div>
            <label for="start_time">開始時間:</label>
            <input type="date" name="start_time" value="<?= $row['start_time']; ?>">
        </div>
        <div>
            <label for="end_time">結束時間:</label>
            <input type="date" name="end_time" value="<?= $row['end_time']; ?>">
        </div>

        <div>
            <input type="hidden" name='id' value="<?= $row['id'] ?>">
        </div>
        <div>
            <!-- c_select 資料表 -->
            <div>
                <button type=button id="addBtn">增加學生</button>
                <button type=button id="subBtn">減少學生</button>
            </div>
            <div>
                <label for="addStd">選課學生:</label>
                <input type="text" name="addStd[]">
            </div>
            <div id="std">
            </div>
            <div>
                <input type="submit" value="送出">
                <input type="reset" value="重置">
            </div>
    </form>
</div>

<script>
    const addBtn = document.getElementById("addBtn");
    const subBtn = document.getElementById("subBtn");
    const std = document.getElementById("std");

    function add() {
        let div = document.createElement('div');
        let label = document.createElement('label');
        let txtNode = document.createTextNode("選課學生:");
        label.appendChild(txtNode);
        let input = document.createElement('input');
        input.setAttribute('type', 'text');
        input.setAttribute('name', 'addStd[]');
        let buttonAdd = document.createElement('button');
        buttonAdd.setAttribute('type', 'button');
        let txtNodeBtn = document.createTextNode("增加");
        buttonAdd.appendChild(txtNodeBtn);

        let buttonDel = document.createElement('button');
        buttonDel.setAttribute('type', 'button');
        let txtNodeBtn2 = document.createTextNode("減少");
        buttonDel.appendChild(txtNodeBtn2);

        buttonAdd.setAttribute('class', 'addBtn');
        buttonDel.setAttribute('class', 'delBtn');
        div.appendChild(label);
        div.appendChild(input);
        div.appendChild(buttonAdd);
        div.appendChild(buttonDel);
        std.appendChild(div);

        let addBtn = document.getElementsByClassName('addBtn');
        addBtn = addBtn[addBtn.length - 1];


        let delBtn = document.getElementsByClassName('delBtn');
        delBtn = delBtn[delBtn.length - 1];

        addBtn.addEventListener('click', function() {
            add();

        });

        delBtn.addEventListener('click', function() {
            std.removeChild(std.lastElementChild);
        })

    }


    addBtn.addEventListener('click', function() {
        add();

    });



    subBtn.addEventListener('click', function() {

        std.removeChild(std.lastElementChild);
    });
</script>