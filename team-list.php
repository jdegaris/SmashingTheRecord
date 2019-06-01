<div class="wrapper">
<?php
include "includes/header.php";
$per_div = 11;
?>
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
</div>