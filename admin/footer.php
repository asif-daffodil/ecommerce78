<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Molla Website <?= date("Y") ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Select "Logout" below if you are ready to end your current session.
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">
                    Cancel
                </button>
                <a class="btn btn-primary" href="../logout">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

<!-- chategory data table -->
<script src="./js/custom/dataTableAdd.js?<?= time(); ?>"></script>

<!-- character length counter -->
<script src="./js/custom/characterCount.js?<?= time(); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

<!-- modal update chategory scripts -->
<script src="./js/custom/upCatModal.js?<?= time(); ?>"></script>

<!-- modal delete category scripts -->
<script src="./js/custom/dltCatModal.js?<?= time(); ?>"></script>

<!-- insert brand_id -->
<script src="./js/custom/addBrand.js?<?= time(); ?>"></script>

<!-- update Brand -->
<script src="./js/custom/updateBrand.js?<?= time(); ?>"></script>

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
</body>

</html>