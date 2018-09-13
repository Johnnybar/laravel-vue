
<script>
import VueSession from 'vue-session'
Vue.use(VueSession)

export default {
  name: 'home-component',

  data() {
    return {
      user: '',
      loggedIn: false,
    }
  },
  template: `
  <div>
  <span v-if="loggedIn === true">Welcome, you are registered, {{user}}</span>
  <span v-if="loggedIn === false">Please register first to access home page</span>
  </div>
  `,
  created() {

  },
  mounted() {
    // console.log('this is session',this.$session.getAll());
    let userDetails = this.$session.getAll().user;
    if (userDetails === undefined) {
      this.loggedIn = false;
      // console.log('no user', this.loggedIn);
    } else {
      this.user = userDetails;
      this.loggedIn = true;
      // console.log('yes user', this.user);
    }
  },

}
</script>

<style lang="css">
</style>
