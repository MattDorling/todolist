<script>
export default {
    data: function () {
        return {
            todo: {
                desc: "",
            }
        }
    },
    methods: {
        addTodo() {
            // don't submit empty todo
            if (this.todo.desc === '') {
                return;
            }

            // post new todo to the api
            axios.post('api/todos',
                this.todo
            )
                .then(response => {
                    this.todo.desc = "";
                    this.$emit('reloadtodos');
                })
                .catch(error => {
                    console.log(error);
                })
        }
    }
}
</script>

<template>
    <form v-on:submit.prevent="" class="flex">
        <input placeholder="Enter a new task..." class='w-full rounded border-2 border-black hover:border-gray-400 px-2' type="text" v-model="todo.desc" />
        <button @click="addTodo()" :class="[
            'flex-auto ml-4 p-2 bg-white rounded border-2 border-gray-900',
            todo.desc ? 'text-black cursor-pointer border-black bg-gray-200 hover:shadow-inner' : 'text-gray-400 border-gray-400 cursor-not-allowed'
        ]">
            Add
        </button>
    </form>
</template>