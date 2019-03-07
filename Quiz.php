<?php
    
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];

    $totalCorrect = 0;
    
    if ($answer1 == "A) Armored") { $totalCorrect++; }
    if ($answer2 == "B) 2014") { $totalCorrect++; }
    if ($answer3 == "C) C#") { $totalCorrect++; }
    if ($answer4 == "D) Dairy Queen") { $totalCorrect++; }
    if ($answer4 == "A) Theater") { $totalCorrect++; }
    
    echo" <p>
    Question 1: Starting in 2014, Paul Kline assisted Dr. Alexander in the ________ Software Research Project.
    <br>
    You answered: ";
    echo  $answer1;
    echo "
    <br>
    Correct answer: A) Armored
    <br>
    <br>
    Question 2: Paul Kline graduated from Blackburn College in ...
    <br>
    You answered: ";
    echo $answer2;
    echo "
    <br>
    Correct answer: B) 2014
    <br>
    <br>
    Question 3: At the Pacific Northwest National Laboratory, Paul Kline coded in ...
    <br>
    You answered: ";
    echo $answer3;
    echo "
    <br>
    Correct answer: C) C#
    <br>
    <br>
    Question 4: Paul Kline once worked at ...
    <br>
    You answered: ";
    echo $answer4;
    echo"
    <br>
    Correct answer: D) Dairy Queen
    <br>
    <br>
    Question 5: At Blackburn, Paul Kline was active in ...
    <br>
    You answered: ";
    echo $answer5;
    echo "
    <br>
    Correct answer: A) Theater
    <br>
</p>";
    echo "<div id='results'>You answered $totalCorrect / 5 correct</div>";
    $percent = $totalCorrect/5*100;
    echo "<div id='results'>You got a $percent%</div>";
    
?>