<?php
    
    $answer1 = $_POST['Q1'];
    $answer2 = $_POST['Q2'];
    $answer3 = $_POST['Q3'];
    $answer4 = $_POST['Q4'];
    $answer5 = $_POST['Q5'];

    $totalCorrect = 0;
    $total = 5;
    
    if ($answer1 == "Andrés Manuel López Obrador") { $totalCorrect++; }
    if ($answer2 == "1971") { $totalCorrect++; }
    if ($answer3 == "FORTRAN") { $totalCorrect++; }
    if ($answer4 == "Federal Parliamentary Democratic Republic") { $totalCorrect++; }
    if ($answer5 == "Nepal") { $totalCorrect++; }
    
    echo "Question 1: Who is the president of Mexico? <br>";
    echo "You answered: " . $answer1 . "<br>";
    echo "Correct answer: Andrés Manuel López Obrador<br>";

    echo "<br>Question 2: When were The Eagles formed? <br>";
    echo "You answered: " . $answer2 . "<br>";
    echo "Correct answer: 1971<br>";

    echo "<br>Question 3: What was the first programming language? <br>";
    echo "You answered: " . $answer3 . "<br>";
    echo "Correct answer: FORTRAN<br>";

    echo "<br>Question 4: What type of governing system is used in India? <br>";
    echo "You answered: " . $answer4 . "<br>";
    echo "Correct answer: Federal Parliamentary Democratic Republic<br>";

    echo "<br>Question 5: Which of these countries have a non-traditional flag? <br>";
    echo "You answered: " . $answer5 . "<br>";
    echo "Correct answer: Nepal<br>";

    $percent = ($totalCorrect / $total)*100;

    echo "<br><br><div id='results'>$totalCorrect / 5 correct: " .$percent. "%</div>";
    
?>