

        <?php
        ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

        require_once '../connect.php';

        $sql = "SELECT COUNT(id) FROM answer1_1";
        $answer1_1 = $pdo->query($sql);
        $answer1_1 = $answer1_1->fetch(PDO::FETCH_ASSOC);
        $answer1_1 = $answer1_1['COUNT(id)'];
        $sql = "SELECT COUNT(id) FROM answer1_2";
        $answer1_2 = $pdo->query($sql);
        $answer1_2 = $answer1_2->fetch(PDO::FETCH_ASSOC);
        $answer1_2 = $answer1_2['COUNT(id)'];
        $sql = "SELECT COUNT(id) FROM answer1_3";
        $answer1_3 = $pdo->query($sql);
        $answer1_3 = $answer1_3->fetch(PDO::FETCH_ASSOC);
        $answer1_3 = $answer1_3['COUNT(id)'];



        $sql = "SELECT COUNT(id) FROM answer2_1";
        $answer2_1 = $pdo->query($sql);
        $answer2_1 = $answer2_1->fetch(PDO::FETCH_ASSOC);
        $answer2_1 = $answer2_1['COUNT(id)'];
        $sql = "SELECT COUNT(id) FROM answer2_2";
        $answer2_2 = $pdo->query($sql);
        $answer2_2 = $answer2_2->fetch(PDO::FETCH_ASSOC);
        $answer2_2 = $answer2_2['COUNT(id)'];
        $sql = "SELECT COUNT(id) FROM answer2_3";
        $answer2_3 = $pdo->query($sql);
        $answer2_3 = $answer2_3->fetch(PDO::FETCH_ASSOC);
        $answer2_3 = $answer2_3['COUNT(id)'];


        $sql = "SELECT COUNT(id) FROM answer3_1";
        $answer3_1 = $pdo->query($sql);
        $answer3_1 = $answer3_1->fetch(PDO::FETCH_ASSOC);
        $answer3_1 = $answer3_1['COUNT(id)'];
        $sql = "SELECT COUNT(id) FROM answer3_2";
        $answer3_2 = $pdo->query($sql);
        $answer3_2 = $answer3_2->fetch(PDO::FETCH_ASSOC);
        $answer3_2 = $answer3_2['COUNT(id)'];
        $sql = "SELECT COUNT(id) FROM answer3_3";
        $answer3_3 = $pdo->query($sql);
        $answer3_3 = $answer3_3->fetch(PDO::FETCH_ASSOC);
        $answer3_3 = $answer3_3['COUNT(id)'];





        $p1_1 = round($answer1_1 * 100 / ($answer1_1 + $answer1_2 + $answer1_3));
        $p1_2 = round($answer1_2 * 100 / ($answer1_1 + $answer1_2 + $answer1_3));
        $p1_3 = round($answer1_3 * 100 / ($answer1_1 + $answer1_2 + $answer1_3));

        $p2_1 = round($answer2_1 * 100 / ($answer2_1 + $answer2_2 + $answer2_3));
        $p2_2 = round($answer2_2 * 100 / ($answer2_1 + $answer2_2 + $answer2_3));
        $p2_3 = round($answer2_3 * 100 / ($answer2_1 + $answer2_2 + $answer2_3));

        $p3_1 = round($answer3_1 * 100 / ($answer3_1 + $answer3_2 + $answer3_3));
        $p3_2 = round($answer3_2 * 100 / ($answer3_1 + $answer3_2 + $answer3_3));
        $p3_3 = round($answer3_3 * 100 / ($answer3_1 + $answer3_2 + $answer3_3));



// Формирование данных в массив для JSON
$data = [
    'counts' => [
        'answer1_1' => $answer1_1,'answer1_2' => $answer1_2,'answer1_3' => $answer1_3,
        'answer2_1' => $answer2_1,'answer2_2' => $answer2_2,'answer2_3' => $answer2_3,
        'answer3_1' => $answer3_1,'answer3_2' => $answer3_2,'answer3_3' => $answer3_3,
    ],
    'percents' => [
        'p1_1' => $p1_1, 'p1_2' => $p1_2, 'p1_3' => $p1_3,
        'p2_1' => $p2_1, 'p2_2' => $p2_2, 'p2_3' => $p2_3,
        'p3_1' => $p3_1, 'p3_2' => $p3_2, 'p3_3' => $p3_3,
    ],
];

header('Content-Type: application/json');
echo json_encode($data);
?>

   
