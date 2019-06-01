<?php
if (isset($_GET['p_id'])) {
  $player_id = $_GET['p_id'];
}

$query = "SELECT * FROM players WHERE player_id = $player_id ";
$select_player_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_player_query)) {

  $player_firstname = $row['player_firstname'];
  $player_lastname = $row['player_lastname'];
  $player_position = $row['player_position'];
  $player_team_id = $row['player_team_id'];
  $player_image = $row['player_image'];
}
  $query = "SELECT * FROM season_stats WHERE player_id = $player_id ";
  $select_season_query = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($select_season_query)) {

  $season_pass_yards = $row['season_pass_yards'];
  $season_pass_tds = $row['season_pass_tds'];
  $season_rush_yards = $row['season_rush_yards'];
  $season_rush_tds = $row['season_rush_tds'];
  $season_rec_yards = $row['season_rec_yards'];
}

  $query = "SELECT * FROM career_stats WHERE player_id = $player_id ";
  $select_career_query = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($select_career_query)) {

  $career_pass_yards = $row['career_pass_yards'];
  $career_pass_tds = $row['career_pass_tds'];
  $career_rush_yards = $row['career_rush_yards'];
  $career_rush_tds = $row['career_rush_tds'];
  $career_rec_yards = $row['career_rec_yards'];
  $career_rec_tds = $row['career_rec_tds'];
}

  $query = "SELECT * FROM playoff_stats WHERE player_id = $player_id ";
  $select_playoff_query = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($select_playoff_query)) {


  $playoff_pass_yards = $row['playoff_pass_yards'];
  $playoff_pass_tds = $row['playoff_pass_tds'];
  $playoff_rush_yards = $row['playoff_rush_yards'];
  $playoff_rush_tds = $row['playoff_rush_tds'];
  $playoff_rec_yards = $row['playoff_rec_yards'];
  $playoff_rec_tds = $row['playoff_rec_tds'];
}

$query = "SELECT * FROM positions WHERE position_id = $player_position ";
$get_position = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($get_position)) {
  $player_position = $row['position_name'];
}

$query = "SELECT * FROM teams WHERE team_id = $player_team_id ";
$get_team_name = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($get_team_name)) {
  $player_team = $row['team_name'];
}
$season_pass_yards_record = 5477;
$season_pass_yards_break = $season_pass_yards_record - $season_pass_yards;

$season_rush_yards_record = 2105;
$season_rush_yards_break = $season_rush_yards_record - $season_rush_yards;

$season_pass_tds_record = 55;
$season_pass_tds_break = $season_pass_tds_record - $season_pass_tds;

$season_rush_tds_record = 28;
$season_rush_tds_break = $season_rush_tds_record - $season_rush_tds;





?>


 ?>

<script>
function displayData() {
  //Display passing stats

      document.getElementById('careerPass').innerHTML = "<?php echo $career_pass_yards ?>";
      document.getElementById('passYardsRecord').innerHTML = bbPassYardRecord;
//   //Display rushing stats
      document.getElementById('careerRush').innerHTML = "<?php echo $career_rush_yards ?>";
}
</script>
