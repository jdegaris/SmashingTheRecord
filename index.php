<?php
include "includes/header.php";
$per_div = 11;
?>

<div class="wrapper">
<div id="index-top">


    <div id="intro">
      <p>Enter a players name below to find out
      how far they must go before </p>
      <p class="logo">#SmashingTheRecord</p>
    </div>

  <div id="search">
  <form class="player-search" action="search.php" method="post">
  <input type="text" name="search" placeholder="Enter Last Name of Player">
  <input type="submit">
      </form>

  </div>
  <p class="spacer">You can also check out the</p>
  <button id="league-leaders">League Leaders</button>


  <p class="spacer">Or select a team  below</p>

</div>  

<div class="teams-box">
<div class="teams-menu">

<?php
echo teamDisplay(1, 32);
 ?>
</div>


   <!-- LARGE DISPLAY TEAM LIST -->


<div class="teams-list">
<?php
$team_count = splitTeams(1, $per_div);
echo teamDisplay($team_count, $per_div);
 ?>
</div>
<div class="teams-list">

<?php
$team_count = splitTeams(2, $per_div);
echo teamDisplay($team_count, $per_div);
 ?>
</div>

<div class="teams-list">

<?php
$team_count = splitTeams(3, $per_div);
echo teamDisplay($team_count, $per_div);
 ?>
</div>
</div>
 







</div><!-- /////END WRAPPER///// -->






<!-- LEADERBOARD OVERLAY -->
<div id="leaderboard-overlay">
<div id="close-overlay"><i class="far fa-window-close"></i></div>







<div id="leader-nav">
<ul>
    <li id="show-passing-list">Passing</li>
      <div id="passing-stats">  
        <ul>
            <li id="passing-completions">Completions</li>
            <li id="passing-yards">Yards</li>
            <li id="passing-touchdowns">Touchdowns</li>
        </ul>
      </div>

    <li id="show-rushing-list">Rushing</li>
    <div id="rushing-stats">  
        <ul>
            <li id="rushing-yards">Yards</li>
            <li id="rushing-touchdowns">Touchdowns</li>
        </ul>
      </div>

    <li id="show-receiving-list">Receiving</li>
    <div id="receiving-stats">  
        <ul>
            <li id="receiving-receptions">Receptions</li>
            <li id="receiving-yards">Yards</li>
            <li id="receiving-touchdowns">Touchdowns</li>
        </ul>
      </div>
</ul>
</div>

<div id='display-passing-yards'>  
<?php
$query = "SELECT * FROM season_stats ORDER BY season_pass_yards DESC LIMIT 6 ";
$select_season_passing_yards_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_season_passing_yards_query)) {

  $player_id = $row['player_id'];
  $season_pass_yards = $row['season_pass_yards'];

    $query = "SELECT * FROM players WHERE player_id = $player_id ";
    $select_player = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_player)) {
        $player_firstname = $row['player_firstname'];
        $player_lastname = $row['player_lastname'];
        $player_image = $row['player_image'];

        
      echo "<div id='stat-box'>";
      echo "<div id='stat-image'>";
      echo "<a href='player.php?p_id=$player_id'>";
      echo "<p class='player-image'><img src='$player_image'>";
      echo "</div>";
      echo "<div id='stat-player'>";
      echo "<p id='player-result'><span>{$player_firstname}<br> {$player_lastname}</span></p>";
      echo "<p id='player-stats'>{$season_pass_yards} <br>YARDS</p></a>"; 
      echo "</div>";
      echo "</div>";
      
    }
}
?>
</div>

