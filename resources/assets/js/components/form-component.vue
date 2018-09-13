
<script>
import axios from 'axios';
import VueSession from 'vue-session'
Vue.use(VueSession)

export default {
  name: 'form-component',
  template: `
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
  <div class="form-check mb-2 mr-sm-2 mb-sm-0">
  <label class="form-check-label">
  <input class="form-check-input" type="checkbox" v-model="user.checkbox"> Remember me
  </label>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  `,
  data() {
    return {
      user: {
        username: '',
        password: '',
        checkbox: false
      }
    }
  },
  methods: {
    handleSubmit() {
      axios.post('/form-data', this.user).then(resp => {
        this.user.username = '';
        this.user.password = '';
        this.user.checkbox = false;
        this.$session.set('user', resp.data.username)
        // this.$session.set('user',resp.data.username)
        window.location = '/'

      })
    }

  }
}
</script>

<style lang="css">
</style>
