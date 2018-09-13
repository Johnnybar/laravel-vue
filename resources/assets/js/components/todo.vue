<!-- <template>

</template> -->

<script>
import axios from 'axios';

    export default {
      name:'todo',
      props: ['title'],
      template:`
      <div class="container">
        <table class="table table-striped mt-4">
      <thead>
        <tr>
          <th scope="col">User Id</th>
          <th scope="col">Id</th>
          <th scope="col">Title</th>
          <th scope="col">Completed </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="todo in todos" :key="todo.id">
          <th scope="row">1</th>
          <td>{{todo.id}}</td>
          <td>{{todo.title}}</td>
          <td>{{todo.completed}}</td>
        </tr>

      </tbody>
    </table>
    <h4>{{title}}</h4>
      </div>
      `,
        data(){
          return {
            todos: []
          }
      },
      created(){
        axios.get('https://jsonplaceholder.typicode.com/todos').then(todos=>{
          this.todos = todos.data.splice(0, 10)
        })
      },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
