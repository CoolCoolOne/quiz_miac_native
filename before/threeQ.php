<?php
if (isset($_POST['answer'])) {
  require_once '../connect.php';
  $time = time();

  // echo $_POST['answer'];
  switch ($_POST['answer']) {
    case '1':
      $sql = "INSERT INTO answer2_1 (time) VALUES ('$time')";
      break;
    case '2':
      $sql = "INSERT INTO answer2_2 (time) VALUES ('$time')";
      break;
    case '3':
      $sql = "INSERT INTO answer2_3 (time) VALUES ('$time')";
      break;
    case '4':
      $sql = "INSERT INTO answer2_4 (time) VALUES ('$time')";
      break;
    default:
      echo "";
      break;
  }
$pdo->exec($sql);
}

?>



<?php require_once '../header.php'; ?>


  <h4 style="margin-left: 40px;">Вопрос 3 из 5</h4>
  <form action="./fourQ.php" method="POST">
    <fieldset>
      <legend>3. В какой государственной информационной системе проводится анализ реализации национальных, федеральных и региональных проектов?</legend>
      <div>
        <br>
        <input type="radio" id="сhoice1" name="answer" value="1" />
        <label for="сhoice1">ГАС «Управление»</label>
        <br>
        <br>
        <input type="radio" id="сhoice2" name="answer" value="2" />
        <label for="сhoice2">ГИИС «Электронный бюджет»</label>
        <br>
        <br>
        <input type="radio" id="сhoice3" name="answer" value="3" />
        <label for="сhoice3">Единая информационная система в сфере закупок (ЕИС) </label>
        <br>
        <br>
        <input type="radio" id="сhoice4" name="answer" value="4" />
        <label for="сhoice4">КМУИП</label>

      </div>

<?php require_once '../footer.php'; ?>

