<template>
  <div class="project-preview-cart">
    <img :src="thumbnail" :alt="name">
    <div class="project-preview-cart__wrapper">
      <div class="project-preview-cart__wrapper__name"> 
        <a :href="">{{name}}</a>
      </div>
      <div class="project-preview-cart__wrapper__short-description">
        {{short_description}}
      </div>

      <div class="project-preview-cart__wrapper__meta">
        <div class="base-meta">
          <div>
            <img src="img/likes.png" alt="">
            <div>{{likes}}</div>
          </div>
          <div>
            <img src="img/views.png" alt="">
            <div> {{views}} </div>
          </div>
          <div>
            <img src="img/bookmarks.png" alt="">
            <div> {{bookmarks}} </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {

  name: 'ProjectPreviewCartComponent',

  props: [
    'thumbnail',
    'name',
    'slug'
    'short_description',
    'is_bookmared',
    'likes',
    'views',
    'bookmarks',
  ],

  data () {
    return {

    }
  },

  methods: {
    getProjectUrl(slug) {
      return `/projects/`;
    }
  }
}
</script>

<style lang="scss" scoped>
</style>