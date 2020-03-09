<?php
class csv extends mysqli
{
	private $state_csv=false;
public function __construct()
	{
		parent::__construct("localhost","root","root","file");
	if ($this->connect_error) {
		echo "Fail to connect:".$this->connect_error;
	} 
	}
	public function import($file)
	{
		$file = fopen($file,'r');
		while($row=fgetcsv($file)){
			#$value="'". implode("','", $row) ."'";
			$q="INSERT INTO file(datee,weight,calorie) VALUES(". $value .")";
			if ($this->query($q)){
				$this->state_csv=true;

			}else{
				$this->state_csv=false;
				#echo $this->error;
			}
		}
		echo "Successfully Imported";
	}
}
?>
