<?php

$query = "SELECT * FROM players WHERE player_id = $player_id ";
$select_player_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_player_query)) {

  $player_firstname = $row['player_firstname'];
  $player_lastname = $row['player_lastname'];
  $player_position = $row['player_position'];
  $player_team_id = $row['player_team_id'];
  $player_image = $row['player_image'];
  $player_twitter = $row['player_twitter'];
}
  $query = "SELECT * FROM season_stats WHERE player_id = $player_id ";
  $select_season_query = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($select_season_query)) {

  $season_pass_completions = $row['season_pass_completions'];
  $season_pass_yards = $row['season_pass_yards'];
  $season_pass_tds = $row['season_pass_tds'];
  $season_rush_yards = $row['season_rush_yards'];
  $season_rush_tds = $row['season_rush_tds'];
  $season_total_rec = $row['season_total_rec'];
  $season_rec_yards = $row['season_rec_yards'];
  $season_rec_tds = $row['season_rec_tds'];
}

  $query = "SELECT * FROM career_stats WHERE player_id = $player_id ";
  $select_career_query = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($select_career_query)) {

  $career_pass_completions = $row['career_pass_completions'];
  $career_pass_yards = $row['career_pass_yards'];
  $career_pass_tds = $row['career_pass_tds'];
  $career_rush_yards = $row['career_rush_yards'];
  $career_rush_tds = $row['career_rush_tds'];

  $career_total_rec = $row['career_total_rec'];
  $career_rec_yards = $row['career_rec_yards'];
  $career_rec_tds = $row['career_rec_tds'];
}

  $query = "SELECT * FROM playoff_stats WHERE player_id = $player_id ";
  $select_playoff_query = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($select_playoff_query)) {


  $playoff_pass_completions = $row['playoff_pass_completions'];
  $playoff_pass_yards = $row['playoff_pass_yards'];
  $playoff_pass_tds = $row['playoff_pass_tds'];
  $playoff_rush_yards = $row['playoff_rush_yards'];
  $playoff_rush_tds = $row['playoff_rush_tds'];

  $playoff_total_rec = $row['playoff_total_rec'];
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

$query = "SELECT * FROM stat_records ";
$get_stat_records = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($get_stat_records)) {
  $season_pass_completions_record = $row['season_pass_completions_record'];
  $season_pass_yards_record = $row['season_pass_yards_record'];
  $season_rush_yards_record = $row['season_rush_yards_record'];
  $season_rec_yards_record = $row['season_rec_yards_record'];


  $season_pass_tds_record = $row['season_pass_tds_record'];
  $season_rush_tds_record = $row['season_rush_tds_record'];
  $season_rec_tds_record = $row['season_rec_tds_record'];
  $season_total_rec_record = $row['season_total_rec_record'];

  $career_pass_completions_record = $row['career_pass_completions_record'];
  $career_pass_yards_record = $row['career_pass_yards_record'];
  $career_rush_yards_record = $row['career_rush_yards_record'];
  $career_rec_yards_record = $row['career_rec_yards_record'];

  $career_pass_tds_record = $row['career_pass_tds_record'];
  $career_rush_tds_record = $row['career_rush_tds_record'];
  $career_rec_tds_record = $row['career_rec_tds_record'];
  $career_total_rec_record = $row['career_total_rec_record'];

  $playoff_pass_completions_record = $row['playoff_pass_completions_record'];
  $playoff_pass_yards_record = $row['playoff_pass_yards_record'];
  $playoff_rush_yards_record = $row['playoff_rush_yards_record'];
  $playoff_rec_yards_record = $row['playoff_rec_yards_record'];

  $playoff_pass_tds_record = $row['playoff_pass_tds_record'];
  $playoff_rush_tds_record = $row['playoff_rush_tds_record'];
  $playoff_rec_tds_record = $row['playoff_rec_tds_record'];
  $playoff_total_rec_record = $row['playoff_total_rec_record'];
}



$season_pass_completions_break = $season_pass_completions_record - $season_pass_completions;
$season_pass_yards_break = $season_pass_yards_record - $season_pass_yards;
$season_rush_yards_break = $season_rush_yards_record - $season_rush_yards;
$season_pass_tds_break = $season_pass_tds_record - $season_pass_tds;
$season_rush_tds_break = $season_rush_tds_record - $season_rush_tds;

$season_total_rec_break = $season_total_rec_record - $season_total_rec;
$season_rec_yards_break = $season_rec_yards_record - $season_rec_yards;
$season_rec_tds_break = $season_rec_tds_record - $season_rec_tds;




$career_pass_completions_break = $career_pass_completions_record - $career_pass_completions;
$career_pass_yards_break = $career_pass_yards_record - $career_pass_yards;
$career_rush_yards_break = $career_rush_yards_record - $career_rush_yards;
$career_pass_tds_break = $career_pass_tds_record - $career_pass_tds;
$career_rush_tds_break = $career_rush_tds_record - $career_rush_tds;

$career_total_rec_break = $career_total_rec_record - $career_total_rec;
$career_rec_yards_break = $career_rec_yards_record - $career_rec_yards;
$career_rec_tds_break = $career_rec_tds_record - $career_rec_tds;


$playoff_pass_completions_break = $playoff_pass_completions_record - $playoff_pass_completions;
$playoff_pass_yards_break = $playoff_pass_yards_record - $playoff_pass_yards;
$playoff_rush_yards_break = $playoff_rush_yards_record - $playoff_rush_yards;
$playoff_pass_tds_break = $playoff_pass_tds_record - $playoff_pass_tds;
$playoff_rush_tds_break = $playoff_rush_tds_record - $playoff_rush_tds;

$playoff_total_rec_break = $playoff_total_rec_record - $playoff_total_rec;
$playoff_rec_yards_break = $playoff_rec_yards_record - $playoff_rec_yards;
$playoff_rec_tds_break = $playoff_rec_tds_record - $playoff_rec_tds;

 ?>
