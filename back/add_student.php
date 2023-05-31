<!-- 後台新增學生 -->

<div class="add_student">
    <h1> 新增學生 </h1>
    <form action="./api/add_student.php" method="post">
        <div>
            <label for="std_num">學號:</label>
            <input type="text" name="std_num" >
        </div>
        <div>
            <label for="std_name">姓名:</label>
            <input type="text" name="std_name" >
        </div>
        <div>
            <label for="std_email">電子郵件:</label>
            <input type="text" name="std_email" >
        </div>
        <div>
            <label for="std_course">選課科目</label>
            <!-- 先用輸入的，之後再用選的 -->
            <input type="text" name="std_course" >
        </div>
        <div>
            <label for="std_acc">帳號:</label>
            <input type="text" name="std_acc" >
        </div>
        <div>
            <label for="std_pw">密碼:</label>
            <input type="text" name="std_pw" >
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value="重置">
        </div>
    </form>
</div>