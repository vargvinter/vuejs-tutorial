<!DOCTYPE html>
<html>
<head>
    <title>Vue.js</title>
    <link rel="stylesheet" href="css/main.css">
    <style>
        .completed {
            text-decoration: line-through;
        }
    </style>
</head>
<body>

    <div id="app">
        <tasks :list="tasks"></tasks>
    </div>

    <template id="tasks-template">
        <ul>
            <li
                    :class="{ completed : task.completed }"
                    v-for="task in list"
                    @click="task.completed = !task.completed"
            >
            @{{ task.body }}
            </li>
        </ul>
    </template>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
    <script src="js/08.js"></script>
</body>
</html>
