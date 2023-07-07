<?php
include_once("./header.php");
?>
<div id="content">
    <?php
    include_once("./topbar.php")
    ?>
    <div class="container-fluid">
        <div class="col-md-6">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add New Products</h1>
            </div>
            <form method="post">
                <div class="mb-3">
                    <input type="text" placeholder="Name" class="form-control">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Title" class="form-control">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Regular Price" class="form-control">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Discount Price" class="form-control">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="mb-3">
                    <select name="SelectPCat" class="form-select form-control">
                        <option>--- Select Unit ---</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="mb-3">
                    <select name="SelectPCat" class="form-select form-control">
                        <option>--- Select Category ---</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="mb-3">
                    <select name="SelectPCat" class="form-select form-control">
                        <option>--- Select Sub Category ---</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="mb-3">
                    <select name="SelectPCat" class="form-select form-control">
                        <option>--- Select Sub-sub Category ---</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="mb-3">
                    <select name="SelectPCat" class="form-select form-control">
                        <option>--- Select Brand ---</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="datetime-local" class="form-control">
                </div>
                <div class="mb-3" id="editor">

                </div>
                <button class="btn btn-primary btn-sm">Add</button>
            </form>
        </div>

    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
<?php
include_once("./footer.php");
?>