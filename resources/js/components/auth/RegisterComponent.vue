<template>
  <div class="card">
    <div class="card-header">
      Create account
    </div>

    <div class="card-body">
        <form method="POST" :action="route">
            <div class="row justify-content-center">
              <div class="col-sm-10 col-md-8">
                <input type="text" class="form-control" name="name" placeholder="Name">
                <input type="text" class="form-control" name="email" placeholder="Email">
                <input type="text" class="form-control" name="password" placeholder="Password">
              </div>
            </div>
        </form>
    </div>
</div>
</template>

<script>
export default {

  name: 'RegisterComponent',

  data () {
    return {
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    }
  }
}
</script>

<style lang="css" scoped>
</style>