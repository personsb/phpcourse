<!--variables included-->
<?php include("variables.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!--Nav Bar -->
    <?php include("navbar.php"); ?>
  	<br/>

    <div class = "container">
      <div class="jumbotron">
  <h1 class="display-4">Weclome to Guitar World!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  
</div>
    </div>
  	
    <center>
    
    	<?php
	
			//remember the line end; ends in a semicolon
			//Print out to the screen
			
			/*
				multiline comments
			*/

			//echo "Hello world!</br>";//print out to the screen
      //variable uses the $ sign
      //string need the quotes
      //assigning variables does not make them show up
      //$first_name = "Bryan";
      //$last_name = "Persons";
      //$favorite_num = 72;
      //$salary = 72000.09;
      
      //calling the variable
      //echo $first_name;

        //math operators
        // + - * / % **
        /*
        $num1 = 41;
        $num2 = 4;
        echo $num1 + $num2;
        
      echo $num1 - $num2;
      //line break <br>
      echo "<br>";
      echo $num1 / $num2;
      echo "<br>";
      echo $num1 * $num2;
      echo "<br>";
      echo $num1 ** $num2;
      echo "<br>";
      echo $num1 % $num2; 
      echo "<br>";
      //increasing and decreasing
      //increment
      echo ++$num1;
      echo "<br>";
      //decrement
      echo --$num2;
      */

      //concantenation
      /*
      $first_name = "Bryan";
      $last_name = "Persons";
      $num1 = 72;
      $num2 = 4;

      //period symbol creates a concatenation
      echo $first_name . "<br>" . $last_name;
      echo "<br>". "Numbers: ". $num1 . " " .$num2;
			*/

      //comparison operators
      /*
      == equal to
      != not equal
      > greater
      < less
      >= greater than or equal
      <= less than or equal
      */
      /*
      $num1 = 72;
      $num2 = 4;
      $num3 = $num1;
      //case sentiviity
      $first_name = "Bryan";

      //equals to true or false
      //bool(false)
      var_dump($num1 == $num2);
      var_dump($num1 == $num3);
      var_dump($num1 < $num2);
      var_dump($num1 > $num3);
      var_dump($num1 <= $num3);
      var_dump($num1 >= $num3);
      var_dump($num1 != $num2);
      var_dump($first_name == "Pete");
      var_dump($first_name != "bryan");
      */
      /*
      //escape characters
      // \ > is an escape character and includes it
      echo "And then she said: \"YOU'RE UGLY!\"";
      // '' > single quotes works
      echo 'hello';
    */
      /*
      //if else statements
      $first_name = "Bryan";
      $second_name = "Pete";
      $favorite_num = 3;

      /*
      if (something is true){
        do something;
      }*/
      
      /*
      if ($favorite_num  > 10){
        echo $favorite_num . " is greater than 10";
      } else {
        echo $favorite_num . " is less than 10";
      }
      */

/*
      //elseif
      $num1 = 72;
      $num2 = 5;
      $favorite_num = 3;

      //stops the program and does not move down
      if ($num1 > 100){
        echo $num1 . " is greater than 100";
        } elseif ($num2 == 4) {
          echo $num2 . " equals 5!";
        } 


      else {
        echo $num1 . " is less than 100";
      }*/
/*
      //Arrays - Numeric
      $her_name = "Mary";
      $last_names = array("Elder", "Smith", "Poppins");
      $first_names = array("John", "Steve", $last_names);
      echo $first_names[2][0];

*/
/*
      //Array - Associative
      $fav_pizza= array(
        "John"=>"Pepperoni",
        "Steve"=>"Cheese",
        "Mary"=>"Mushroom"
    );
      //need to have the name that you want to associate with
      //Mary is the key to Mushroom
      echo $fav_pizza["Mary"];
*/

/*
      //Array count
      //you might want to count the items in array
      $names = array("John",
        "Steve",
        "Mary");

      $fav_pizza= array(
        "John"=>"Pepperoni",
        "Steve"=>"Cheese",
        "Mary"=>"Mushroom"
    );

     //count and then the name of the array
      echo count ($names)."<br>";

      //echo $names[0];//will print out John
       //will get the name of the last element in the array
       echo $names[count($names)-1];
*/
/*
       //loops -- while
       $counter = 0;
       while($counter<=10){
        echo "The count is: $counter<br>" ; 
        ++$counter;
       }
//do while loop - not sure why this would be used
       $counter = 0;
       do {
        echo "The count is: $counter<br>" ; 
        ++$counter;

       } while($counter<=10);
*/
       /*
       //for loops  - variable; comparison; increment

       for($count=0; $count <=10; $count++){
        echo "The count is: $count<br>" ; 
       }*/

/*
       //for each loop
       //loop through items in an array
       $count = 0;
       $names = array("Bryan", "Steve", "Mary");
       //foreach array as the item variable in the array
       //for each
       foreach($names as $value){

          echo "$value<br>";//prints out the item variable
       }

      //while loop
       while($count < count($names)){
          echo "Name: $names[$count]<br>";
          $count++;
       }

       //for loop
       for($count=0; $count <count($names); $count++){
        echo "Name is: $names[$count]<br>"; 
       }
*/
/*
       //functions
       // example of function is count($names);
       function helloThere($num1, $num2){
          //echo "Hello there $first_name $last_name!";
          return $num1 + $num2; // return result function
       }

       $answer =  helloThere(72,4);

       echo $answer * 2;
       */
/*
       //random function
       //rand()
       //mt_rand()
       //echo mt_rand(0,10);
       echo "Guess a number!<br>";
       //$names = array("Bryan", "Steve", "Mary");
       $rand = mt_rand(0,10);
       $num = 4;
       //echo $names[$rand];
       if ($num == $rand){
          echo "You WIN! $num = $rand";
       } else{
        echo "You lose! $num does not equal $rand";
       }
*/
       /*
       //Date Function
      
       //need this to set it to my computer
       date_default_timezone_set('UTC'); 
        //l is day of the week
       //S is the day of the month
      //echo date(' jS \of F, Y');//capital is whole year, lower is last 2
      $todays_day = date('Y');
      //echo "Today is $todays_day";
      echo "Copyright (c) $todays_day - All Rights 
      Reserved ";
*/
      /*
      //String Manipulation
      $stuff = "BRYAN PERSONS";
      //$monster = "monster";
      //$dork = "weirdo";
      
      //old, new, variable
      //echo str_replace($monster, $dork, $stuff);
      
      //changing case to upper
      //echo strtoupper($stuff);
      
      //changing case to upperCase first letter of each word
      //echo ucwords($stuff);

      //uppercase very first letter
      //echo ucfirst($stuff);



      //lowercase all letters
      //echo strtolower($stuff);

      //lowercase first letter
      //echo lcfirst($stuff);

      //length
      //echo strlen($stuff);
      
      //stuffle
      //echo str_shuffle($stuff);
*/



      //Include Function
        include("footer.php");

      ?>
		</center>
    <br/>
    
    










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

