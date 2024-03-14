

<div class="project-box">
    <div class="image">
    <i><img src="{{  asset('storage/' . $project->image) }}" height="10" width="10"></i>
    </div>
    <h3>{{ $project->name }}</h3>
    <label>{{ $project->description }}</label>
</div>