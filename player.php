<link rel="stylesheet" href="css/player-styles.css">
<link rel="stylesheet" href="css/teams.css">
<script type="text/javascript" async src="//platform.twitter.com/widgets.js"></script>

<?php
include "includes/header.php";

if (isset($_GET['p_id'])) {
  $player_id = $_GET['p_id'];
}

include "includes/get_player_var.php";
include "includes/weekly_matchups.php";

?>

<div class="wrapper ">
<a href="team.php?tm_id=<?php echo $player_team_id ?>" class="back-team <?php echo $player_team .'2'?>">Back to <?php echo $player_team ?></a>
<a href="team-list.php" class="back-league <?php echo $player_team .'2'?>">Back to Teams</a>

  <div class="player-info">
  <img src="<?php echo $player_image?>" alt="<?php echo $player_firstname . " " . $player_lastname?>">
  <div class="<?php echo $player_team .'1'?>">
      
      
      <?php if ($player_team == "FortyNiners") {
        $player_team = "49ers";
      } echo '<div class="player-name">' . $player_firstname . " " . $player_lastname . '</div> <div class="player-position">' . $player_position ." - " . $player_team . '</div>'?>
      <?php if ($player_team == "49ers") {
        $player_team = "FortyNiners";
      } ?>
    </div>
</div>

</div>

  <div id="category">

      <div class="<?php echo $player_team ."2"?>">
        <h2 onclick="displaySeasonData()" id="season" class="mainStat">SEASON</h2>
        <h2 onclick="displayCareerData()" id="career" class="mainStat">Career</h2>
        <!-- <h2 onclick="displayPlayoffData()" id="post" class="mainStat">Playoffs</h2> -->
      </div>

</div>
<?php

if ($player_position == "QB") {
  include "includes/player_qb.php";
} elseif ($player_position == "RB") {
  include "includes/player_rb.php";
} elseif ($player_position == "WR" || "TE") {
  include "includes/player_wr.php";
}

 ?>


<!-- END CONTAINER -->
</div>

</body>
<script type="text/javascript">
var pos = "<?php echo $player_position ?>";

          
          
          // SEASON VARIABLES
var season_pass_completions = <?php echo $season_pass_completions ?>;
var season_pass_completions_break = <?php echo $season_pass_completions_break ?>;
var season_pass_yards = <?php echo $season_pass_yards ?>;
var season_pass_yards_break = <?php echo $season_pass_yards_break ?>;
var season_pass_tds = <?php echo $season_pass_tds ?>;
var season_pass_tds_break = <?php echo $season_pass_tds_break ?>;
var season_rush_yards = <?php echo $season_rush_yards ?>;
var season_rush_yards_break = <?php echo $season_rush_yards_break ?>;
var season_rush_tds = <?php echo $season_rush_tds ?>;
var season_rush_tds_break = <?php echo $season_rush_tds_break ?>;
var season_total_rec = <?php echo $season_total_rec ?>;
var season_total_rec_break = <?php echo $season_total_rec_break ?>;
var season_rec_yards = <?php echo $season_rec_yards ?>;
var season_rec_yards_break = <?php echo $season_rec_yards_break ?>;
var season_rec_tds = <?php echo $season_rec_tds ?>;
var season_rec_tds_break = <?php echo $season_rec_tds_break ?>;
          // CAREER VARIABLES
  
var career_pass_completions = <?php echo $career_pass_completions ?>;
var career_pass_completions_break = <?php echo $career_pass_completions_break ?>;
if (career_pass_completions_break < 1) {
  career_pass_completions_break = "SMASHED";
  }
var career_pass_yards = <?php echo $career_pass_yards ?>;
var career_pass_yards_break = <?php echo $career_pass_yards_break ?>;

if (career_pass_yards_break < 1) {
  career_pass_yards_break = "SMASHED";
  }
var career_pass_tds = <?php echo $career_pass_tds ?>;
var career_pass_tds_break = <?php echo $career_pass_tds_break ?>;
var career_rush_yards = <?php echo ($career_rush_yards) ?>;
var career_rush_yards_break = <?php echo $career_rush_yards_break ?>;
var career_rush_tds = <?php echo $career_rush_tds ?>;
var career_rush_tds_break = <?php echo $career_rush_tds_break ?>;
var career_total_rec = <?php echo $career_total_rec ?>;
var career_total_rec_break = <?php echo $career_total_rec_break ?>;
var career_rec_yards = <?php echo $career_rec_yards ?>;
var career_rec_yards_break = <?php echo $career_rec_yards_break ?>;
var career_rec_tds = <?php echo $career_rec_tds ?>;
var career_rec_tds_break = <?php echo $career_rec_tds_break ?>;
          // POSTSEASON VARIABLES
