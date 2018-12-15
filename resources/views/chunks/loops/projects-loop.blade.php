<div class="row projects-loop">
  @foreach($projects as $project)
    <div class="col-sm-5 col-md-3">
      <project-preview-cart
        id="{{$project->id}}"
        thumbnail="{{$project->thumbnail}}"
        name="{{$project->name}}"
        short_description="{{$project->short_description}}"
        is_bookmared="{{$project->}}"
      />
    </div>
  @endforeach
</div>