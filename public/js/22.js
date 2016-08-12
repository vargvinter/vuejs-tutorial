const FetchesUser = {
    methods: {
        fetchUser: function() {
            alert('fetch user');
        }
    }
};

new Vue({
    el: 'body',

    ready: function() {
        this.fetchUser();
    },

    mixins: [FetchesUser]
});