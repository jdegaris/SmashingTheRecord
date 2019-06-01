<?php 
if($career_pass_completions_break >= 1) {
  $tweet_career_pass_completions = "$player_twitter $player_firstname $player_lastname is $career_pass_completions_break career completions away from #SMASHINGTHERECORD held by @drewbrees #goodluck $game_hashtag @$player_team ";
} else {
  $tweet_career_pass_completions = "$player_twitter $player_firstname $player_lastname is #SMASHINGTHERECORD with $career_pass_completions career completions and counting #nfl #RecordSmasher @$player_team";
}
if($career_pass_yards_break >= 1) {
  $tweet_career_pass_yards = "$player_twitter $player_firstname $player_lastname is $career_pass_yards_break career yards away from #SMASHINGTHERECORD held by @drewbrees #goodluck $game_hashtag @$player_team ";
} else {
  $tweet_career_pass_yards = "$player_twitter $player_firstname $player_lastname is #SMASHINGTHERECORD with $career_pass_yards career yards and counting #nfl #RecordSmasher @$player_team";
}

?>
<div id="stats">    
  <h3 class="stat-cat <?php echo $player_team .'1'?>">PASS COMPLETIONS</h3>
  <div class="season-tweet-link" id="season-comp-link">
  <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=<?php echo $player_twitter ?>%20This%20season%20<?php echo $player_firstname ?>%20<?php echo $player_lastname ?>%20is%20<?php echo $season_pass_completions_break ?>%20completions%20away%20from%20#SMASHINGTHERECORD %20held%20by%20Drew%20Brees%20 #goodluck <?php echo $game_hashtag ?> #<?php echo $player_team ?>" data-size="large">
  Tweet</a> 
  </div>
  <div class="career-tweet-link unclicked-tweet" id="career-comp-link">
  <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=<?php echo $tweet_career_pass_completions ?>" data-size="large"> Tweet</a> 
  </div>
    <div class="stat">
      <ul>
        <li><div class="stat-title <?php echo $player_team .'2'?>">Passing Comp: </div><div id="passCmps" class="stat-result <?php echo $player_team .'1'?>"><?php echo number_format($season_pass_completions) ?></div>
        </li>
        <li><div class="stat-title <?php echo $player_team .'2'?>">Comp to Record: </div><div id="passCmpsRecord" class="stat-result <?php echo $player_team .'1'?>"><?php echo number_format($season_pass_completions_break) ?></div>
        </li>
      </ul>
      
    </div>
  <h3 class="stat-cat <?php echo $player_team .'1'?>">PASSING YARDS</h3>
  <div class="season-tweet-link" id="season-pass-yards-link">
  <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=<?php echo $player_twitter ?>%20This%20season%20<?php echo $player_firstname ?>%20<?php echo $player_lastname ?>%20is%20<?php echo $season_pass_yards_break ?>%20yards%20away%20from%20#SMASHINGTHERECORD %20held%20by%20Peyton%20Manning%20 #goodluck <?php echo $game_hashtag ?> #<?php echo $player_team ?>" data-size="large">
  Tweet</a> 
  </div>
  <div class="career-tweet-link unclicked-tweet" id="career-pass-yards-link">
  <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=<?php echo $tweet_career_pass_yards ?>" data-size="large"> Tweet</a> 
  </div>
    <div class="stat">
      <ul>
        <li><div class="stat-title <?php echo $player_team .'2'?>">Passing Yards: </div><div id="passYards" class="stat-result <?php echo $player_team .'1'?>"><?php echo number_format($season_pass_yards) ?></div>
        </li>
        <li><div class="stat-title <?php echo $player_team .'2'?>">Yd's to Record: </div><div id="passYardsRecord" class="stat-result <?php echo $player_team .'1'?>"><?php echo number_format($season_pass_yards_break) ?></div>
        </li>
      </ul>
    </div>


  <h3 class="stat-cat <?php echo $player_team .'1'?>">Passing TD's</h3>
  <div class="season-tweet-link" id="season-pass-td-link">
  <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=<?php echo $player_twitter ?>%20This%20season%20<?php echo $player_firstname ?>%20<?php echo $player_lastname ?>%20is%20<?php echo $season_pass_tds_break ?>%20TD's%20away%20from%20#SMASHINGTHERECORD %20held%20by%20Peyton%20Manning%20#goodluck <?php echo $game_hashtag ?> #<?php echo $player_team ?>" data-size="large">
  Tweet</a> 
  </div>
  <div class="career-tweet-link unclicked-tweet" id="career-pass-td-link">
  <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=<?php echo $player_twitter ?>%20%20<?php echo $player_firstname ?>%20<?php echo $player_lastname ?>%20is%20<?php echo $career_pass_tds_break ?>%20career%20TD's%20away%20from%20#SMASHINGTHERECORD %20held%20by%20Peyton%20Manning%20 #goodluck <?php echo $game_hashtag ?> #<?php echo $player_team ?>" data-size="large">
  Tweet</a> 
  </div>
    <div class="stat">
      <ul>
        <li><div class="stat-title <?php echo $player_team .'2'?>">Passing TD's: </div> <div id="passTDs" class="stat-result <?php echo $player_team .'1'?>"><?php echo number_format($season_pass_tds) ?></div>
        </li>
        <li><div class="stat-title <?php echo $player_team .'2'?>">TD's to Record: </div> <div id="passTDsRecord" class="stat-result <?php echo $player_team .'1'?>"><?php echo number_format($season_pass_tds_break) ?> </div>
        </li>
      </ul>
    </div>  



</div>


