<?php


	$obj = new main();
	$obj->answerToFunction();

	class main {


	    public function __construct(){
	      echo " ";
	    } 

    	//Printing String function results
    	public function printText($text){
      		print('<br><hr><b>' . $text . '</b><br><br>');
    	} 

    	public function answerToFunction(){

    		$objPrint = new main();

    		print("<center><b><h3>Week 4 Assignment</h3></b></center>");

			$objPrint->printText("1. Display Results: ");
    		$date =  date('Y-m-d', time());
			echo "The value of \$date: ".$date."<br>";

			$tar = "2017/05/24";
			echo "The value of \$tar: ".$tar."<br>";

			$year = array("2012", "396", "300","2000", "1100", "1089");
			echo "The value of \$year: ";
			print_r($year);


			// 2. Replace '-' with '/'
			$objPrint->printText("2. Replace '-' with '/': ");

    		$date =  date('Y/m/d', time());
			echo "The value of \$date: ".$date."<br>";

			// 3. Compare $date with $tar
			$objPrint->printText('3. Compare $date with $tar: ');
			if(strcmp($date, $tar) > 0){
				echo "The future";
			}else if(strcmp($date, $tar) < 0){
				echo "The past";
			}else if(strcmp($date, $tar) == 0){
				echo "Oops";
			}

			// 4. Search for “/“ in $date
			$objPrint->printText('4. Search for “/“ in $date: ');
			$value = strpos($date, "/")  ."\n". strrpos($date, "/");
			echo $value;
	

			// 5. Count the number of words in $date 
			$objPrint->printText('5. Count the number of words in $date: ');
			$words = str_word_count($date);
			print('The number of words in $date is ' . $words);


			// 6. The length of a string in $date 
			$objPrint->printText('6. The length of a string in $date: ');
			$lenght = strlen($date);
			print('The lenght of $date is ' . $lenght);


			// 7. Return the ASCII value of the first character of a string
			$objPrint->printText('7. Return the ASCII value of the first character of a string: ');
			$asciiValue = ord($date);
			print("The ASCII Value of $date is $asciiValue");

			// 8. Return the last two characters in $date
			$objPrint->printText('8. Return the last two characters in $date: ');
			$index = strlen($date) - 2;
			$value = substr($date,$index);
			print("The last two characters in $date is $value" );


			// 9. Break $date into an array and set “separator” parameter as “/“
			$objPrint->printText('9. Break $date into an array and set “separator” parameter as “/“ : ');
			$arrayValue = explode("/", $date);
			foreach ($arrayValue as $key => $value) {
				print($value . "\n");
			}


			// 10. Identify whether each year is a leap year
			$objPrint->printText('10. Identify whether each year is a leap year: ');
			$i = 0;
			foreach ($year as $value) {
				do{
					switch ($value) {
							case (($value % 4 == 0) and ($value % 100 != 0) or ($value % 400 == 0)):
								echo "$value is true <br>";
								break;
							
							default:
								echo "$value is false <br>";
								break;
						}
					$i++;
				}while($i<0);
			}

    	}


			public function __destruct(){

      			print("<br> <i>Object released</i>");
    		}

	}	
?>