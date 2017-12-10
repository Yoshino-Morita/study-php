<?php require_once 'first.php' ?>
<?php require_once 'header.php' ?>


<p>ここから取得したHTMLタグ</p>
</div><a class='return' href='login.php'>戻る</a></div>
<p>------------------------------------------------</p>

<?php


    //$get_url = 'index.php';
      $get_url = $_POST['url'];

    if (! empty($get_url)) {
      //HTML取得↲
        $html = file_get_contents($get_url);
    }
    if (! empty($html)) {
        $html = htmlspecialchars($html);
        $html = mb_ereg_replace('\r\n', '<br />', $html);
        $html = mb_ereg_replace('\n', '<br />', $html);
        $html = mb_ereg_replace('\r', '<br />', $html);
    }
    echo "$html";
?>

<?php require_once 'footer.php' ?>
<?php require_once 'last.php' ?>