<div id='display-passing-completions'>
<?php 
$query = "SELECT * FROM season_stats ORDER BY season_pass_completions DESC, season_pass_yards DESC LIMIT 5 ";
$select_season_passing_comps_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_season_passing_comps_query)) {

  $player_id = $row['player_id'];
  $season_pass_completions = $row['season_pass_completions'];

    $query = "SELECT * FROM players WHERE player_id = $player_id ";
    $select_player = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_player)) {
        $player_firstname = $row['player_firstname'];
        $player_lastname = $row['player_lastname'];
        $player_image = $row['player_image'];


      echo "<div id='stat-box'>";
      echo "<div id='stat-image'>";
      echo "<a href='player.php?p_id=$player_id'>";
      echo "<p class='player-image'><img src='$player_image'>";
      echo "</div>";
      echo "<div id='stat-player'>";
      echo "<p id='player-result'><span>{$player_firstname}<br> {$player_lastname}</span></p>";
      echo "<p id='player-stats'>{$season_pass_completions} <br>COMPLETIONS</p></a>"; 
      echo "</div>";
      echo "</div>";
      
    }
}
?>
</div>
<div id='display-passing-touchdowns'>
<?php 
$query = "SELECT * FROM season_stats ORDER BY season_pass_tds DESC, season_pass_yards DESC LIMIT 6 ";
$select_season_passing_tds_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_season_passing_tds_query)) {

  $player_id = $row['player_id'];
  $season_pass_tds = $row['season_pass_tds'];

    $query = "SELECT * FROM players WHERE player_id = $player_id ";
    $select_player = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_player)) {
        $player_firstname = $row['player_firstname'];
        $player_lastname = $row['player_lastname'];
        $player_image = $row['player_image'];


      echo "<div id='stat-box'>";
      echo "<div id='stat-image'>";
      echo "<a href='player.php?p_id=$player_id'>";
      echo "<p class='player-image'><img src='$player_image'>";
      echo "</div>";
      echo "<div id='stat-player'>";
      echo "<p id='player-result'><span>{$player_firstname}<br> {$player_lastname}</span></p>";
      echo "<p id='player-stats'>{$season_pass_tds} <br>Touchdowns</p></a>"; 
      echo "</div>";
      echo "</div>";
      
    }
}
?>
</div>


<!-- RUSHING STATS -->

<div id='display-rushing-yards'>  
<?php
$query = "SELECT * FROM season_stats ORDER BY season_rush_yards DESC LIMIT 5 ";
$select_season_rushing_yards_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_season_rushing_yards_query)) {

  $player_id = $row['player_id'];
  $season_rush_yards = $row['season_rush_yards'];

    $query = "SELECT * FROM players WHERE player_id = $player_id ";
    $select_player = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_player)) {
        $player_firstname = $row['player_firstname'];
        $player_lastname = $row['player_lastname'];
        $player_image = $row['player_image'];


        
      echo "<div id='stat-box'>";
      echo "<div id='stat-image'>";
      echo "<a href='player.php?p_id=$player_id'>";
      echo "<p class='player-image'><img src='$player_image'>";
      echo "</div>";
      echo "<div id='stat-player'>";
      echo "<p id='player-result'><span>{$player_firstname}<br> {$player_lastname}</span></p>";
      echo "<p id='player-stats'>{$season_rush_yards} <br>YARDS</p></a>"; 
      echo "</div>";
      echo "</div>";
      
    }
}
?>
</div>


<div id='display-rushing-touchdowns'>
<?php 
$query = "SELECT * FROM season_stats ORDER BY season_rush_tds DESC, season_rush_yards DESC LIMIT 5 ";
$select_season_rushing_tds_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_season_rushing_tds_query)) {

  $player_id = $row['player_id'];
  $season_rush_tds = $row['season_rush_tds'];

    $query = "SELECT * FROM players WHERE player_id = $player_id ";
    $select_player = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_player)) {
        $player_firstname = $row['player_firstname'];
        $player_lastname = $row['player_lastname'];
        $player_image = $row['player_image'];


      echo "<div id='stat-box'>";
      echo "<div id='stat-image'>";
      echo "<a href='player.php?p_id=$player_id'>";
      echo "<p class='player-image'><img src='$player_image'>";
      echo "</div>";
      echo "<div id='stat-player'>";
      echo "<p id='player-result'><span>{$player_firstname}<br> {$player_lastname}</span></p>";
      echo "<p id='player-stats'>{$season_rush_tds} <br>Touchdowns</p></a>"; 
      echo "</div>";
      echo "</div>";
      
    }
}
?>
</div>



