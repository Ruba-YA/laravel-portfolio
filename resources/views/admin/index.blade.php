
<link rel="stylesheet" href="../../app.css">
<a href="/admin/create" class="btn btn-success">Create Post</a>
<a href="/admin/index" class="btn btn-success">All Posts</a>
<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tfoot>

        </tr>
    </tfoot>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <td>{{ $project->id }}</td>
            <td>
                <a href="#">{{ $project->name }}.</a>
            </td>

            <td>
            <a href="/admin/edit/{{ $project->id }}" >   <button class="btn btn-blue btn-icon"><i>Edit</i></button></a>
            </td>
            <td>
               <form action="/admin/{{ $project->id }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-red btn-icon"><i>Delete</i></button></form>
               
                {{--  <a href="/posts/delete/{{ $project->id }}" >    <button class="btn btn-red btn-icon"><i>Delete</i></button></a>  --}}
            </td>
        </tr>
        @endforeach


    </tbody>
</table>


