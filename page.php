<html>
<head>
    <style type="text/css">
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid #ccc;
            padding: 5px;
        }
    </style>
</head>
<body>

<?php

$dbh = new PDO(
    'mysql:host=localhost;port=3306;dbname=hackme',
    'root',
    'root',
    array(
        PDO::ATTR_PERSISTENT => false
    )
);

$sql = "SELECT * FROM article";
if (! empty($_GET['id'])) {
    $sql = "SELECT * FROM article WHERE id = ".$_GET['id'];
}

$results = $dbh->query($sql);
var_dump($sql);

print '<table>';
print '<tr>';
print '<td>ID</td>';
print '<td>Title</td>';
print '<td>Description</td>';
print '<td>Text</td>';
print '<td>Created</td>';
print '<td>User</td>';
print '</tr>';
foreach ($results as $row) {
    print '<tr>';
    print '<td>'.$row['id'].'</td>';
    print '<td>'.$row['title'].'</td>';
    print '<td>'.$row['description'].'</td>';
    print '<td>'.$row['text'].'</td>';
    print '<td>'.$row['created'].'</td>';
    print '<td>'.$row['user_id'].'</td>';
    print '</tr>';
}
print '</table>';

?>

</body>
</html>
