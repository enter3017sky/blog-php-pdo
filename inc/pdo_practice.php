<?php
require_once '../check_login.php';

// session_start([
//     'cookie_lifetime' => 86400,
//     'read_and_close'  => true,
// ]);


$a = 'ste2e';

$b = null;

$c = [];


$array =['id'=>123, 'test' => '12d1d'];

var_dump( check_var( $array['id'] ) ); // 输出 int(123) 
var_dump( check_var( $array['code'] ) ); // 输出 bool(false) 
var_dump( check_var( $array, 'not set') ); // 输出 string(7) "not set" 

var_dump(check_var($a));
var_dump(check_var($b));
var_dump(check_var($c));


function check_var( $var, $default = ''){
    return( (isset($var) && !empty($var )) ? $var : (!empty($default) ? $default : false) );
}



echo "<pre>";
echo "<br><br>Session: ";
var_dump($_SESSION);
echo "<br><br>Cookie: ";
var_dump($_COOKIE);
// $_SESSION['test'] = 'test, session';
// $_SESSION['time'] = time();
// echo "<br><br>";
// ini_set('session.cookie_lifetime', 86000); // 可用 
// print_r(session_get_cookie_params());

// echo "<br><br>";
// ini_set('session.gc_maxlifetime', 3600);
// echo ini_get("session.gc_maxlifetime"); 

// echo "<br><br>";
// echo "Now Time: ".date('Y m d H:i:s', $_SESSION['time']);

// echo "<br><br>";
// echo "<br><br>cookie: ";
// print_r($_COOKIE);

// if ($_SESSION) {
//     print_r ($_SESSION);
// }
echo "</pre>";


function start_session($expire = 0) {
    if ($expire == 0) {
        $expire = ini_get('session.gc_maxlifetime');
    } else {
        ini_set('session.gc_maxlifetime', $expire);
    }
    if (empty($_COOKIE['PHPSESSID'])) {
        session_set_cookie_params($expire);
        session_start();
    } else {
        session_start();
        setcookie('PHPSESSID', session_id(), time() + $expire);
    }
}



// require_once './conn.php';
require_once './utils.php';
require_once './Parsedown.php';

/**
 * 用 PDO 連接到 MySQL
 */

$dsn = 'mysql:host=localhost; dbname=enter3017sky_db; charset=utf8';
$db_username = 'root';
$db_password = 'ji394su3';

