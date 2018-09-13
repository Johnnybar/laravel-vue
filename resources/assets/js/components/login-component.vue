
<script>
import axios from 'axios';
import VueSession from 'vue-session'
Vue.use(VueSession)

export default {
  name: 'form-component',
  template: `
  <div>
  <form class="form-inline" @submit.prevent="handleSubmit">
  <label class="sr-only" for="inlineFormInput">Email</label>
  <input type="text" v-model="user.username" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="example@email.com">
  <br/>
  <br/>
  <label class="sr-only" for="inlineFormInputGroup">Password</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-0">

  <input type="text" v-model="user.password" class="form-control" id="inlineFormInputGroup" placeholder="Password">
  </div>
  <br/>
  <br/>

  <button type="submit" class="btn btn-primary">Log In</button>
  </form>
  <p v-if="this.user.loggedIn === false">Credentials incorrect. Please try again</p>
  </div>
  `,
  data() {
    return {
      user: {
        username: '',
        password: '',
        loggedIn: ''
      }
    }
  },
  methods: {
    handleSubmit() {
      axios.post('/login-data', this.user).then(resp => {
        console.log(resp.data);
        if (resp.data === true) {
          this.user.loggedIn = true;
          this.$session.set('user', this.user.username)
          window.location = '/'
        } else if (resp.data === false) {
          this.user.username = '';
          this.user.password = '';
          this.user.loggedIn = false
        }
      })
    }

  }
}
</script>

<style lang="css">
</style>
