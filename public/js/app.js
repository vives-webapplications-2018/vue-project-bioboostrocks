var app;

window.onload = function() {
    app = new Vue({
        el: '#app',
        methods: {
            updateCards: function() {
                this.$http.get('/teams/cards').then(response => {
                    console.log(response.body);
                    for (i=0; i<11; i++) {
                        if (document.getElementById('redCards').children[i].innerHTML == "" && response.body.redCards[i]) {
                            document.getElementById('redCards').children[i].innerHTML = atob(response.body.redCards[i]);
                        }
                        if (document.getElementById('blueCards').children[i].innerHTML == "" && response.body.blueCards[i]) {
                            document.getElementById('blueCards').children[i].innerHTML = atob(response.body.blueCards[i]);
                        }
                    }
                });
            }
        },
        mounted: function () {
            this.updateCards();
            setInterval(function () {
                this.updateCards();
            }.bind(this), 500);
        }
    
    })
}
