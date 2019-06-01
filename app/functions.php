<?php

///////confirm that query works////////////
function confirmQuery($result) {
  global $connection;
if (!$result) {
  die("QUERY FAILED" . mysqli_error($connection));
}
}

////////calculates teams per div to display on homepage//////////
function splitTeams($div_num, $per_div) {

  return $split_teams = ($div_num * $per_div)-$per_div;
}


/////////displays team links on homepage//////////
function teamDisplay($team_count, $per_div) {
global $connection;
$query = "SELECT * FROM teams LIMIT $team_count, $per_div";
$select_teams_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_teams_query)) {
  $team_id = $row['team_id'];
  $team_city = $row['team_city'];
  $team_name = $row['team_name'];

  if ($team_name == "FortyNiners") {
    $team_name = "49ers";
  }

echo "<div class='team'><a href='team.php?tm_id=$team_id'>{$team_city} {$team_name}</a></div>";
}

}

function username_exists($username) {
  global $connection;
  $query = "SELECT username FROM users WHERE username = '$username' ";
  $result = mysqli_query($connection, $query);
  confirmQuery($result);

  if (mysqli_num_rows($result) > 0) {
    return true;
  } else {
    return false;
  }

}


function email_exists($email) {
  global $connection;
  $query = "SELECT user_email FROM users WHERE user_email = '$email' ";
  $result = mysqli_query($connection, $query);
  confirmQuery($result);

  if (mysqli_num_rows($result) > 0) {
    return true;
  } else {
    return false;
  }

}



?>
