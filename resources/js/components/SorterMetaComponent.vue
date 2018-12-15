<template>
  <div class="select-by-meta row justify-content-md-center">
    <div><a href="#" @click="onClick('all')">All</a></div>
    <div><a href="#">Most viewed</a></div>
    <div><a href="#">Most Appreciated</a></div>
    <div><a href="#">Most Recent</a></div>
    <div><a href="#">Featured</a></div>
  </div>
</template>

<script>
export default {

  name: 'SorterMetaComponent',

  data () {
    return {

    }
  },

  methods: {
    onClick(selected) {
      console.log('selected', selected)
    }
  }
}
</script>

<style lang="css" scoped>
</style>