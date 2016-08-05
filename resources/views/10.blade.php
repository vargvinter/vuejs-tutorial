<!DOCTYPE html>
<html>
<head>
    <title>Vue.js</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

    <div class="container">

        <tasks :list="{{ $tasks }}"></tasks>

    </div>

    <template id="tasks-template">
        <h1>My tasks</h1>
        <ul class="list-group">
                <li class="list-group-item" v-for="task in list">
                    @{{ task.body }}
                </li>
        </ul>
    </template>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
    <script src="js/10.js"></script>
</body>
</html>
