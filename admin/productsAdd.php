<?php
include_once("./header.php");
?>
<div id="content">
    <?php
    include_once("./topbar.php")
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add New Products</h1>
            </div>

            <form method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" placeholder="Name" class="form-control">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" placeholder="Title" class="form-control">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" placeholder="Regular Price" class="form-control">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" placeholder="Discount Price" class="form-control">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" id="ms1" class="form-control" placeholder="Select your color">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" id="ms2" class="form-control" placeholder="Place the value separate with coma">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <select name="SelectPCat" class="form-select form-control">
                                <option>--- Select Category ---</option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <select name="SelectPCat" class="form-select form-control">
                                <option>--- Select Sub Category ---</option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <select name="SelectPCat" class="form-select form-control">
                                <option>--- Select Sub-sub Category ---</option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <select name="SelectPCat" class="form-select form-control">
                                <option>--- Select Brand ---</option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="datetime-local" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="editor">

                        </div>
                    </div>
                    <div class="col-md-12 mt-5">
                        <button class="btn btn-primary btn-sm">Add</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var toolbarOptions = [
        [{
            'header': [1, 2, 3, 4, 5, 6, false]
        }],
        ['bold', 'italic', 'underline'],
        [{
            'list': 'ordered'
        }, {
            'list': 'bullet'
        }],
        [{
            'script': 'sub'
        }, {
            'script': 'super'
        }], // superscript/subscript
        [{
            'indent': '-1'
        }, {
            'indent': '+1'
        }], // outdent/indent
        [{
            'direction': 'rtl'
        }], // text direction

        [{
            'color': []
        }, {
            'background': []
        }], // dropdown with defaults from theme
        [{
            'font': []
        }],
        [{
            'align': []
        }],
        [{
            'link': 'href'
        }],
        [{
            'image': 'showImageUI'
        }],

        ['clean'] // remove formatting button
    ];
    var quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: toolbarOptions
        }
    });
</script>
<?php
include_once("./footer.php");
?>