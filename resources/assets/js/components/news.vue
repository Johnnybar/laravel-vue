<template lang="html">
  <div class="container">
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
</template>

<script>
export default {
  name: 'news',
  props:['items'],
  data(){
    return {
      news: []
    }
  },
  created(){
    this.news.push('first', 'second', 'third', 'fourth', 'fifth')
  },
  mounted(){
    console.log(this.items);
  }

}
</script>

<style lang="css">
</style>
