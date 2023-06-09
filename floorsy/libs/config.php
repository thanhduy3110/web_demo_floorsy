<?php
// Xử lý database
class config
{
    //Biến lưu trữ kết nối
    private $__conn;
    private $host="localhost";
    private $username="root";
    private $password="";
    private $database="demo_floorsy";


    public function __construct(){
        // Kết nối
        $this->connect();
    }
    //Hàm kết nối
    function connect()
    {
        //nếu chưa kết nối thì kết nối
        if (!$this->__conn) {
            //kết nối
            $this->__conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
            if ($this->__conn === false) {
                die("ERROR: Không thể kết nối. " . $this->__conn->connect_error);
            }
            //xử lý tránh lỗi font
            mysqli_query($this->__conn, "SET character_set_results = 'utf8',character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
        }
    }
    // Hàm Ngắt Kết Nối
    function dis_connect()
    {
        // Nếu đang kết nối thì ngắt
        if ($this->__conn) {
            mysqli_close($this->__conn);
        }
    }

    // Hàm Insert
    function insert($table, $data)
    {
        // Lưu trữ danh sách field
        $field_list = '';
        // Lưu trữ danh sách giá trị tương ứng với field
        $value_list = '';

        // Lặp qua data
        foreach ($data as $key => $value) {
            $field_list .= ",$key";
            $value_list .= ",'" . mysqli_real_escape_string($this->__conn, $value) . "'";
        }

        // Vì sau vòng lặp các biến $field_list và $value_list sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
        $sql = 'INSERT INTO ' . $table . '(' . trim($field_list, ',') . ') VALUES (' . trim($value_list, ',') . ')';
        return mysqli_query($this->__conn, $sql);
    }
    // Hàm Update
    function update($table, $data, $where)
    {
        $sql = '';
        // Lặp qua data
        foreach ($data as $key => $value) {
            $sql .= "$key = '" . mysqli_real_escape_string($this->__conn, $value) . "',";
        }

        // Vì sau vòng lặp biến $sql sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
        $sql = 'UPDATE ' . $table . ' SET ' . trim($sql, ',') . ' WHERE ' . $where;
        return mysqli_query($this->__conn, $sql);
    }

    // Hàm delete
    function remove($table, $where)
    {
        // Delete
        $sql = "DELETE FROM $table WHERE $where";
        return mysqli_query($this->__conn, $sql);
    }

    // Hàm lấy danh sách
    function get_list($sql)
    {

        $result = mysqli_query($this->__conn, $sql);

        if (!$result) {
            die('Câu truy vấn bị sai');
        }

        $return = array();

        // Lặp qua kết quả để đưa vào mảng
        while ($row = mysqli_fetch_assoc($result)) {
            $return[] = $row;
        }

        // Xóa kết quả khỏi bộ nhớ
        mysqli_free_result($result);

        return $return;
    }
}

?>