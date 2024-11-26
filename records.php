<?php
include 'connection.php';

$sql = "SELECT * FROM `jamb_detail`";
$result = $connection->query($sql);

?>
<html>
  <head>Records</head>
  <body>
    <h1>Data records</h1>
  </body>
  <?php if ($result->num_rows > 0) : ?>
    <table border="1">
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Phone</th>
      <th>State</th>
      <th>Course</th>
      <th>Institution</th>
    </tr>

    <?php while($row =$result->fetch_assoc()) :?>
      <tr>
        <td><?= $row["id"] ?></td>
        <td><?= $row["username"] ?></td>
        <td><?= $row["phonenumber"] ?></td>
        <td><?= $row["userstate"] ?></td>
        <td><?= $row["course"] ?></td>
        <td><?= $row["institution"] ?></td>
        <td><a href="delete.php?id=<?=$row["id"]?>">delete </a></td>

      </tr>
      <?php endwhile; ?>
    </table>

    <?php else: ?>
      <p>No data found</p>

    <?php endif; ?>
</html>