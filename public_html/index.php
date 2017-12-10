<?php require_once 'first.php' ?>
<?php require_once 'header.php' ?>

<?php

    define('ID', '21');
    define('PASSWORD', '22');

    $id = $_POST['id'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    if (empty($name) || $id != ID || $password != PASSWORD) {
        header("Location: ./login.php");
        exit;
    }

?>

    <h1><?php echo "$name". '!' . '&nbsp; '; ?>LOGIN SUCCESS!</h1>
    <div class="geturl">
        <h2>HTMLの取得ができます</h2>
        <form method='post' action='gethtml.php'>
          <input type="text" name="url" placeholder="URLを入力してください">
          <div class="submit"><button type="submit">HTMLを取得</button></div>
        </form>
    </div>
    <a class='return' href='login.php'>戻る</div>

<?php require_once 'footer.php' ?>
<?php require_once 'last.php' ?>
