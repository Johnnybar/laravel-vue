
<script>
import axios from 'axios';
import VueSession from 'vue-session'
Vue.use(VueSession)

    export default {
      name:'posts-component',
      props: ['title'],
      template:`
      <div v-if="this.loggedIn === true" class="container">
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
            todos: [],
            loggedIn: ''
          }
      },
      created(){
      },
      mounted(){

        // console.log('this is session',this.$session.getAll());
        axios.get('https://jsonplaceholder.typicode.com/todos').then(todos=>{
          this.todos = todos.data.splice(0, 10)
        })
        let userDetails = this.$session.getAll().user;
        if(userDetails === undefined) {
          this.loggedIn = false;
          console.log('no user', this.loggedIn);
          window.location = '/';
        }
        else{
        this.user = userDetails;
        this.loggedIn = true;
        console.log('yes user', this.user);
       }
      }
    }
</script>
