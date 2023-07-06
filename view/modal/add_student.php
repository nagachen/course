<!-- 後台新增學生或員工 -->
<div class="container w-50 shadow p-3 mb-5 bg-body-tertiary rounded text-center">
<form action="./api/add_student.php" method="post" >
    <h1> 新增學生或員工 </h1>
    
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">學號或員工號:</span>
                    <input type="text" name="number" class="form-control" placeholder="輸入你的學號或員工號" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">姓名:</span>
                    <input type="text" name="name" class="form-control" placeholder="輸入你的姓名" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">電子郵件:</span>
                    <input type="text" name="email" class="form-control" placeholder="輸入你的郵件" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon4">帳號:</span>
                    <input type="text" name="acc" class="form-control" placeholder="輸入你的帳號" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
            </div>
            <div class="col-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon5">密碼:</span>
                    <input type="text" name="pw" class="form-control" placeholder="輸入你的密碼" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
            </div>
            <div class="col-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon5">身份:</span>
                    <input type="text" name="power" class="form-control" placeholder="輸入你的身份" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
            </div>
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value="重置">
        </div>
    </div>





</form>