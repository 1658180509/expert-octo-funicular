<?php
$dbhost = 'localhost:3306';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = '123456';          // mysql用户名密码
$dbname="test";
$conn = @new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if(! $conn )
{
    die('连接失败: ' . mysqli_error($conn));
}
echo '连接成功<br />';
$sql = 'SELECT * FROM `test`  ';
$retval = mysqli_query( $conn, $sql );

if(! $retval )
{
    die('查询成功: ' . mysqli_error($conn));
}

echo '<table border="1"><tr><td>序列号</td><td>用户名</td><td>密码</td><td>年龄</td><td>电话号</td></tr>';
while($row = mysqli_fetch_array($retval, 1))
{
    echo "<tr><td> {$row['id']}</td> ".
        "<td>{$row['username']} </td> ".
        "<td>{$row['password']} </td> ".
        "<td>{$row['age']} </td> ".
        "<td>{$row['telephone']} </td> ".
        "</tr>";
}
echo '</table>';
mysqli_close($conn);
?>