<?php
class DB
{
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=s1120208";
    protected $table;

    protected $user = "s1120208";
    protected $pw = "s1120208";
    protected $pdo;

    /**
     * 建構式
     * 在實例化時，需要帶入一個資料表名稱，並會在實例化時，建立起對資料庫的連線
     */
    function __construct($table)
    {
        $this->pdo = new  PDO($this->dsn, $this->user, $this->pw);
        $this->table = $table;
    }
    /**
     * 取得多筆資料的方法
     * 採用不定參數，因此使用方法可以有：
     * all() 不帶參數，表示要撈取資料表全部內容
     * all($array) 帶入一個陣列，表示要撈取符合陣列條件的資料
     * all($array,$sql) 帶入陣列及其他sql字串，表示要撈取符合陣列條件及其它限制條件的資料
     * all($sql) 帶入一個sql字串，表示要撈取符合sql字串條件的資料
     */

     function get_table(){
        return $this->table;
     }
    function all(...$arg)
    {
        $sql = "select * from $this->table";
        if (!empty($arg)) {
            if (is_array($arg[0])) {
                foreach ($arg[0] as $key => $value) {
                    $tmp[] = "`$key`='$value'";
                }
                $sql = $sql . " where " . join(" && ", $tmp);
            } else {
                $sql = $sql . $arg[0];
            }
        }

        //all($array,$sql) 帶入陣列及其他sql字串，表示要撈取符合陣列條件及其它限制條件的資料
        if (isset($arg[1])) {
            $sql = $sql . $arg[1];
        }
        // dd($sql);
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * 取得單筆資料的方法
     * 限定只能帶入一個參數
     * $arg 如果是陣列，表示要撈取符合陣列條件的資料
     * $arg 如果是id，表示要撈取指定id的資料
     */

    function find($arg)
    {
        $sql = "select * from $this->table";
        if (is_array($arg)) {
            foreach ($arg as $key => $value) {
                $tmp[] = "`$key`='$value'";
            }
            $sql = $sql . " where " . join(" && ", $tmp);
        } else {
            $sql = $sql . " where `id` = '$arg'";
        }
       
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * 新增或更新資料的方法
     * 限制只能帶入一個參數，而且這個參數必須是陣列
     * 如果$arg陣列中有id這個項目,表示要進行更新資料
     * 如果$arg陣列中沒有id這個項目，表示要進行新增資料
     */
    function save($arg)
    {
        if (isset($arg['id'])) {
            //update
            foreach ($arg as $key => $value) {
                $tmp[] = "`$key`='$value'";
            }
            $sql = "update $this->table set " . join(',', $tmp) . " where `id`='{$arg['id']}'";
        } else {
            //insert
            $cols = array_keys($arg);
            $sql = "insert into $this->table(`" . join("`,`", $cols) . "`)
                                    values('" . join("','", $arg) . "')";
        }
        return $this->pdo->exec($sql);
    }
    /**
     * 刪除資料的方法
     * 限制只能帶入一個參數
     * $arg 如果是陣列，表示要刪除符合陣列條件的資料(可能是多筆刪除)
     * $arg 如果是數字，表示要刪除指定id的資料
     * $arg 如果是字串，表示要刪除指定SQL條件語法的資料
     */
    function del($arg)
    {
        $sql = "delete from $this->table";
        if (is_array($arg)) {
            foreach ($arg as  $key => $value) {
                $tmp[] = "`$key`='$value'";
            }

            $sql = $sql . " where " . join(" && ", $tmp);
        } else if (is_numeric($arg)) {
            $sql = $sql . " where `id` =" . $arg;
        } else {
            $sql = $sql . $arg;
        }
        return $this->pdo->exec($sql);
    }
    /**
     * 計算資料表筆數的方法
     * 利用原有的all()方法來取得符合條件的資料
     * 計算all()所回傳的陣列內容筆數即為資料筆數
     */
    function count(...$arg)
    {
        $result = $this->all(...$arg);
        return count($result);
    }
    /**
     * 聚合函數的方法
     * 帶入個聚合函數的名稱及指定要計算的欄位，即可計算結果
     */
    function math($math, $col, ...$arg)
    {
        $sql = "select $math($col) from $this->table";
        if (!empty($arg)) {
            if (is_array($arg[0])) {
                foreach ($arg[0] as $key => $value) {
                    $tmp[] = "`$key`='$value'";
                }
                $sql = $sql . " where " . join(" && ", $tmp);
            } else {
                $sql = $sql . $arg[0];
            }

            if (isset($arg[1])) {
                $sql = $sql . $arg[1];
            }
        }
        return $this->pdo->query($sql)->fetchColumn();
    }
    /**
     * 利用原有的math()方法，
     * 用來簡化方法的應用，但又不影響原本math()的其它彈性應用 
     */
    function sum($col, ...$arg)
    {
        return $this->math('sum', $col, ...$arg);
    }
    function max($col, ...$arg)
    {
        return $this->math('max', $col, ...$arg);
    }
    function min($col, ...$arg)
    {
        return $this->math('min', $col, ...$arg);
    }
    function avg($col, ...$arg)
    {
        return $this->math('avg', $col, ...$arg);
    }

    function list(){
       return "./view/list.php";
    }
}

?>