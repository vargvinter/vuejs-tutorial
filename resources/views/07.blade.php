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

    <ul>
        <li
                :class="{ completed : task.completed }"
                v-for="task in tasks"
                @click="toggleCompletedFor(task)"
        >
            @{{ task.body }}
        </li>
    </ul>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
<script src="js/07.js"></script>
</body>
</html>
