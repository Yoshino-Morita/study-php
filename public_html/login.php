<?php require_once 'first.php' ?>
<?php require_once 'header.php' ?>

  <p>※You must write all items</p>
    <table border='none'>
      <form method='post' action='./index.php'>
        <tr>
          <th>Name</th>
          <td>
            <input type="text" name="name" placeholder="name">
          </td>
        </tr>
        <tr>
          <th>ID</th>
          <td>
            <input type="text" name="id" placeholder="id">
          </td>
        </tr>
        <tr>
          <th>PASSWORD</th>↲
          <td>
            <input type="text" name="password" placeholder="password">
          </td>
        </tr>
        <tr>
          <th></th>
          <td class='submit'><button type="submit">ログイン</button></td>
        </tr>
      </form>
    </table>
<?php require_once 'footer.php' ?>
<?php require_once 'last.php' ?>
