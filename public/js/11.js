Vue.component('tasks', {
    template: '#tasks-template',
    data: function() {
        return {
            list: []
        };
    },
    created: function() {
        this.fetchTaskList();
    },
    methods: {
        fetchTaskList: function() {
            this.$http.get('api/tasks')
                .then(function(tasks) {
                    this.list = tasks.data;
                }.bind(this));
        },
        deleteTask: function(task) {
            this.list.$remove(task);
        }
    }
});

new Vue({
    el: 'body'
});