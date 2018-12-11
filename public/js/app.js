var app;

window.onload = function() {
    app = new Vue({
        el: '#app',
        data: {
            redScore: 0,
            blueScore: 0,
            gameId: -1
        },
        methods: {
            updateCards: function() {
                this.$http.get('/teams/cards').then(response => {
                    for (i=0; i<11; i++) {
                        if (document.getElementById('redCards').children[i].innerHTML == "" && response.body.redCards[i]) {
                            document.getElementById('redCards').children[i].innerHTML = atob(response.body.redCards[i]);
                        }
                        if (document.getElementById('blueCards').children[i].innerHTML == "" && response.body.blueCards[i]) {
                            document.getElementById('blueCards').children[i].innerHTML = atob(response.body.blueCards[i]);
                        }
                    }
                });
            },
            updateStats: function() {
                this.$http.get('/teams/stats').then(response => {
                    if (response.body.red.stand == 1) {
                        if (!document.getElementById('redButtons').children[0].classList.contains("disabled")) {
                            document.getElementById('redButtons').children[0].className += ' disabled';
                            document.getElementById('redButtons').children[1].className += ' disabled';
                        }
                    }
                    if (response.body.blue.stand == 1) {
                        if (!document.getElementById('blueButtons').children[0].classList.contains("disabled")) {
                            document.getElementById('blueButtons').children[0].className += ' disabled';
                            document.getElementById('blueButtons').children[1].className += ' disabled';
                        }
                    }
                    app.redScore = response.body.red.score;
                    app.blueScore = response.body.blue.score;
                    if (app.gameId == -1) {
                        app.gameId = response.body.gameId;
                        this.showToast(app.redScore, app.blueScore);
                    } else if (response.body.gameId != app.gameId) {
                        location.reload();
                    }
                })
            },
            showToast: function(redScore, blueScore) {
                M.toast({html: 'Red ' + redScore + ' - ' + blueScore + ' Blue', classes: 'grey darken-3'});
            }
        },
        mounted: function () {
            this.updateCards();
            this.updateStats();
            setInterval(function () {
                this.updateCards();
            }.bind(this), 500);
            setInterval(function () {
                this.updateStats();
            }.bind(this), 500);
        }
    })
}
