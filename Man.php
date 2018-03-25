<?php
class Man
{
  
    private $first_name;
    private $last_name;
	private $gender;
	private $jmbg;
	private $height;
	private $weight;
	private $occupation;
    private $age;
	
    public function __construct($first_name,$last_name,$gender,$jmbg,$height,$weight,$occupation,$age)
    {

     $this->first_name=$first_name;
     $this->last_name=$last_name;
	 $this->gender=$gender;
	 $this->jmbg=$jmbg;
	 $this->height=$height;
	 $this->weight=$weight;
	 $this->occupation=$occupation;
	 $this->age=$age;
	}
	public function namesurname() 
	{
		return $this->first_name." ".$this->last_name;
	}
	public function gender()
	{
        return $this->gender;
    }
	public function jmbg()
    {
        return $this->jmbg;
    }
    public function height()
    {
        return $this->height;
    }
    public function weight()
    {
        return $this->weight;
    }
	public function occupation()
    {
        return $this->occupation;
    }
	  public function adult()
    {
        return $this->age >= 18;
    }
}
	$instanca = new Man('Milan', 'Jovanovic', 'male', '555555555', '190cm', '100kg',  'php developer', 33);
    echo '<p>Full name: ' . $instanca->namesurname() .'</p>';
	echo '<p>Gander: ' . $instanca->gender() .'</p>';
	echo '<p>Jmbg: ' . $instanca->jmbg() .'</p>';
	echo '<p>Height: ' . $instanca->height() .'</p>';
	echo '<p>Weight: ' . $instanca->weight() .'</p>';
	echo '<p>Occupation: ' . $instanca->occupation() .'</p>';
    echo '<p> '. $instanca->namesurname() . ' ' . ($instanca->adult() ? 'is' : 'is not') . ' adult </p>';	
?>	 	