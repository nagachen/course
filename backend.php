<!-- 後台頁面 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
        }
        ul { /* 取消ul預設的內縮及樣式 */
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .dropDownMenu {
        border:  1px solid #ccc;
        display: flex;
        font-family: 'Open Sans', Arial, sans-serif;
        font-size: 18px;
        justify-content: space-around;

    }
    .dropDownMenu ul { /*隱藏次選單*/
        display: none;
    }

    .dropDownMenu li:hover > ul { /* 滑鼠滑入展開次選單*/
        display: block;
    }
    
  </style>
</head>
<body>
    <header>
        <ul class="dropDownMenu">
            <li><a href="#">老師資料</a>
            <ul>
                <li><a href="#">新增老師資料</li>
                <li><a href="#">查詢老師資料</li>
                <li><a href="#">更新老師資料</li>
                <li><a href="#">查詢老師資料</li>
            </ul>
        </li>
        <li><a href="#">學生資料</a>
            <ul>
                <li><a href="#">新增學生資料</li>
                <li><a href="#">查詢學生資料</li>
                <li><a href="#">更新學生資料</li>
                <li><a href="#">查詢學生資料</li>
            </ul>
        </li>
        <li><a href="#">課程相關</a>
            <ul>
                <li><a href="#">新增課程資料</li>
                <li><a href="#">查詢課程資料</li>
                <li><a href="#">更新課程資料</li>
                <li><a href="#">查詢課程資料</li>
            </ul>
        </li>
        </ul>
    </header>
</body>
</html>
