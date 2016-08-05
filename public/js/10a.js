Vue.component('tasks', {
    template: '#tasks-template',
    data: function() {
        return {
            list: []
        };
    },
    ready: function() {
        $.getJSON('api/tasks', function(data) {
            this.list = data;
            // bind(this) bo 'this' ma wskazywać na component, a nie na funkcję w $.getJSON
        }.bind(this));
    },
    methods: {
        deleteTask: function(task) {
            this.list.$remove(task);
        }
    }
});

new Vue({
    el: 'body'
});