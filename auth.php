<?php 
	// class auth {
	// 	private $host;
	// 	private $dbName;
	// 	private $user;
	// 	private $pass;
        
    //     public function __construct(){
    //         $this->host = getenv('MYSQL_HOST');
    //         $this->dbName = getenv('MYSQL_DB');
    //         $this->user = getenv('MYSQL_USER');
    //         $this->pass = getenv('MYSQL_PASS');
    //     }

	// 	public function connect() {
	// 		try {
	// 			$conn = new PDO($this->host . '; dbname=' . $this->dbName, $this->user, $this->pass);
	// 			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 			return $conn;
	// 		} catch( PDOException $e) {
	// 			echo 'Database Error: ' . $e->getMessage();
	// 		}
	// 	}
	// }
	
	$host = "/cloudsql/wayang-314813:asia-southeast2:ttow";
    $user = "root";
    $pass = "wyg2021";
    $db = "wayangkulit";

    $mysqli = mysqli_connect($host,$user,$pass,$db) or die ("Tidak dapat terkoneksi dengan database");
?>