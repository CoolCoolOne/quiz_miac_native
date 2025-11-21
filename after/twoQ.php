<?php
if (isset($_POST['answer'])) {
  require_once '../connect.php';
  $time = time();

  // echo $_POST['answer'];
  switch ($_POST['answer']) {
    case '1':
      $sql = "INSERT INTO a_answer1_1 (time) VALUES ('$time')";
      break;
    case '2':
      $sql = "INSERT INTO a_answer1_2 (time) VALUES ('$time')";
      break;
    case '3':
      $sql = "INSERT INTO a_answer1_3 (time) VALUES ('$time')";
      break;
    case '4':
      $sql = "INSERT INTO a_answer1_4 (time) VALUES ('$time')";
      break;
    default:
      echo "";
      break;
  }
$pdo->exec($sql);
}

?>



<?php require_once '../header.php'; ?>


  <h4 style="margin-left: 40px;">Вопрос 2 из 5</h4>
  <form action="./threeQ.php" method="POST">
    <fieldset>
      <legend>2. Какая ответственность предусматривается за невыполнение показателей и результатов национальных проектов:</legend>
      <div>
        <br>
        <input type="radio" id="сhoice1" name="answer" value="1" />
        <label for="сhoice1">наложение административного штрафа на должностных лиц или дисквалификацию.</label>
        <br>
        <br>
        <input type="radio" id="сhoice2" name="answer" value="2" />
        <label for="сhoice2">наложение административного штрафа</label>
        <br>
        <br>
        <input type="radio" id="сhoice3" name="answer" value="3" />
        <label for="сhoice3">уголовная ответственность</label>
        <br>
        <br>
        <input type="radio" id="сhoice4" name="answer" value="4" />
        <label for="сhoice4">ответственность законодательно не определена</label>

      </div>

<?php require_once '../footer.php'; ?>

