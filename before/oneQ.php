<?php require_once '../header.php';
require_once '../connect.php';
$sql = "SELECT openAfter FROM nextStage WHERE id = 1;";
$openAfter = $pdo->query($sql);
$openAfter = $openAfter->fetch(PDO::FETCH_ASSOC);


$sql = "SELECT * FROM questions";
$questions = $pdo->query($sql);
$questions = $questions->fetchAll(PDO::FETCH_ASSOC);


if ($openAfter['openAfter'] == 1) {

  header("Location: ../index.php");
  exit;

}

?>




<!-- Обновленная HTML-структура с классами -->
<div class="quiz-container">
    <h4>Вопрос 1 из 3</h4>
    <form action="./twoQ.php" method="POST">
      <fieldset>
        <legend><?= htmlspecialchars($questions[0]['question']) ?></legend>
        
        <div class="choices-group">
          
          <!-- Вся область теперь обернута в <label> -->
          <label for="choice1" class="choice-option">
            <input type="radio" id="choice1" name="answer" value="1" required />
            <!-- Текст ответа -->
            <span><?= htmlspecialchars($questions[0]['answer1']) ?></span>
          </label>
          
          <label for="choice2" class="choice-option">
            <input type="radio" id="choice2" name="answer" value="2" required />
            <span><?= htmlspecialchars($questions[0]['answer2']) ?></span>
          </label>
          
          <label for="choice3" class="choice-option">
            <input type="radio" id="choice3" name="answer" value="3" required />
            <span><?= htmlspecialchars($questions[0]['answer3']) ?></span>
          </label>
          
        </div>


    <?php require_once '../footer.php'; ?>