var playoff_pass_completions = <?php echo $playoff_pass_completions ?>;
var playoff_pass_completions_break = <?php echo $playoff_pass_completions_break ?>;
var playoff_pass_yards = <?php echo $playoff_pass_yards ?>;
var playoff_pass_yards_break = <?php echo $playoff_pass_yards_break ?>;
var playoff_pass_tds = <?php echo $playoff_pass_tds ?>;
var playoff_pass_tds_break = <?php echo $playoff_pass_tds_break ?>;
var playoff_rush_yards = <?php echo $playoff_rush_yards ?>;
var playoff_rush_yards_break = <?php echo $playoff_rush_yards_break ?>;
var playoff_rush_tds = <?php echo $playoff_rush_tds ?>;
var playoff_rush_tds_break = <?php echo $playoff_rush_tds_break ?>;
var playoff_total_rec = <?php echo $playoff_total_rec ?>;
var playoff_total_rec_break = <?php echo $playoff_total_rec_break ?>;
var playoff_rec_yards = <?php echo $playoff_rec_yards ?>;
var playoff_rec_yards_break = <?php echo $playoff_rec_yards_break ?>;
var playoff_rec_tds = <?php echo $playoff_rec_tds ?>;
var playoff_rec_tds_break = <?php echo $playoff_rec_tds_break ?>;


