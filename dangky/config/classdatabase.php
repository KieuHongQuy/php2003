<?php 
    class database{
        private $hostname;
        private $username;
        private $password;
        private $database;

        protected $connection;
        protected $result;

        function __construct()
        {
            $this->hostname = 'localhost';
            $this->username = 'root';
            $this->password = '';
            $this->database = 'website1';
            $this->connect();
        }

        private function connect(){
            if (!isset($this->connection)) {
                $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);

                if(!$this->connection){
                    echo  'kết nối thất bại';
                    exit;
                }else{
                    mysqli_query($this->connection,'SET NAMES "utf8"');
                }
            }
            return $this->connection;
        } 

        //thực thi câu lệnh
        public function query($sql){
            $this->result = $this->connection->query($sql);
            return $this->result;
        }

        //lấy dữ liệu
        public function fetch_array(){
            $data = 0;
            if ($this->result) {
                $data = mysqli_fetch_assoc($this->result);
            }else{
                $data = 0;
            }
            return $data;
        }
        public function result_array(){
            if ($this->result) {
                $data = array();
                while ($row = mysqli_fetch_assoc($this->result)) 
                    $data[] = $row;
                return $data;
            }else{
                $data = 0;
            }
            return $data;
        }

        //thêm dữ liệu
        public function insertData($table,$data){
            $key = implode("','", $data);
            $value = implode(",",array_keys($data));
            $sql = "INSERT INTO ".$table."(".$value.") VALUES ('".$key."')";
            $this->query($sql);
            return mysqli_insert_id($this->connection);
        }

        //updata database
        public function updateData($table,$data,$where){
            foreach($data as $key => $val){
                $set .= $key."='".$val."',";
            }
            $set{strlen($set)-1} = ' ';
            $dk = "Where 1=1 and ".$where;
            $sql = "UPDATE ".$table." SET ".$set." ".$dk;
        	return $this->query($sql);
        }

        // //delete data
        public function deleteData($table,$id){
            $where = "1=1 and ".$id;
            $sql = "DELETE FROM ".$table." WHERE ".$where."";
        	return $this->query($sql);
        }
    }
        

 ?>