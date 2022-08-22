<script>
import Todo from "./Todo.vue";

export default {
    props: ['todos'],
    components: {
        Todo
    }
}
</script>

<template>
    <div class="space-y-0.5 mt-4 bg-gray-400">
        <div v-for="(todo, index) in todos" :key="index">
            <Todo :todo="todo" v-on:todoupdated="$emit('reloadtodos')" />
        </div>
    </div>
</template>