function displaySeasonData() {

if (pos == "QB") {
  document.getElementById("career-comp-link").classList.add('unclicked-tweet');
  document.getElementById("career-pass-yards-link").classList.add('unclicked-tweet');
  document.getElementById("career-pass-td-link").classList.add('unclicked-tweet');
  document.getElementById("season-comp-link").classList.remove('unclicked-tweet');
  document.getElementById("season-pass-yards-link").classList.remove('unclicked-tweet');
  document.getElementById("season-pass-td-link").classList.remove('unclicked-tweet');
  //Display passing completions
      document.getElementById('passCmps').innerHTML = season_pass_completions;
      document.getElementById('passCmpsRecord').innerHTML = season_pass_completions_break;
  //Display passing yards
      document.getElementById('passYards').innerHTML = season_pass_yards;
      document.getElementById('passYardsRecord').innerHTML = season_pass_yards_break;
  //Display passing touchdowns
      document.getElementById('passTDs').innerHTML = season_pass_tds;
      document.getElementById('passTDsRecord').innerHTML = season_pass_tds_break;
} else if (pos == "RB") {
      document.getElementById("career-rush-yards-link").classList.add('unclicked-tweet');
      document.getElementById("career-rush-td-link").classList.add('unclicked-tweet');
      document.getElementById("season-rush-yards-link").classList.remove('unclicked-tweet');
      document.getElementById("season-rush-td-link").classList.remove('unclicked-tweet');
  //Display rushing stats
        document.getElementById('rushYards').innerHTML = season_rush_yards;
        document.getElementById('rushYardsRecord').innerHTML = season_rush_yards_break;
  //Display rushing touchdowns
      document.getElementById('rushTDs').innerHTML = season_rush_tds;
      document.getElementById('rushTDsRecord').innerHTML = season_rush_tds_break;
    }else if (pos == "WR" || pos == "TE") {
      document.getElementById("career-rec-link").classList.add('unclicked-tweet');
      document.getElementById("career-rec-yards-link").classList.add('unclicked-tweet');
      document.getElementById("career-rec-td-link").classList.add('unclicked-tweet');
      document.getElementById("season-rec-link").classList.remove('unclicked-tweet');
      document.getElementById("season-rec-yards-link").classList.remove('unclicked-tweet');
      document.getElementById("season-rec-td-link").classList.remove('unclicked-tweet');
  //Display Receiving stats
        document.getElementById('recTotal').innerHTML = season_total_rec;
        document.getElementById('recTotalRecord').innerHTML = season_total_rec_break;
  //Display Receiving stats
        document.getElementById('recYards').innerHTML = season_rec_yards;
        document.getElementById('recYardsRecord').innerHTML = season_rec_yards_break;
  //Display Receiving touchdowns
      document.getElementById('recTDs').innerHTML = season_rec_tds;
      document.getElementById('recTDsRecord').innerHTML = season_rec_tds_break;
}
}
function displayCareerData() {
  
if (pos == "QB") {
  document.getElementById("season-comp-link").classList.add('unclicked-tweet');
  document.getElementById("season-pass-yards-link").classList.add('unclicked-tweet');
  document.getElementById("season-pass-td-link").classList.add('unclicked-tweet');
  document.getElementById("career-comp-link").classList.remove('unclicked-tweet');
  document.getElementById("career-pass-yards-link").classList.remove('unclicked-tweet');
  document.getElementById("career-pass-td-link").classList.remove('unclicked-tweet');
    //Display passing completions
    document.getElementById('passCmps').innerHTML = career_pass_completions;
      document.getElementById('passCmpsRecord').innerHTML = career_pass_completions_break;
  //Display passing stats
      document.getElementById('passYards').innerHTML = career_pass_yards;
      document.getElementById('passYardsRecord').innerHTML = career_pass_yards_break;
  //Display passing touchdowns
      document.getElementById('passTDs').innerHTML = career_pass_tds;
      document.getElementById('passTDsRecord').innerHTML = career_pass_tds_break;
} else if (pos == "RB") {
      document.getElementById("career-rush-yards-link").classList.remove('unclicked-tweet');
      document.getElementById("career-rush-td-link").classList.remove('unclicked-tweet');
      document.getElementById("season-rush-yards-link").classList.add('unclicked-tweet');
      document.getElementById("season-rush-td-link").classList.add('unclicked-tweet');
  //Display rushing stats
        document.getElementById('rushYards').innerHTML = career_rush_yards;
        document.getElementById('rushYardsRecord').innerHTML = career_rush_yards_break;
  //Display rushing touchdowns
      document.getElementById('rushTDs').innerHTML = career_rush_tds;
      document.getElementById('rushTDsRecord').innerHTML = career_rush_tds_break;
} else if (pos == "WR" || pos == "TE") {
      document.getElementById("career-rec-link").classList.remove('unclicked-tweet');
      document.getElementById("career-rec-yards-link").classList.remove('unclicked-tweet');
      document.getElementById("career-rec-td-link").classList.remove('unclicked-tweet');
      document.getElementById("season-rec-link").classList.add('unclicked-tweet');
      document.getElementById("season-rec-yards-link").classList.add('unclicked-tweet');
      document.getElementById("season-rec-td-link").classList.add('unclicked-tweet');
  //Display Receiving stats
        document.getElementById('recTotal').innerHTML = career_total_rec;
        document.getElementById('recTotalRecord').innerHTML = career_total_rec_break;
  //Display Receiving stats
        document.getElementById('recYards').innerHTML = career_rec_yards;
        document.getElementById('recYardsRecord').innerHTML = career_rec_yards_break;
  //Display Receiving touchdowns
      document.getElementById('recTDs').innerHTML = career_rec_tds;
      document.getElementById('recTDsRecord').innerHTML = career_rec_tds_break;
}
 }
 function displayPlayoffData() {
   
   
if (pos == "QB") {
    //Display passing completions
      document.getElementById('passCmps').innerHTML = playoff_pass_completions;
      document.getElementById('passCmpsRecord').innerHTML = playoff_pass_completions_break;
    //Display passing stats
       document.getElementById('passYards').innerHTML = playoff_pass_yards;
       document.getElementById('passYardsRecord').innerHTML = playoff_pass_yards_break;
   //Display passing touchdowns
       document.getElementById('passTDs').innerHTML = playoff_pass_tds;
       document.getElementById('passTDsRecord').innerHTML = playoff_pass_tds_break;
  } else if (pos == "RB") {
    //Display rushing stats
          document.getElementById('rushYards').innerHTML = playoff_rush_yards;
          document.getElementById('rushYardsRecord').innerHTML = playoff_rush_yards_break;
    //Display rushing touchdowns
        document.getElementById('rushTDs').innerHTML = playoff_rush_tds;
        document.getElementById('rushTDsRecord').innerHTML = playoff_rush_tds_break;
  } else if (pos == "WR" || pos == "TE") {
    //Display Receiving stats
          document.getElementById('recTotal').innerHTML = playoff_total_rec;
          document.getElementById('recTotalRecord').innerHTML = playoff_total_rec_break;
    //Display Receiving stats
          document.getElementById('recYards').innerHTML = playoff_rec_yards;
          document.getElementById('recYardsRecord').innerHTML = playoff_rec_yards_break;
    //Display Receiving touchdowns
        document.getElementById('recTDs').innerHTML = playoff_rec_tds;
        document.getElementById('recTDsRecord').innerHTML = playoff_rec_tds_break;
  }
}

function sendTweet() {
  var myPath = 'https://twitter.com/intent/tweet?text=$player_twitter%20%20$player_firstname%20$player_lastname%20is%20$career_rec_yards_break%20$stat_length%20receiving%20yards%20away%20from%20#SMASHINGTHERECORD';
  var link = document.getElementById('send-tweet');
  link.href = myPath;
  
}

</script>

</html>           




