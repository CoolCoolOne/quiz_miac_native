<?php
if (isset($_POST['answer'])) {
  require_once '../connect.php';
  $time = time();

  // echo $_POST['answer'];
  switch ($_POST['answer']) {
    case '1':
      $sql = "INSERT INTO answer3_1 (time) VALUES ('$time')";
      break;
    case '2':
      $sql = "INSERT INTO answer3_2 (time) VALUES ('$time')";
      break;
    case '3':
      $sql = "INSERT INTO answer3_3 (time) VALUES ('$time')";
      break;
    case '4':
      $sql = "INSERT INTO answer3_4 (time) VALUES ('$time')";
      break;
    default:
      echo "";
      break;
  }
$pdo->exec($sql);
}

?>



<?php require_once '../header.php'; ?>


  <h4 style="margin-left: 40px;">Вопрос 4 из 5</h4>
  <form action="./fiveQ.php" method="POST">
    <fieldset>
      <legend>4. В чем принципиальное отличие результатов и показателей национального проекта?</legend>
      <div>
        <br>
        <input type="radio" id="сhoice1" name="answer" value="1" />
        <label for="сhoice1">Нет принципиальной разницы (показатели и результаты проекта - это одно и тоже)</label>
        <br>
        <br>
        <input type="radio" id="сhoice2" name="answer" value="2" />
        <label for="сhoice2">Результат проекта – это денежное выражение моей оплаты труда после реализации проекта, показатель – количество проектов, участником которых я являюсь.</label>
        <br>
        <br>
        <input type="radio" id="сhoice3" name="answer" value="3" />
        <label for="сhoice3">Показатели отражают эффективность реализации проекта (на сколько успешно идет выполнение задач проекта), результаты – отражают конкретные итоги выполненных работ по проекту (какой объем услуг (товаров и работ) был выполнен)</label>
        <br>
        <br>
        <input type="radio" id="сhoice4" name="answer" value="4" />
        <label for="сhoice4">Первый раз слышу о таких понятиях, в проектной деятельности не участвовал</label>

      </div>

<?php require_once '../footer.php'; ?>

