<!DOCTYPE html>
<html>

<head>
	<title>PHP Quiz</title>
</head>

<body>

	<div id="page-wrap">

		<h1>Final Quiz for Lip building</h1>

        <?php

            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            echo "<h2>Questions: </h2>";
            echo "Q1: Which of the following is a physical quantity that has a magnitude but no direction? <br>";
            echo "  You answered: " . $answer1 . "<br>";
            echo "  Right answer: Scalar<br><br>";
            echo "Q2: Multiplying or dividing vectors by scalars results in? <br>";
            echo "  You answered: " . $answer2 . "<br>";
            echo "  Right answer: Vectors<br><br>";
            echo "Q3: Which of the following is an example of a vector quantity?<br>";
            echo "  You answered: " . $answer3 . "<br>";
            echo "  Right answer: Velocity<br><br>";
            echo "Q4:Which of the following is a physical quantity that has both magnitude and direction?<br>";
            echo "  You answered: " . $answer4 . "<br>";
            echo "  Right answer: Vector<br><br>";
            echo "Q5: Identify the following quantities as scalar or vector: the speed of a snail, the time it takes to run a mile, the free-fall acceleration<br>";
            echo "  You answered: " . $answer5 . "<br>";
            echo "  Right answer: Scalar, scalar, vector<br><br>";


            $totalCorrect = 0;

            if ($answer1 == "Scalar") { $totalCorrect++; }
            if ($answer2 == "Vectors") { $totalCorrect++; }
            if ($answer3 == "Velocity") { $totalCorrect++; }
            if ($answer4 == "Vector") { $totalCorrect++; }
            if ($answer5 == "Scalar, scalar, vector") { $totalCorrect++; }

            echo "<div id='results'>$totalCorrect / 5 correct</div>";

        ?>

	</div>

</body>

</html>
