<?php
// checking for duplicate user
session_start();
if(isset($_SESSION['username']) && ($_SESSION['username'] !=""))
    {

    }else
    {
        header("location:login.php");
    }
class users{
	public $host = "localhost"; //strore the database information
	public $username = "root";
	public $pass = "";
	public $dbname = "quiz_oops";   
	public $conn;
	public $data;
	public $cat;
	public $ques;
	public $wrt;

	public function __construct() // database connection
	{
		$this->conn = new mysqli($this->host,$this->username,$this->pass,$this->dbname);
		if($this->conn->connect_errno)
		{
			die("Database connection failed".$this->conn->connect_errno); // if not connect print error
		}
	}

	public function signup($data) // store the value to database
	{
		$this->conn->query($data);
		return true;
	}

	public function signin($username,$pass) // match the value when login
	{
		$query = $this->conn->query("select username,pass from signup where username='$username' and pass='$pass'");
		$query->fetch_array(MYSQLI_ASSOC);
		if ($query->num_rows>0)
		{
			$_SESSION['username']=$username;
			return true; 
		}
		else
		{
			return false;
		}
	}

	public function users_profile($username) // Profile showing function
	{
		$query = $this->conn->query("select * from signup where username='$username'");
		$row = $query->fetch_array(MYSQLI_ASSOC);
		if ($query->num_rows>0)
		{
			$this->data[] = $row;
		}
		return $this->data;
	}

	public function cat_show() // select category function
	{
		$query = $this->conn->query("select * from category");
		while($row = $query->fetch_array(MYSQLI_ASSOC))
		{
			$this->cat[] = $row;
		}
		return $this->cat;
	}

	public function ques_show($ques) // Question show function ques_show.php
	{
		$query = $this->conn->query("select * from  questions where cat_id='$ques' ");
		while($row = $query->fetch_array(MYSQLI_ASSOC))
		{
			$this->ques[] = $row;
		}
		return $this->ques; 
	}

	public function answer($wrt) // answer showing function
	{
		$ans = implode("",$wrt);
		$right = 0;
		$wrong = 0;
		$no_answer = 0;
		$query = $this->conn->query("select id,ans from  questions where cat_id='".$_SESSION['cat']."' ");
		while($qust = $query->fetch_array(MYSQLI_ASSOC))
		{
			if($qust['ans']==$_POST[$qust['id']])
			{
				$right++;
			}elseif($_POST[$qust['id']]=="4")
			{
				$no_answer++;
			}else{
				$wrong++;
			}
		}
		$array = array();
		$array['right'] = $right; //right answer
		$array['wrong'] = $wrong; //wrong answer
		$array['no_answer'] = $no_answer; //no attempt
		return $array;
	}
	
	public function url($url) // redirrect location function
	{
		header("location:".$url);
	}   
}



?>