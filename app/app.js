let leaderboard = document.getElementById('league-leaders'),
    closeButton = document.getElementById('close-overlay'),
    passingStatList = document.getElementById('show-passing-list'),
    passingCompletions = document.getElementById('passing-completions'),
    passingYards = document.getElementById('passing-yards'),
    passingTds = document.getElementById('passing-touchdowns'),
    rushingStatList = document.getElementById('show-rushing-list'),
    rushingYards = document.getElementById('rushing-yards'),
    rushingTds = document.getElementById('rushing-touchdowns'),
    receivingStatList = document.getElementById('show-receiving-list'),
    receivingReceptions = document.getElementById('receiving-receptions'),
    receivingYards = document.getElementById('receiving-yards'),
    receivingTds = document.getElementById('receiving-touchdowns')
;

function reset() {
    document.getElementById('display-passing-yards').style.display = "none";
    document.getElementById('display-passing-completions').style.display = "none";
    document.getElementById('display-passing-touchdowns').style.display = "none";
    document.getElementById('display-rushing-yards').style.display = "none";
    document.getElementById('display-rushing-touchdowns').style.display = "none";
    document.getElementById('display-receiving-yards').style.display = "none";
    document.getElementById('display-receiving-receptions').style.display = "none";
    document.getElementById('display-receiving-touchdowns').style.display = "none";

}


leaderboard.addEventListener("click", function(){
    reset();
    document.body.style.overflow="hidden";
    document.getElementById('leaderboard-overlay').style.display = "block";
    document.getElementById('display-passing-yards').style.display = "block";
    document.getElementById('passing-stats').style.display = "none";

    window.scrollTo(0, 0);
});

closeButton.addEventListener("click", function(){
    document.body.style.overflow="auto";
    document.getElementById('leaderboard-overlay').style.display = "none";
});


//PASSING LEADERBOARD CLICKS
passingStatList.addEventListener("click", function(){
    document.getElementById('passing-stats').style.display = "flex";
    
});

passingCompletions.addEventListener("click", function(){
    reset();
    document.getElementById('display-passing-completions').style.display = "block";
    document.getElementById('passing-stats').style.display = "none";
    });
passingYards.addEventListener("click", function(){
    reset();
    document.getElementById('display-passing-yards').style.display = "block";
    document.getElementById('passing-stats').style.display = "none";
    });
passingTds.addEventListener("click", function(){
    reset();
    document.getElementById('display-passing-touchdowns').style.display = "block";
    document.getElementById('passing-stats').style.display = "none";
    });


//RUSHING LEADERBOARD CLICKS
rushingStatList.addEventListener("click", function(){
        document.getElementById('rushing-stats').style.display = "flex";
    });    
rushingYards.addEventListener("click", function(){
    reset();
    document.getElementById('display-rushing-yards').style.display = "block";
    document.getElementById('rushing-stats').style.display = "none";
    });
rushingTds.addEventListener("click", function(){
    reset();
    document.getElementById('display-rushing-touchdowns').style.display = "block";
    document.getElementById('rushing-stats').style.display = "none";
    });

    //RECEIVING LEADERBOARD CLICKS
receivingStatList.addEventListener("click", function(){
    document.getElementById('receiving-stats').style.display = "block";
    });

receivingReceptions.addEventListener("click", function(){
    reset();
    document.getElementById('display-receiving-receptions').style.display = "block";
    document.getElementById('receiving-stats').style.display = "none";
    });
receivingYards.addEventListener("click", function(){
    reset();
    document.getElementById('display-receiving-yards').style.display = "block";
    document.getElementById('receiving-stats').style.display = "none";
    });
receivingTds.addEventListener("click", function(){
    reset();
    document.getElementById('display-receiving-touchdowns').style.display = "block";
    document.getElementById('receiving-stats').style.display = "none";
    });