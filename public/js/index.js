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
