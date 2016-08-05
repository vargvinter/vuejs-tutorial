<!DOCTYPE html>
<html>
<head>
    <title>Vue.js</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div id="app">
    <form action="03" method="post" @submit.prevent="handleIt">
        {{ csrf_field() }}

        <button type="submit">Submit!</button>

        <button @click="updateCount">Increment counter @{{ count }}</button>
    </form>

    <pre>
        @{{ $data | json }}
    </pre>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            count: 0
        },
        methods: {
            handleIt: function(/*e*/) {
                //alert('Handled');
                //e.preventDefault();
            },
            updateCount: function() {
                this.count += 1;
            }
        }
    });
</script>
</body>
</html>
