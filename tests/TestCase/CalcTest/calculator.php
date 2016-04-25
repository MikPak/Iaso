<?php

	$vaLaake = '';
	$vaAnnos = '';
	$lLaake = '';
	$lAnnos = '';
	private $answerTemp = '';
	
	
	echo "<body bgcolor='#eeeeee'>";
	echo "Patient uses Hydrocortison gel which has consentration of ";
	$question = getConsentrationNumber();
	echo " . How much 20g tube consists medicine component?</br>";
	print_form();
	echo "<hr>";
	echo "Right answer is: ";
	echo $answerTemp;
	echo "<hr>";
	if (isset($_GET['button'])) {
	calcAndCcompareAnswer();}
	
	function getConsentrationNumber(){
		$randomConsentration = rand(1,99);
		$answerTemp = $randomConsentration;
		return  $randomConsentration;
	}
	
	function print_form() {
	
	?>
	<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<br><input type="checkbox" name=""
	value="0">
	<input type="checkbox" name=""
	value="1">
	<input type="checkbox" name=""
	value="2">
	<input type="checkbox" name=""
	value="3">
	<input type="submit" name="button"
       value="answer">
	</form>
	<?php
	}
	
	
	function calcAndCcompareAnswer(){
		
		$comparenumber = getCompareNumbers($_GET['answer']);
		if ($comparenumber == array_search($_GET['answer'], getArray())) {
			echo "Correct!";
		}
		else
		{
			echo "Wrong answer!";
		}
	}
	
	public function __get($property){
		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}
	
	public function __set($property, $value) {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }

    return $this;
  }
	
?>