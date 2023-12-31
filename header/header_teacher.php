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

<ul class="dropDownMenu   shadow p-3 mb-5  rounded">
        <li><a href="index.php">網站首頁</a></li>
        <li><a href="">課程相關</a>
            <ul>
            
                <li><a href="./index.php?do=subject">查詢課程資料</a></li> 
                <li><a href="./index.php?do=statis_class">課程資料統計</a></li>           
            </ul>
        </li>
        
        <li><a href="./index.php?do=img">檔案上傳</a>
        <li>
        <?php if(isset($_SESSION['login'])){
            echo "<a href='./api/logout.php'>登出</a>";
            echo "  ".$_SESSION['name'] . " 你好!!";
        }else{
            echo "<a href='?do=login'>登入</a>";
        }    
       
            ?>
        </li>
    </ul>
</header>