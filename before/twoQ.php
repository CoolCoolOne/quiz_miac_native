<?php
require_once '../connect.php';

if (isset($_POST['answer'])) {
  $time = time();

  // echo $_POST['answer'];
  switch ($_POST['answer']) {
    case '1':
      $sql = "INSERT INTO answer1_1 (time) VALUES ('$time')";
      break;
    case '2':
      $sql = "INSERT INTO answer1_2 (time) VALUES ('$time')";
      break;
    case '3':
      $sql = "INSERT INTO answer1_3 (time) VALUES ('$time')";
      break;
    default:
      echo "";
      break;
  }
  $pdo->exec($sql);

}

$sql = "SELECT * FROM questions";
$questions = $pdo->query($sql);
$questions = $questions->fetchAll(PDO::FETCH_ASSOC);


?>



<?php require_once '../header.php'; ?>


<div class="quiz-container">
    <h4>Вопрос 2 из 3</h4>
<form action="./threeQ.php" method="POST">
  <fieldset>
    <legend><?= htmlspecialchars($questions[1]['question']) ?></legend>
        
        <div class="choices-group">
          
          <!-- Вся область теперь обернута в <label> -->
          <label for="choice1" class="choice-option">
            <input type="radio" id="choice1" name="answer" value="1" required />
            <!-- Текст ответа -->
            <span><?= htmlspecialchars($questions[1]['answer1']) ?></span>
          </label>
          
          <label for="choice2" class="choice-option">
            <input type="radio" id="choice2" name="answer" value="2" required />
            <span><?= htmlspecialchars($questions[1]['answer2']) ?></span>
          </label>
          
          <label for="choice3" class="choice-option">
            <input type="radio" id="choice3" name="answer" value="3" required />
            <span><?= htmlspecialchars($questions[1]['answer3']) ?></span>
          </label>
          
        </div>

    <?php require_once '../footer.php'; ?>