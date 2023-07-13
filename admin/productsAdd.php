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
                            <select name="SelectPCat" class="form-select form-control" id="SelectPCat">
                                <option>--- Select Category ---</option>
                                <?php
                                $pcq = $conn->query("SELECT * FROM `product_categories`");
                                while ($pc = $pcq->fetch_object()) {
                                ?>
                                    <option value="<?= $pc->id ?>"><?= $pc->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <select name="SelectPSCat" class="form-select form-control" id="SelectPSCat">
                                <option>--- Select Sub Category ---</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <select name="SelectPSSCat" class="form-select form-control">
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

                                <?php
                                $selectbrand = $conn->query("SELECT * FROM `brands`");
                                if ($selectbrand->num_rows > 0) {
                                    while ($row = $selectbrand->fetch_object()) {
                                ?>
                                        <option value="<?= $row->brand_id ?>"><?= $row->brand_name ?></option>
                                <?php }
                                } ?>
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

<!-- for text editor -->
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

<!-- for auto suggestions color and multiple select data -->
<script src="./js/MagicSuggest/magicsuggest.js"></script>
<script>
    $(function() {
        var ms1 = $('#ms1').magicSuggest({
            data: ['MediumVioletRed', 'DeepPink', 'PaleVioletRed', 'HotPink',
                'LightPink', 'Pink', 'DarkRed', 'Red', 'Firebrick', 'Crimson',
                'IndianRed', 'LightCoral', 'Salmon', 'DarkSalmon',
                'LightSalmon', 'OrangeRed', 'Tomato', 'DarkOrange', 'Coral',
                'Orange', 'DarkKhaki', 'Gold', 'Khaki', 'PeachPuff', 'Yellow',
                'PaleGoldenrod', 'Moccasin', 'PapayaWhip', 'LightGoldenrodYellow',
                'LemonChiffon', 'LightYellow', 'Maroon', 'Brown', 'SaddleBrown', 'Sienna',
                'Chocolate', 'DarkGoldenrod', 'Peru', 'RosyBrown', 'Goldenrod',
                'SandyBrown', 'Tan', 'Burlywood', 'Wheat', 'NavajoWhite', 'Bisque',
                'BlanchedAlmond', 'Cornsilk', 'DarkGreen', 'Green', 'DarkOliveGreen',
                'ForestGreen', 'SeaGreen', 'Olive', 'OliveDrab', 'MediumSeaGreen',
                'LimeGreen', 'Lime', 'SpringGreen', 'MediumSpringGreen', 'DarkSeaGreen',
                'MediumAquamarine', 'YellowGreen', 'LawnGreen', 'Chartreuse', 'LightGreen',
                'GreenYellow', 'PaleGreen', 'Teal', 'DarkCyan', 'LightSeaGreen',
                'CadelBlue', 'DarkTurquoise', 'MediumTurquoise', 'Turquoise', 'Aqua',
                'Cyan', 'AquaMarine', 'PaleTurquoise', 'LightCyan', 'Navy', 'DarkBlue',
                'MediumBlue', 'Blue', 'MidnightBlue', 'RoyalBlue', 'SteelBlue',
                'DodgerBlue', 'DeepSkyBlue', 'CornFlowerBlue', 'SkyBlue', 'LightSkyBlue',
                'LightSteelBlue', 'LightBlue', 'PowderBlue', 'Indigo', 'Purple',
                'DarkMagenta', 'DarkViolet', 'DarkSlateBlue', 'BlueViolet', 'DarkOrchid',
                'Fuchsia', 'Magenta', 'SlateBlue', 'MediumSlateBlue',
                'MediumOrchid', 'MediumPurple', 'Orchid', 'Violet', 'Plum',
                'Thistle', 'Lavender', 'MistyRose', 'AntiqueWhite', 'Linen',
                'Beige', 'WhiteSmoke', 'LavenderBlush', 'OldLace', 'AliceBlue',
                'Seashell', 'GhostWhite', 'Honeydew', 'ForalWhite', 'Azure',
                'MintCream', 'Snow', 'Ivory', 'White', 'Black', 'DarkSlateGray',
                'DimGray', 'SlateGrey', 'Gray', 'LightSlateGray', 'DarkGray',
                'Silver', 'LightGray', 'Gainsboro'
            ]
        });
    });
</script>
<script>
    $(function() {
        var ms2 = $('#ms2').magicSuggest({
            data: null,
            autoSelect: false,
            disabledField: null,
            hideTrigger: true,
            maxDropHeight: 0,
            maxSuggestions: null,
            expanded: false
        });
    });
</script>
<!-- when select the cetagory then auto load the sub-cetagory -->
<script src="./js/custom/addSubCat.js"></script>

<?php
include_once("./footer.php");
?>