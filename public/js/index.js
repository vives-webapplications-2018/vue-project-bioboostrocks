window.onload = function() {
    let app = new Vue({
        el: '#app',
        data: {
            redPlayers: 42,
            bluePlayers: 21
        },
        methods: {
            getPlayerCount: function () {
                this.$http.get('/playerCount').then(response => {
                    this.redPlayers = response.body.redPlayers;
                    this.bluePlayers = response.body.bluePlayers;
                });
            }
        },
        mounted: function () {
            this.getPlayerCount();
            setInterval(function () {
                this.getPlayerCount();
            }.bind(this), 1000);
        }
    });
}
/* 
var blueHitCounter = 0;
var blueStandCounter = 0;
var redStandCounter = 0;
var redHitCounter = 0; */

/* function blueStand() {
    blueStandCounter += 1;
    document.getElementById("blueStandCounter").innerHTML = blueStandCounter;
};

function blueHit() {
    blueHitCounter += 1;
    document.getElementById("blueHitCounter").innerHTML = blueHitCounter;
};

function redStand() {
    redStandCounter += 1;
    document.getElementById("redStandCounter").innerHTML = redStandCounter;
};

function redHit() {
    redHitCounter += 1;
    document.getElementById("redHitCounter").innerHTML = redHitCounter;
}; */

