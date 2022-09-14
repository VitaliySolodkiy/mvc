<h1>Upload books from Excel</h1>

<form action="/books-save-from-file" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="FirstName">Choose File:</label>
        <input type="file" name="file" class="form-control">
    </div>

    <button class="btn btn-primary mt-3">Save</button>

</form>