// 1. 連結資料庫（如果 PHP 可以連接到資料庫，就會有全新的 PDO物件儲存在變數 $pdo。）
try {
    $pdo = new PDO($dsn, $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    
    // 設定資料庫出錯時丟出列外（如果 PHP 無法連接，PDO 創建失敗，就會尋找 PDOException 物件被丟出來，來告訴我們無法連接的錯誤訊息。）
} catch (PDOException $e) {
    print "<h1>Couldn't connect to the database: <br>" . $e->getMessage() . "</h1>";
}

function check($value){
    if(isset($value)){
        echo isset($value) . "isset()判定值有設置<br />";
    }else{
        echo isset($value) . "isset()判定值未設置<br />";
    }

    if(empty($value)){
        echo empty($value) ."empty()判定未有值<br />";
    }else{
        echo empty($value) ."empty()判定有值<br />";
    }
    
    if(is_null($value)){
        echo is_null($value) . "is_null()判定未有值<br />";
    }else{
        echo is_null($value) . "is_null()判定有值<br />";
    }
}


check($user);



/** PHP 使用 SHA256、SHA512 等 雜湊演算法的寫法
 * 雜湊(Hash)演算法越來越多，PHP 直接做了 hash() 來用，直接指定要用哪個雜湊演算法即可。
 * PHP hash() 使用範例 */

// echo '<pre>';
// echo  hash('sha256','Qq070040');
// echo '<br><hr><br>';
// echo  hash('sha512','Qq070040');
// echo '</pre>';

/** PHP hash() 有支援哪些雜湊演算法呢？
 * 可以使用 hash_algos() 來查詢，範例如下： */

// echo '<pre>';
// print_r(hash_algos());
// echo '</pre>';



/**
 *  從表格選取(select)資料
 * 當用 PDO 選取資料時，我們創建了一個 PDOStatement 物件。它代表我們的查詢，並讓我們取得結果。
 * 對於一個基本的查詢，我們可以使用 PDO::query() 方法。
 */

// 執行查詢
// $stmt = $pdo->prepare("SELECT * FROM articles WHERE id = 46");
// $stmt->execute();

// $md = new Parsedown();
// $md->setSafeMode(true);
// $md->setMarkupEscaped(true);

// $row = $stmt->fetch(PDO::FETCH_ASSOC);

// $title = $md->text($row['title']);
// $content = $md->text($row['content']);

// $escape__title = escape($row['title']);
// $escape__content = escape($row['content']);

// $escapeMdTitle = $md->text($escape__title);
// $escapeMdContent = $md->text($escape__content);

// echo "<hr>";
// echo "1. markdown 模式<br>";
// echo "標題: ". $title ."<br>";
// echo "內文: ". $content ."<br><br>";
// echo "<hr>";

// echo "2. 先 markdown 在 escape()<br>";
// echo "標題: ". escape($title) ."<br>";
// echo "內文: ". escape($content) ."<br><br>";
// echo "<hr>";

// echo "3. 純 escape()<br>";
// echo "標題: ". $escape__title ."<br>";
// echo "內文: ". $escape__content ."<br><br>";
// echo "<hr>";

// echo "4. escape() 在 markdown<br>";
// echo "標題: ". $escapeMdTitle ."<br>";
// echo "內文: ". $escapeMdContent ."<br><br>";
// echo "<hr>";

// echo "<pre>";
// var_dump($row);
// echo "<br><br><br>";


// 顯示結果
// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     echo "標題: ". $row['title'] ."<br>";
//     echo "內文: ". $row['content'] ."<br>";
//     echo "<pre>";
//     var_dump($row);
//     echo "<br><br><br>";
// }

/** 資料取得模式
 * 
 * fetch() 取得一列。
 * fetchAll() 取得所有的列。
 * 這兩種方法的接受 fetch_style 參數，它定義了結果的資料集如何格式化。
 * 
 * PDO::FETCH_ASSOC 返回以欄位名稱作為索引鍵的陣列
 * PDO::FETCH_NUM 返回以數字作為索引鍵的陣列(從 0 開始)
 * PDO::FETCH_BOTH(Default) 返回以上兩者。
 * PDO::FETCH_BOUND 
 */



// fetch(PDO::FETCH_BOUND) 返回一個 bool

// fetchAll(PDO::FETCH_BOUND) 返回一個陣列與 bool
// array(1) {
//     [0]=>
//     bool(true)
//   }

// $stmt = $pdo->prepare("SELECT * FROM taxonomy WHERE article_id = ? AND category_id = ?");

// $stmt->execute([$art_arr, $cate_arr[2]]);

// // 顯示結果
// if($row = $stmt->fetch(PDO::FETCH_BOUND)) {
//     echo '<pre>';
//     var_dump($row);
// } else {
//     echo '<pre>';
//     var_dump($row);
// }






// 執行查詢

// $a = 1;
// $b = 25;


// $art_arr = 16;
// $cate_arr = array(3);



// $stmt = $pdo->prepare("SELECT * FROM taxonomy WHERE article_id = ? AND category_id = ?");
// $stmt->execute([$art_arr, $cate_arr[0]]);
// // $stmt->execute([$art_arr, $cate_arr[0]]);
// // 顯示結果
// if($row = $stmt->fetchAll(PDO::FETCH_BOUND)) {
//     echo 'test true';
//     echo '<pre>';
//     var_dump($row);
// } else {
//     echo 'test fail';
//     echo '<pre>';
//     var_dump($row);
// }







// for ($i=0; $i < count($category_id) ; $i++) {

//     $sql = "SELECT * FROM taxonomy where article_id = ? AND category_id = ?";
//     $stmt = $pdo->prepare($sql);
//     $result = $stmt->execute([$id, $category_id[$i]]);
//     $check = $stmt->fetch(PDO::FETCH_BOUND);

//     if($check) {
//         echo "$check<br>";
//         print($result);
//         echo "\$i: $i, \$id: $id, \$category_id[$i]";
//     } else {
//         echo "$check<br>";
//         echo "\$i: $i, \$id: $id, \$category_id[$i]";
//     }

// }

// for ($i=0; $i < count($category_id) ; $i++) {
//     $sql = "SELECT * FROM taxonomy where article_id = ? AND category_id = ?";
//     $stmt = $pdo->prepare($sql);
//     $result = $stmt->execute([$id, $category_id[$i]]);
//     $check = $stmt->fetch(PDO::FETCH_BOUND);
//     if($check) {
//         echo "\$check: ";
//         var_dump($check);
//         echo "\$i: $i, \$id: $id, \$category_id[$i]: $category_id[$i]";
//         echo "<br>";
//         echo "<br>";

//         $sqlUpdate = "UPDATE taxonomy SET article_id = ?, category_id = ? WHERE article_id = ?";
//         $stmtUpdate = $pdo->prepare($sqlUpdate);
//         $stmtUpdate->execute([$id, $category_id[$i], $id]);

//     } else {
//         echo "\$check: ";
//         var_dump($check);
//         echo "\$i: $i, \$id: $id, \$category_id[$i]: $category_id[$i]";
//         echo "<br>";
//         echo "<br>";

//         $sqlInsert = "INSERT INTO taxonomy(article_id, category_id)VALUES(?, ?)";
//         $stmtInsert = $pdo->prepare($sqlInsert);
//         $stmtInsert->execute([$id, $category_id[$i]]);
//     }
// }






?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PDO Practice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
<h1><?php if(isset($_POST['name']) && !empty($_POST['name'])) {
    $name = $_POST['name'];
        echo $name;
    }
    ?>
</h1>
<form class="form-inline" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
    <fieldset>
        <legend>輸入訪客名稱</legend>
            <div class="col-md-8">
                <h5>Name: </h5>
                <input type="text" name="name" />
            </div>
            <div class="col-md-8">
                <h5>性別: </h5>
                <input type="text" name="gender" />
            </div>
            <div class="col-md-8">
                <h5>年齡: </h5>
                <input type="text" name="age" />
            </div>
            <div>
                <button type="submit" class="btn btn-primary col-md-4 col-sm-12">提交</button>
            </div>
    </fieldset>
</form>

<?php
echo "<pre>";
echo "<br><br>POST: ";
var_dump($_POST);
$_POST = null;
var_dump($_POST);
echo "</pre>";
?>

</body>
</html>