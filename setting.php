<?
date_default_timezone_set('Asia/Taipei');
class DB
{
    private $dsn = 'mysql:host=localhost;charset=utf8;dbname=phppractice';
    private $root = 'root';
    private $password = 'root';
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

        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function findByArray($arg)
    {
        $sql = "select * from $this->table ";

        foreach ($arg as $key => $value) {
            $tmp[] = sprintf(" %s = '%s'", $key, $value);
        }

        $sql = $sql . " where " . implode(" && ", $tmp) . ";";

        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    public function findById($arg)
    {
        $sql = "select * from $this->table ";

        $sql = $sql . " where id = '$arg' ;";

        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    public function countByArray($arg)
    {
        $sql = "select count(*) from $this->table ";

        foreach ($arg as $key => $value) {
            $tmp[] = sprintf(" %s = '%s' ", $key, $value);
        }
        $sql = $sql . " where " . implode(" && ", $tmp);

        return $this->pdo->query($sql)->fetchColumn();
    }
    public function updateByArray($arg)
    {
        foreach ($arg as $key => $value) {
            if ($key != 'id') {
                $tmp[] = sprintf(" %s = '%s' ", $key, $value);
                $sql = "update $this->table set " . implode(",", $tmp) . " where id = '" . $arg['id'] . "'";
            }
        }
        return $this->pdo->exec($sql);
    }
    public function createByArray($arg)
    {
        $sql = "insert into $this->table ( " . implode(",", array_keys($arg)) . " ) values ( '" . implode("','", $arg) . "')";

        return $this->pdo->exec($sql);
    }
    public function deleteByArray($arg)
    {
        foreach ($arg as $key => $value) {
            $tmp[] = sprintf(" %s =  '%s' ", $key, $value);
        }
        $sql = "delete from $this->table where " . implode(" && ", $tmp);

        $this->pdo->exec($sql);
    }
    public function deleteById($arg)
    {
        $sql = "delete from $this->table where id = " . $arg;

        $this->pdo->exec($sql);
    }
    public function countColumns()
    {
        $sql = "select count(*) from $this->table ";
        return $this->pdo->query($sql)->fetchColumn();
    }
    public function q($sql)
    {
        $this->pdo->query($sql);
    }
}
function to($url)
{
    header("location:" . $url);
}
session_start();
if (empty($_SESSION['visited'])) {
    $visit_number = new DB('visit_number');
    $num = $visit_number->findById(1);
    $num['quantity']++;
    $visit_number->updateByArray($num);
    $_SESSION['visited'] = 1;
}
