var store = {
    state: {
        username: 'Joe'
    },
    updateUsername: function(username) {
        this.state.username = username;
    }
};

new Vue({
    el: 'body',

    data: {
        misc: 'data',
        shared: store
    },

    components: {
        notification: {
            data: function() {
                return store.state;
            },
            template: '<h2>{{ username }}: <slot></slot></h2>'
        }
    }
});