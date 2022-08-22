<script>
import AddTodoForm from "./AddTodoForm.vue"
import TodoList from "./TodoList.vue"

export default {
    components: { AddTodoForm, TodoList },
    data: function () {
        return {
            todos: []
        }
    },
    methods: {
        getTodos() {
            // get all todo items from the database
            axios.get('api/todos')
                .then(response => {
                    this.todos = response.data;
                })
                .catch(error => {
                    console.log(error);
                })
        }

    },
    created() {
        this.getTodos();
    }
}
</script>

<template>
    <div id="app" class="mx-auto mt-8 w-4/5 max-w-xl md:w-2/3 xl:w-1/2 bg-gray-100 shadow-xl rounded-xl p-4">
        <div>
            <h2 id="title" class="p-4 text-center text-xl">To Do List</h2>
            <AddTodoForm v-on:reloadtodos="getTodos()" />
        </div>
        <TodoList :todos="todos" v-on:reloadtodos="getTodos()" />
    </div>
</template>
