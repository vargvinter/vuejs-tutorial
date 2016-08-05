Vue.component('message', {
    template: '<input v-model="message" @keyup.enter="storeMessage">',
    data: function() {
        return { message: '' }
    },
    methods: {
        storeMessage: function() {
            console.log('Storing ' + this.message);

            this.$dispatch('new-message', this.message);

            this.message = '';
        }
    }
});

new Vue({
    el: 'body',

    events: {
        'new-message': function(message) {
            console.log('I sposób: Parent is handling ' + message);
        }
    },

    methods: {
        handleNewMessage: function(message) {
            console.log('II sposób: Parent is handling ' + message);
        }
    }
});