<div id='display-receiving-yards'>  
<?php
$query = "SELECT * FROM season_stats ORDER BY season_rec_yards DESC LIMIT 5 ";
$select_season_receiving_yards_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_season_receiving_yards_query)) {

  $player_id = $row['player_id'];
  $season_rec_yards = $row['season_rec_yards'];

    $query = "SELECT * FROM players WHERE player_id = $player_id ";
    $select_player = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_player)) {
        $player_firstname = $row['player_firstname'];
        $player_lastname = $row['player_lastname'];
        $player_image = $row['player_image'];

        
      echo "<div id='stat-box'>";
      echo "<div id='stat-image'>";
      echo "<a href='player.php?p_id=$player_id'>";
      echo "<p class='player-image'><img src='$player_image'>";
      echo "</div>";
      echo "<div id='stat-player'>";
      echo "<p id='player-result'><span>{$player_firstname}<br> {$player_lastname}</span></p>";
      echo "<p id='player-stats'>{$season_rec_yards} <br>YARDS</p></a>"; 
      echo "</div>";
      echo "</div>";
      
    }
}
?>
</div>

<div id='display-receiving-receptions'>
<?php 
$query = "SELECT * FROM season_stats ORDER BY season_total_rec DESC, season_rec_yards DESC LIMIT 5 ";
$select_season_passing_comps_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_season_passing_comps_query)) {

  $player_id = $row['player_id'];
  $season_total_rec = $row['season_total_rec'];

    $query = "SELECT * FROM players WHERE player_id = $player_id ";
    $select_player = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_player)) {
        $player_firstname = $row['player_firstname'];
        $player_lastname = $row['player_lastname'];
        $player_image = $row['player_image'];


      echo "<div id='stat-box'>";
      echo "<div id='stat-image'>";
      echo "<a href='player.php?p_id=$player_id'>";
      echo "<p class='player-image'><img src='$player_image'>";
      echo "</div>";
      echo "<div id='stat-player'>";
      echo "<p id='player-result'><span>{$player_firstname}<br> {$player_lastname}</span></p>";
      echo "<p id='player-stats'>{$season_total_rec} <br>COMPLETIONS</p></a>"; 
      echo "</div>";
      echo "</div>";
      
    }
}
?>
</div>
<div id='display-receiving-touchdowns'>
<?php 
$query = "SELECT * FROM season_stats ORDER BY season_rec_tds DESC, season_rec_yards DESC LIMIT 5 ";
$select_season_rec_tds_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_season_rec_tds_query)) {

  $player_id = $row['player_id'];
  $season_rec_tds = $row['season_rec_tds'];

    $query = "SELECT * FROM players WHERE player_id = $player_id ";
    $select_player = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_player)) {
        $player_firstname = $row['player_firstname'];
        $player_lastname = $row['player_lastname'];
        $player_image = $row['player_image'];


      echo "<div id='stat-box'>";
      echo "<div id='stat-image'>";
      echo "<a href='player.php?p_id=$player_id'>";
      echo "<p class='player-image'><img src='$player_image'>";
      echo "</div>";
      echo "<div id='stat-player'>";
      echo "<p id='player-result'><span>{$player_firstname}<br> {$player_lastname}</span></p>";
      echo "<p id='player-stats'>{$season_rec_tds} <br>Touchdowns</p></a>"; 
      echo "</div>";
      echo "</div>";
      
    }
}
?>
</div>



</div>


</div>


  </body>
  <script src="app/app.js"></script>
</html>
