<?php
if (isset($_POST['answer'])) {
  require_once '../connect.php';
  $time = time();

  // echo $_POST['answer'];
  switch ($_POST['answer']) {
    case '1':
      $sql = "INSERT INTO answer4_1 (time) VALUES ('$time')";
      break;
    case '2':
      $sql = "INSERT INTO answer4_2 (time) VALUES ('$time')";
      break;
    case '3':
      $sql = "INSERT INTO answer4_3 (time) VALUES ('$time')";
      break;
    case '4':
      $sql = "INSERT INTO answer4_4 (time) VALUES ('$time')";
      break;
    default:
      echo "";
      break;
  }
$pdo->exec($sql);
}

?>



<?php require_once '../header.php'; ?>


  <h4 style="margin-left: 40px;">Вопрос 5 из 5</h4>
  <form action="./end.php" method="POST">
    <fieldset>
      <legend>5. Что представляет собой контрольная точка проекта (КТ):</legend>
      <div>
        <br>
        <input type="radio" id="сhoice1" name="answer" value="1" />
        <label for="сhoice1">КТ – это компьютерный томограф</label>
        <br>
        <br>
        <input type="radio" id="сhoice2" name="answer" value="2" />
        <label for="сhoice2">КТ – это срок окончания проекта</label>
        <br>
        <br>
        <input type="radio" id="сhoice3" name="answer" value="3" />
        <label for="сhoice3">КТ – это конкретная дата (срок окончания мероприятия (результата)), которая позволяет контролировать процесс реализации проекта</label>
        <br>
        <br>
        <input type="radio" id="сhoice4" name="answer" value="4" />
        <label for="сhoice4">Первый раз слышу о таком понятии, в проектной деятельности не участвовал</label>

      </div>

<?php require_once '../footer.php'; ?>

