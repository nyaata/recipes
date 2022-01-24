<?php
require_once("config.php");
?>
<html>
<head>
<title>PHP PDO CRUD</title>
<style>
body{width:615px;font-family:arial;letter-spacing:1px;line-height:20px;}
.tbl-qa{width: 100%;font-size:0.9em;background-color: #f5f5f5;}
.tbl-qa th.table-header {padding: 5px;text-align: left;padding:10px;}
.tbl-qa .table-row td {padding:10px;background-color: #FDFDFD;vertical-align:top;}
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
</style>
</head>
<body>

<?php
if (mysqli_num_rows($result) > 0) {
?>


<div style="text-align:right;margin:20px 0px;"><a href="createrecipe.php" class="button_link" style="vertical-align:bottom;"/> Create Recipe</a></div>
<table class="tbl-qa">
  <thead>
	<tr>
	  <th class="table-header" width="20%">Title</th>
	  <th class="table-header" width="40%">Instructions</th>
	  <th class="table-header" width="20%">Date</th>
	  <th class="table-header" width="5%">Actions</th>
	</tr>
  </thead>
  <tbody id="table-body">
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
	  <tr class="table-row">
		<td><?php echo $row["title"]; ?></td>
		<td><?php echo $row["instruction"]; ?></td>
		<td><?php echo $row["created_at"]; ?></td>
		<td><a class="ajax-action-links" href='update.php?id=<?php echo $row['id']; ?>'><img src="crud-icon/edit.png" title="Edit" /></a> <a class="ajax-action-links" href='delete.php?id=<?php echo $row['id']; ?>'><img src="crud-icon/delete.png" title="Delete" /></a></td>
	  </tr>
    <?php
$i++;
}
?>

  </tbody>
</table>
<?php
		}
	}
?>
</body>
</html>