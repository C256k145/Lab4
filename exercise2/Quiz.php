<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  $choice1 = $_POST["Q1option"];
  $choice2 = $_POST["Q2option"];
  $choice3 = $_POST["Q3option"];
  $choice4 = $_POST["Q4option"];
  $choice5 = $_POST["Q5option"];

  $ansArr = array("Q1A3" => "Scranton, PA" , "Q2A2" => "Dunder Mifflin", "Q3A4" => "Quabity Assuance", "Q4A2" => "Pretzel Day", "Q5A1" => "Angela, Oscar, Creed, and Phyllis");
  $Q1choices = array("Q1A1" => "Columbus, OH", "Q1A2" => "New York, NY", "Q1A3" => "Scranton, PA", "Q1A4" => "Newark, NJ");
  $Q2choices = array("Q2A1" => "Michael Scott Paper Company", "Q2A2" => "Dunder Mifflin", "Q2A3" => "Prince Paper", "Q2A4" => "Munder Difflin");
  $Q3choices = array("Q3A1" => "Quackity Assonance", "Q3A2" => "Quality Assurance", "Q3A3" => "Quabley Astoriance", "Q3A4" => "Quabity Assuance");
  $Q4choices = array("Q4A1" => "Veterans Day", "Q4A2" => "Pretzel Day", "Q4A3" => "Columbus Day", "Q4A4" => "October 4th");
  $Q5choices = array("Q5A1" => "Angela, Oscar, Creed, and Phyllis", "Q5A2" => "Jim, Kevin, Angela, and Creed", "Q5A3" => "Oscar, Meredith, Toby, and Erin", "Q5A4" => "Kelly, Angela, Creed, and Phyllis");


  $numCorrect = 0;

  echo "Question1:<br> ";
  echo "You Answered:", $Q1choices[$choice1], "<br>";
  echo "Correct Answer: ", $ansArr["Q1A3"], "<br>";
  if($choice1 == "Q1A3") {
    $numCorrect += 1;
    echo "Correct";
  }
  else {
    echo "Wrong";
  }
  echo "<br><br>";


  echo "Question2:<br> ";
  echo "You Answered:", $Q2choices[$choice2], "<br>";
  echo "Correct Answer: ", $ansArr["Q2A2"], "<br>";
  if($choice2 == "Q2A2") {
    $numCorrect += 1;
    echo "Correct";
  }
  else {
    echo "Wrong";
  }
  echo "<br><br>";


  echo "Question3:<br> ";
  echo "You Answered:", $Q3choices[$choice3], "<br>";
  echo "Correct Answer: ", $ansArr["Q3A4"], "<br>";
  if($choice3 == "Q3A4") {
    $numCorrect += 1;
    echo "Correct";
  }
  else {
    echo "Wrong";
  }
  echo "<br><br>";


  echo "Question4:<br> ";
  echo "You Answered:", $Q4choices[$choice4], "<br>";
  echo "Correct Answer: ", $ansArr["Q4A2"], "<br>";
  if($choice4 == "Q4A2") {
    $numCorrect += 1;
    echo "Correct";
  }
  else {
    echo "Wrong";
  }
  echo "<br><br>";


  echo "Question5:<br> ";
  echo "You Answered:", $Q5choices[$choice5], "<br>";
  echo "Correct Answer: ", $ansArr["Q5A1"], "<br>";
  if($choice5 == "Q5A1") {
    $numCorrect += 1;
    echo "Correct";
  }
  else {
    echo "Wrong";
  }
  echo "<br><br>";

  echo $numCorrect, "/5", "<br>";
  $numCorrect = ($numCorrect/5)*100;
  echo "Score: ", $numCorrect, "%";

?>
