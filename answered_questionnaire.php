<?php

// Check if the form has been submitted
if (
    isset($_POST['test_date']) && isset($_POST['full_name']) && isset($_POST['date_of_birth']) && isset($_POST['gender']) && isset($_POST['question_1']) && 
    isset($_POST['answer_1']) && isset($_POST['question_2']) && isset($_POST['answer_2']) && isset($_POST['question_3']) && isset($_POST['answer_3']) && 
    isset($_POST['question_4']) && isset($_POST['answer_4']) && isset($_POST['question_5']) && isset($_POST['answer_5']) && isset($_POST['question_6']) && 
    isset($_POST['answer_6']) && isset($_POST['question_7']) && isset($_POST['answer_7'])&& isset($_POST['question_8']) && isset($_POST['answer_8']) && 
    isset($_POST['question_9']) && isset($_POST['answer_9'])
    ) 
{

  // Validate the form data
  $test_date = $_POST['test_date'];
  $full_name = $_POST['full_name'];
  $date_of_birth = $_POST['date_of_birth'];
  $gender = $_POST['gender'];
  $question_1 = $_POST['question_1'];
  $answer_1 = $_POST['answer_1'];
  $question_2 = $_POST['question_2'];
  $answer_2 = $_POST['answer_2'];
  $question_3 = $_POST['question_3'];
  $answer_3 = $_POST['answer_3'];
  $question_4 = $_POST['question_4'];
  $answer_4 = $_POST['answer_4'];
  $question_5 = $_POST['question_5'];
  $answer_5 = $_POST['answer_5'];
  $question_6 = $_POST['question_6'];
  $answer_6 = $_POST['answer_6'];
  $question_7 = $_POST['question_7'];
  $answer_7 = $_POST['answer_7'];
  $question_8 = $_POST['question_8'];
  $answer_8 = $_POST['answer_8'];
  $question_9 = $_POST['question_9'];
  $answer_9 = $_POST['answer_9'];

  // Insert the new user into the database
  $db->query("INSERT INTO answered_questionnaires (test_date, full_name, date_of_birth, gender, question_1, answer_1, question_2, answer_2, question_3, answer_3, 
  question_4, answer_4, question_5, answer_5, question_6, answer_6, question_7, answer_7, question_8, answer_8, question_9, answer_9,) 
  VALUES ('$test_date', '$full_name', '$date_of_birth', '$gender', '$question_1', '$answer_1', '$question_2', '$answer_2', '$question_3', '$answer_3', '$question_4',
  '$answer_4', '$question_5', '$answer_5', '$question_6', '$answer_6', '$question_7', '$answer_7', '$question_8', '$answer_8', '$question_9', '$answer_9')");

  // The user has been registered
  echo "Your answers have been submitted successfully";

}

?>