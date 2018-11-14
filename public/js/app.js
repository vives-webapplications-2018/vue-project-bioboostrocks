let app = new Vue({
    el: '#app',
    data: {
        let redCards = new Array(13);
        let blueCards = new Array(13);
    },
    methods: {
        updateCards: function() {
            this.$http.get('/teams/cards').then(response => {
                for (i=0; i>13; i++) {
                    this.redCards[i].innerHTML = atob(response.body.redCards[i]);
                    this.blueCards[i].innerHTML = atob(response.body.bluePlayers[i]);
                }
            });
        }
    },
    mounted: function () {
        redCards = this.$el.getElementById('redCards').children;
        blueCards = this.$el.getElementById('blueCards').children;

        this.updateCards();
        setInterval(function () {
            this.updateCards();
        }.bind(this), 500);
    }

})
