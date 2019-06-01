<?php
include "includes/header.php";
?>


<div class="wrapper">



<table id="search-results">
  <thead>
    <td>Last Name</td>
    <td>First Name</td>
    <td>Pos.</td>
  </thead>

<?php
if (isset($_POST['search'])) {
  $search = $_POST['search'];

$query = "SELECT * FROM players WHERE player_lastname LIKE '%$search%' ORDER BY player_lastname, player_firstname";
$search_query = mysqli_query($connection, $query);

if (!$search_query) {
  die("YOU FAILED" . mysqli_error($connection));
}
$count = mysqli_num_rows($search_query);
if ($count == 0) {
  echo "<tr>
  <td></td>
  <td>NO RESULTS</td>
  <td></td>
  </tr>";
} else {

  while ($row = mysqli_fetch_assoc($search_query)) {
      $player_id = $row['player_id'];
      $player_lastname = $row['player_lastname'];
      $player_firstname = $row['player_firstname'];
      $player_position = $row['player_position'];

      echo "<tr>";
      echo "<td class='player-result'><a href='player.php?p_id=$player_id'> {$player_lastname}</a></td>";
      echo "<td class='player-result'>{$player_firstname}</td>";

      $send_query = "SELECT * FROM positions WHERE position_id = $player_position";
      $position_query = mysqli_query($connection, $send_query);
      while($row = mysqli_fetch_assoc($position_query)) {
        $player_position = $row['position_name'];
        echo "<td class='player-result'>{$player_position}</td>";
        echo "</tr>";
        }



        }
  }
}
?>
</div>
