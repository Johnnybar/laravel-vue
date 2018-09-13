
<script>
export default {
  name: 'news',
  props: ['items'],
  data() {
    return {
      news: [],
      loggedIn: ''
    }
  },
  template: `
  <div v-if="this.loggedIn === true" class="container">
  <div class="row">
  <div class="col-sm">
  {{news[0]}}
  </div>
  <div class="col-sm">
  {{news[1]}}
  </div>
  <div class="col-sm">
  {{news[2]}}
  </div>
  <div class="col-sm">
  {{news[3]}}
  </div>
  <div class="col-sm">
  {{news[4]}}
  </div>
  </div>
  <items
  v-bind:items='items'
  ></items>
  </div>
  `,
  created() {},
  mounted() {
    this.news.push('first', 'second', 'third', 'fourth', 'fifth')
    // console.log('this is session',this.$session.getAll());
    let userDetails = this.$session.getAll().user;
    if (userDetails === undefined) {
      this.loggedIn = false;
      console.log('no user', this.loggedIn);
      window.location = '/';
    } else {
      this.user = userDetails;
      this.loggedIn = true;
      console.log('yes user', this.user);
    }
  }

}
</script>

<style lang="css">
</style>
