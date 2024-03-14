
<link rel="stylesheet" href="../../app.css">
<form action="/admin/create" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="post-title">Post Title:</label>
        <input name="name" class="form-control" id="post-title" type="text" placeholder="Post Title..." />
    </div>

    <div class="form-group">
        <label for="post-description">Post Description:</label>
        <input name="description" class="form-control" id="post-description" type="text" placeholder="Post Description..." />
    </div>
    <div>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" required>
    </div>

  



    <button class="btn btn-primary mr-2 my-1" type="submit">Create now!</button>

</form>

