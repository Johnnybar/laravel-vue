
<script>
export default {
  name:'items',
  props:['items'],
  data() {
    return{
      loggedIn: ''
    }
  },
  template: `
  <div v-if="this.loggedIn === true">
  <div class="item-class" style="border:1px solid black">
    <h4>this is the items component embedded in the news component,<br/> receiving the items prop from the app component to the news component</h4>
    <ul>
    <li v-for="item in items">
    {{item.title}}
    </li>
    </ul>
  </div>
  </div>
  `,
  mounted(){
    // console.log('this is session',this.$session.getAll());
    let userDetails = this.$session.getAll().user;
    if(userDetails === undefined) {
      this.loggedIn = false;
      console.log('no user', this.loggedIn);
    }
    else{
    this.user = userDetails;
    this.loggedIn = true;
    console.log('yes user', this.user);
   }
  }
  // data() {
  //   return{
  //   items: [
  //     { id: 1, title: 'first item' },
  //     { id: 2, title: 'second item' },
  //     { id: 3, title: 'third item' }
  //   ]
  // }
  // }
}
</script>

<style lang="css">
</style>
