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
        <h1>
            My tasks <span v-show="remaining">(@{{ remaining }})</span>
        </h1>

        {{--pokaż listę <ul> jeśli tablica nie jest pusta--}}
        <ul v-show="list.length">
            <li :class="{ completed : task.completed }"
                v-for="task in list"
                @click="task.completed = !task.completed"
            >
                @{{ task.body }}

                <strong @click="deleteTask(task)">X</strong>
            </li>
        </ul>

        {{--W przeciwnym wypadku...--}}
        <p v-else>No tasks yet.</p>

        <button @click="clearCompleted">Clear completed</button>
    </template>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
    <script src="js/09.js"></script>
</body>
</html>
