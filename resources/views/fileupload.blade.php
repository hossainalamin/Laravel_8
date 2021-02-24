<h1>File uplaod</h1>
<form action="fileupload" method="post" enctype="multipart/form-data">
@csrf
<input type="file" name="file">
<button>Upload File</button>
</form>

