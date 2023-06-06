<!-- 後台新增學生或員工 -->

<div class="add_student">
    <h1> 新增學生或員工 </h1>
    <form action="./api/add_student.php" method="post">
        <div>
            <label for="number">學號或員工號:</label>
            <input type="text" name="number" >
        </div>
        <div>
            <label for="name">姓名:</label>
            <input type="text" name="name" >
        </div>
        <div>
            <label for="email">電子郵件:</label>
            <input type="text" name="email" >
        </div>
        <div>
            <label for="acc">帳號:</label>
            <input type="text" name="acc" >
        </div>
        <div>
            <label for="pw">密碼:</label>
            <input type="text" name="pw" >
        </div>
        <div>
            <label for="power">身份:</label>
            <input type="text" name="power" >
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value="重置">
        </div>
    </form>
</div>