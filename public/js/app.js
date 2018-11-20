window.onload = function() {
    let app = new Vue({
        el: '#app',
        methods: {
            updateCards: function() {
                this.$http.get('/teams/cards').then(response => {
                    for (i=0; i<11; i++) {
                        if (document.getElementById('redCards').children[i].innerHTML == "") {
                            document.getElementById('redCards').children[i].innerHTML = atob(response.body.redCards[i]);
                        }
                        if (document.getElementById('blueCards').children[i].innerHTML == "") {
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
            }.bind(this), 1000);
        }
    
    })
}
