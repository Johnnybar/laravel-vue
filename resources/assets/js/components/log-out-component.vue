
<script>
import axios from 'axios';
import VueSession from 'vue-session'
Vue.use(VueSession)

export default {
  name: 'log-out-component',
  template: `

  <a @click.prevent="logOut">Log Out</a>
  `,
  data() {
    return {

    }
  },
  methods: {
    logOut() {
      this.$session.destroy();
      window.location = '/';
    }

  }
}
</script>

<style lang="css">
</style>
