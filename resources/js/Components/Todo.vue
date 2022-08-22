<script>
export default {
    props: ['todo'],
    methods: {
        updateTodo() {
            // send updated todo to api
            axios.put('api/todos/' + this.todo.id,
                this.todo
            )
                .then(response => {
                    if (response.status === 200) {
                        // signal to parents reload the form
                        this.$emit('todoupdated');
                    }
                })
                .catch(error => {
                    console.log(error);
                })
        },
        deleteTodo() {
            axios.delete('api/todos/' + this.todo.id)
                .then(response => {
                    if (response.status === 204) {
                        // signal to parents reload the form
                        this.$emit('todoupdated');
                    }
                })
                .catch(error => {
                    console.log(error);
                }
                )
        },
    }
}
</script>


<template>
    <div class="space-x-2 py-2 bg-gray-100 flex">
        <input type="checkbox" @change="updateTodo()" v-model="todo.done" true-value="1" false-value="0" />
        <span :class="[todo.done ? 'line-through text-gray-400' : '', 'w-full']">{{ todo.desc }}</span>
        <button @click="deleteTodo()" :class="['text-red-600 opacity-50 hover:opacity-100']">
            Delete
        </button>
    </div>
</template>

