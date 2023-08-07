<?
date_default_timezone_set('Asia/Taipei');
session_start();

class DB
{
    private $dsn = 'mysql:host=localhost;charset=utf8;dbname=phpnote';
    private $root = 'root';
    private $password = '';
    private $table;
    private $pdo;

    public function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, $this->root, $this->password);
    }
    public function all()
    {
        $sql = "select * from $this->table ";
        return $this->pdo->query($sql)->fetchAll();
    }
    public function find($arg)
    {
        $sql = "select * from $this->table ";

        //判斷參數是否為陣列，
        //如果參數為陣列，則將陣列處理成where條件語句
        //如果參數不是陣列，則視為資料id值
        if (is_array($arg)) {

            //利用迴圈及sprintf()來建立條件的字串陣列
            foreach ($arg as $key => $value) {
                $tmp[] = sprintf("`%s`='%s'", $key, $value);
            }

            //將字串陣列組合成條件語句字串
            $sql = $sql . " where " . implode(" && ", $tmp);
        } else {

            //將參數視為id，並建立起條件語句字串
            $sql = $sql . " where `id`='$arg'";
        }
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
}
function to($url)
{
    header("location:" . $url);
}
