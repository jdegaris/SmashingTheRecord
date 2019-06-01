<?php
include "includes/header.php";
?>

<div class="wrapper">

<a href="team-list.php" class="team-list">Back to Team List</a>

<table id="search-results">
  <thead>
    <td>Last Name</td>
    <td>First Name</td>
    <td>Position</td>
  </thead>

<?php
if(isset($_GET['tm_id'])) {
  $team_id = $_GET['tm_id'];

  $query = "SELECT * FROM players WHERE player_team_id = $team_id ORDER BY player_lastname ASC";
  $player_query = mysqli_query($connection, $query);
    confirmQuery($player_query);
  while($row = mysqli_fetch_assoc($player_query)) {
    $player_id = $row['player_id'];
    $player_firstname = $row['player_firstname'];
    $player_lastname = $row['player_lastname'];
    $player_position = $row['player_position'];

    echo "<tr>";
    echo "<td class='player-result'><a href='player.php?p_id=$player_id'> {$player_lastname}</a></td>";
    echo "<td class='player-result'>{$player_firstname}</td>";

    $send_query = "SELECT * FROM positions WHERE position_id = $player_position";
    $position_query = mysqli_query($connection, $send_query);
    while($row = mysqli_fetch_assoc($position_query)) {
      $player_position = $row['position_name'];
      echo "<td class='player-result'>{$player_position}</td>";
      }

    echo "</tr>";



}

} else {
  header("Location: index.php");
}




?>
</div>

</table>


</div>

<script type="text/javascript">
var listColor = function() {
var list = document.getElementsByTagName('li');

for (var i = 0, l = list.length; i < l; i += 2) {
  list[i + 1].style.color = 'red';
}
};

listColor();
</script>
