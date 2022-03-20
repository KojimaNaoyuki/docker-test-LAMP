<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SQL Test Page</h1>

    <?php 
        $dsn = 'mysql:dbname=test_db;host=db';
        $user = 'root';
        $password = 'password';

        try {
            $dbh = new PDO($dsn, $user, $password);

            print("接続成功<br>");

            $dbh->query('SET NAMES sjis');

            $sql = "select * from test_tb";

            $dbData = $dbh->query($sql);
        }catch (PDOException $e) {
            print('接続不可:'.$e->getMessage());
            die();
        }

        $dbh = null;
    ?>

    <p>DB取得データ</p>
    <ul>
        <li>
            <?php 
            
                foreach ($dbData as $item) {
                    print($item['id']);
                    print(" | ");
                    print($item['name'].'<br>');
                }
            
            ?>
        </li>
    </ul>
</body>
</html>