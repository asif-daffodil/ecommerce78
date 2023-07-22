<?php
include_once("./header.php");
// if (isset($_POST["addProduct"])) {
//     $fnames = $_POST["demo1"];
//     $tmpname = $_POST["demo1"];
//     foreach ($fnames as $fname) {
//         echo $fname;
//     }
?>
<!-- text editor link -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<!-- color selcetor css -->
<link href="./css/magicsuggest.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="./css/product.css?<?= time(); ?>">

<div id="content">
    <?php
    include_once("./topbar.php")
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add New Products</h1>
            </div>
            <form action="" method="POST" id="proAddForm" enctype="multipart/form-data">
                <div class="row">
                    <!-- single image -->
                    <div class="col-md-6 mb-3">
                        <h5>Product Image</h5>
                        <div class="d-flex" style="gap:10px">
                            <div class="preview-image d-none">
                                <img src="" alt="" id="previewImgSingle">
                            </div>
                            <label for="singleProImg">
                                <div class="single-img">
                                    <i class="fa-solid fa-plus" style="color: #000000;"></i>
                                    <span>Upload</span>
                                </div>
                            </label>
                        </div>
                        <input type="file" id="singleProImg" name="productImage" />
                    </div>
                    <!-- product image gallery -->
                    <div class="col-md-6 mb-3">
                        <h5>Product Image Gallery</h5>
                        <div class="col-12 d-flex flex-wrap" style="gap:10px">
                            <div class="allMultiImg d-none flex-wrap" style="gap:10px">
                            </div>
                            <label for="proGlryImg">
                                <div class="multiple-img">
                                    <i class="fa-solid fa-plus" style="color: #000000;"></i>
                                    <span>Upload</span>
                                </div>
                            </label>
                        </div>
                        <input type="file" id="proGlryImg" name="imageGallery[]" multiple />
                    </div>
                    <!-- product name -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" id="proName" placeholder="Name" class="form-control">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <!-- product title  -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" placeholder="Title" id="proTitle" class="form-control">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <!-- regular price -->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <input type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Regular Price" id="regPrice" class="form-control">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Discount Price" id="disPrice" class="form-control">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <!-- discount price -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" id="ms1" class="form-control" placeholder="Select your color">
                        </div>
                    </div>
                    <!-- procduct color -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" id="ms2" class="form-control" placeholder="Priduct Size">
                        </div>
                    </div>
                    <!-- size -->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <select name="SelectPCat" class="form-select form-control" id="SelectPCat">
                                    <option value="">--- Select Category ---</option>
                                    <?php
                                    $pcq = $conn->query("SELECT * FROM `product_categories`");
                                    while ($pc = $pcq->fetch_object()) {
                                    ?>
                                        <option value="<?= $pc->id ?>"><?= $pc->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="SelectPSCat" class="form-select form-control" id="SelectPSCat">
                                    <option value="">--- Select Sub Category ---</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- category -->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <select name="SelectPSSCat" class="form-select form-control" id="SelectPSSCat">
                                    <option value="">--- Select Sub-sub Category ---</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="SelectPBrand" id="SelectPBrand" class="form-select form-control">
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
                    </div>
                    <!-- sub category -->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <input id="offerTime" type="datetime-local" class="form-control">
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" id="proType" placeholder="Product Type">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5>Short Description</h5>
                        <div id="addProShortDes" class="mb-3">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5>Description</h5>
                        <div id="addProDes" class="mb-3">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h5>Additional Infomation</h5>
                        <div id="addInfo" class="mb-3">
                        </div>
                    </div>
                    <div class="col-md-12 my-4">
                        <button type="button" class="btn btn-primary btn-sm py-2 px-4 font-weight-bold" id="addProduct">Add Product</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<!-- for text editor -->
<script type="text/javascript" src="./js/quill.js?<?= time(); ?>"></script>
<script type="text/javascript">
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
    var quill = new Quill('#addProShortDes', {
        theme: 'snow',
        modules: {
            toolbar: toolbarOptions
        }
    });
    var quill = new Quill('#addProDes', {
        theme: 'snow',
        modules: {
            toolbar: toolbarOptions
        }
    });
    var quill = new Quill('#addInfo', {
        theme: 'snow',
        modules: {
            toolbar: toolbarOptions
        }
    });
</script>

<!-- for auto suggestions color and multiple select data -->
<script type="text/javascript" src="./js/magicsuggest.js"></script>

<script type="text/javascript">
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
<script type="text/javascript">
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
<script type="text/javascript" src="./js/custom/loadChildCat.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- product image add -->
<script type="text/javascript" src="./js/custom/productAdd.js?<?= time(); ?>"></script>
</script>
<?php
include_once("./footer.php");
?>