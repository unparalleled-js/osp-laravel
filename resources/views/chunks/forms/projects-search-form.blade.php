{{-- projects search form --}}
<div class="container">

  {{-- search input --}}
  <div class="row justify-content-md-center">
    <div class="col-sm-6">
      <form action="">
        <input type="text" class="form-control" placeholder="Search for a new project">
      </form>
    </div>
  </div>
  {{-- end search input --}}

  {{-- selectors grid --}}
  @include('chunks.selects.select-by-meta')
  {{-- end selectors grid --}}
</div>
{{-- end project searcch form --}}