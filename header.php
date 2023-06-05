<style>
    * {
        box-sizing: border-box;
    }

    ul {
        /* 取消ul預設的內縮及樣式 */
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .dropDownMenu {
        /* border:  1px solid #ccc; */
        width: 80vw;
        font-weight: bold;
        display: flex;
        font-family: 'Open Sans', Arial, sans-serif;
        font-size: 20px;
        justify-content: space-around;
        margin: auto;
        

    }

    .dropDownMenu>li>ul li {
        font-size: 14px;
        
    }

    .dropDownMenu ul {
        /*隱藏次選單*/
        display: none;
        
    }

    .dropDownMenu li:hover>ul {
        /* 滑鼠滑入展開次選單*/
        display: block;

    }

    .dropDownMenu a:hover {
        /* 滑鼠滑入按鈕變色*/
        background-color: #ef5c28;
        color: #fff;
    }

    .dropDownMenu a {
        background-color: #fff;
        color: #333;
        /* padding: 0 30px; */
        text-decoration: none;
        line-height: 40px;
        /* white-space: nowrap; */
        background-color: rgb(255,255,255,0);

    }

    .dropDownMenu ul li:last-child {
        border-bottom: none;
    }

    .dropDownMenu ul {
        border: #ccc 2px solid;
        
        position: absolute;
    }

    .dropDownMenu ul li {
        border-bottom: #ccc 2px solid;
        background-color: lightgreen;
        
    }
</style>


<header>

    <ul class="dropDownMenu">
        <li><a href="index.php">網站首頁</a></li>
        <li><a href="">課程相關</a>
            <ul>
            <li><a href="./backend.php?do=add_class">新增課程資料</a></li>
                <li><a href="./backend.php?do=query_class">查詢課程資料</a></li>
                <li><a href="./backend.php?do=update_class">更新課程資料</a></li>
                <li><a href="./backend.php?do=del_class">刪除課程資料</a></li>
            </ul>
        </li>
        
        <li><a href="">學生資料</a>
            <ul>
                <li><a href="./backend.php?do=add_student">新增學生或老師資料</a></li>
                <li><a href="./backend.php?do=query_student">查詢學生或老師資料</a></li>
                <li><a href="./backend.php?do=update_student">更新學生或老師資料</a></li>
                <li><a href="./backend.php?do=del_student">刪除學生或老師資料</a></li>
            </ul>
        </li>
        <li>
        <?php if(isset($_SESSION['login'])){
            echo "<a href='./api/logout.php'>登出</a>";
            echo "  ".$_SESSION['login'] . " 你好!!";
        }else{
            echo "<a href='?do=login'>登入</a>";
        }    
       
            ?>
        </li>
    </ul>
</header>