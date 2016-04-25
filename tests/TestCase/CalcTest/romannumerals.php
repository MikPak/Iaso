<!DOCTYPE html>
<html>
<body>

<?php
	include_once "array.php"; //for final deployment

	$rand_key = 'a';
	$answer ='';
	

	echo "<body bgcolor='#eeeeee'>";
	echo "What number ";
	$question = getArray(randomNumbers(1, 1, 12));
	echo " represents?</br>";
	print_form();
	echo "<hr>";
	if (isset($_GET['button'])) {
		compareAnswer();

	}
	echo "<hr>";
	
	
	//gets one random number from getArray()
	function getNumber(){
		$input = getArray();
		$rand_keys = array_rand($input, 2);
		echo $input[$rand_keys[0]] . "\n";
		return  $rand_keys[0];
	}
	
	function print_form() {
	
	?>
	<form method="get"
        action="<?php echo $_SERVER['PHP_SELF'];?>">
	<br><input type="text" name="answer"><br>
	<input type="submit" name="button"
       value="answer">
	</form>
	<?php
}


	function compareAnswer(){
		
		$comparenumber = $_GET['answer'];
		if ($comparenumber == array_search($_GET['answer'], getArray())) {
			echo "Correct!";
		}
		else
		{
			echo "Wrong answer!";
		}
	}
	
	function randomNumbers($count, $min, $max) {
        $random = array();
        for($i = 0; $i < $count; $i++) {
            $rand = rand($min,$max);
            if(!in_array($rand, $random)) {
                array_push($random,$rand);
            } else {
                $i--;
            }
        }
        //debug($random);
        return $random;
    }
?>


</body>
</html> 

