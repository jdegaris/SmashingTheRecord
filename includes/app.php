<script type="text/javascript">

//*****SEASON STATS ********
//Passing Stats
    var bbPassYards = 3687;
    var passYardsRecord = 5477;
    var bbPassYardRecord = passYardsRecord - bbPassYards;
//Rushing Stats
    var bbRushYards = 322;
    var rushYardsRecord = 2105;
    var bbRushYardRecord = rushYardsRecord - bbRushYards;
//Passing Touchdowns
    var bbPassTd = 21;
    var passTdRecord = 55;
    var bbPassTdRecord = passTdRecord - bbPassTd;
//Rushing Touchdowns
    var bbRushTd = 2;
    var rushTdRecord = 28;
    var bbRushTdRecord = rushTdRecord - bbRushTd;


function displayData() {
  //Display passing stats
      document.getElementById('bbPassYards').innerHTML = bbPassYards;
      document.getElementById('passYardsRecord').innerHTML = bbPassYardRecord;
  //Display rushing stats
      document.getElementById('bbRushYards').innerHTML = bbRushYards;
      document.getElementById('rushYardsRecord').innerHTML = bbRushYardRecord;
  //Display passing touchdowns
      document.getElementById('bbPassingTD').innerHTML = bbPassTd;
      document.getElementById('passingTdRecord').innerHTML = bbPassTdRecord;
  //Display rushing touchdowns
      document.getElementById('bbRushTD').innerHTML = bbRushTd;
      document.getElementById('rushTdRecord').innerHTML = bbRushTdRecord;
}
//
window.onload = function start(){
displayData();
};


function select(stat) {

if (stat === "career") {

//********CAREER STATS**********
//Passing Stats
     bbPassYards = 14928;
     passYardsRecord = 71940;
     bbPassYardRecord = passYardsRecord - bbPassYards;
//Rushing Stats
     bbRushYards = 1410;
     rushYardsRecord = 18355;
     bbRushYardRecord = rushYardsRecord - bbRushYards;
//Passing Touchdowns
     bbPassTd = 90;
     passTdRecord = 539;
     bbPassTdRecord = passTdRecord - bbPassTd;
//Rushing Touchdowns
     bbRushTd = 7;
     rushTdRecord = 164;
     bbRushTdRecord = rushTdRecord - bbRushTd;

displayData();

}  else if (stat ==="post") {
    //********POST-SEASON STATS**********
    //Passing Stats
         bbPassYards = 301;
         passYardsRecord = 9431;
         bbPassYardRecord = passYardsRecord - bbPassYards;
    //Rushing Stats
         bbRushYards = 123;
         rushYardsRecord = 2105;
         bbRushYardRecord = rushYardsRecord - bbRushYards;
    //Passing Touchdowns
         bbPassTd = 3;
         passTdRecord = 66;
         bbPassTdRecord = passTdRecord - bbPassTd;
    //Rushing Touchdowns
         bbRushTd = 0;
         rushTdRecord = 19;
         bbRushTdRecord = rushTdRecord - bbRushTd;

displayData();
} else  {
  bbPassYards = 3687;
  passYardsRecord = 5477;
  bbPassYardRecord = passYardsRecord - bbPassYards;
//Rushing Stats
  bbRushYards = 322;
  rushYardsRecord = 2105;
  bbRushYardRecord = rushYardsRecord - bbRushYards;
//Passing Touchdowns
  bbPassTd = 21;
  passTdRecord = 55;
  bbPassTdRecord = passTdRecord - bbPassTd;
//Rushing Touchdowns
  bbRushTd = 2;
  rushTdRecord = 28;
  bbRushTdRecord = rushTdRecord - bbRushTd;
  displayData();
}


  };

</script>
