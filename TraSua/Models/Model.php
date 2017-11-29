<?php 

/**
* 
*/
class Model
{
	protected $conn ='';
	protected $query ='';
	protected $cursor =NULL;


	//Hàm khởi tạo
	function __construct()
	{
		try {
			// cái này sửa lại nè, nhớ sửa thường xuyên, vì tao lỡ cài mật khẩu cho mysql của tao rồi
			//Bữa đặt lại mật khẩu trắng lỗi tung tóe -_-
			//Lười google :))
			//sửa dbname, sửa cái '' sau root
			$this->conn = new PDO('mysql:host=localhost;dbname=nha_hang;charset=utf8', 'root', '');
			// $this->conn->query('set names "utf8"');	
		} catch (Exception $e) {
			$e->getMessage();
			die();
		}
	} //End

	//Đóng kết nối
	public function disconnect()
	{
		$this->conn = NULL;
	} //End


	//set câu truy vấn
	public function setQuery($query)
	{
		$this->query = $query;
	} //End

	//Thực thi câu truy vấn
	public function execute($options =array())
	{
		$this->cursor = $this->conn->prepare($this->query);
		if ($options) {
			for ($i=0; $i < count($options); $i++) { 
				$this->cursor->bindParam($i+1, $options[$i]);
			}
		}
		$this->cursor->execute();
		return $this->cursor;
	} //End


	//Lay tat ca cac dong trong bảng
	public function loadAllRows($options = array())
	{
		if (!$options) {
			if (!$result = $this->execute()) {
				return false;
			}
		} else {
			if (!$result = $this->execute($options)) {
				return false;
			}
		}
		return $result->fetchAll(PDO::FETCH_OBJ);
	} //End


	//Lấy 1 dòng
	public function loadRow($option=array()) {
    if(!$option) {
      if(!$result = $this->execute())
          return false;
    }
    else {
      if(!$result = $this->execute($option))
          return false;
    }
    return $result->fetch(PDO::FETCH_OBJ);
  }

}


 ?>