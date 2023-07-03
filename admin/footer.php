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


<!-- bootstrap 4 modal div main chategory update modal -->
<div class="modal fade" id="mainCatModal" tabindex="-1" role="dialog" aria-labelledby="mainCatModal123" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white shadow">
                <h5 class="modal-title" id="mainCatModal123">Update Category</h5>
                <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close" style="outline: none;">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-success" id="smsg"></div>
                <form method="post" id="updateCatForm">
                    <input type="hidden" id="catId">
                    <div class="mb-3">
                        <input type="text" placeholder="Category Name" class="form-control" id="catName">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control cat_des_textarea " placeholder="Category Description" style="resize: none;" id="catDes"></textarea>
                        <div class="invalid-feedback"></div>
                        <div class="show_value_length d-none">
                            <span class="value_length">0</span>
                            <span class="limit_length">/120</span>
                        </div>
                    </div>
                    <input type="submit" value="Update Category" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- sub chategory update modal -->
<div class="modal fade" id="mainSubCatModal" tabindex="-1" role="dialog" aria-labelledby="mainSubCatModal" aria-hidden="true" style="z-index: 99999999
">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white shadow">
                <h5 class="modal-title fw-bold" id="mainSubCatModal123">Update Sub-Category</h5>
                <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close" style="outline: none;">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-success" id="upSubCatSuccMsg"></div>
                <form method="POST">
                    <input type="hidden" id="subCatId">
                    <?php
                    $selectAllCat = $conn->query("SELECT * FROM `product_categories`");
                    if ($selectAllCat->num_rows > 0) {
                    ?>
                        <div class="mb-3">
                            <select id="upSelectPreCat" class="form-select form-control">
                                <option id="selected_pre_cat_id">Select Parent Cetagory</option>
                                <?php
                                while ($allCat = $selectAllCat->fetch_object()) {
                                ?>
                                    <option value="<?= $allCat->id ?>"><?= $allCat->name ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <div class="invalid-feedback upSelectPreCatErrormsg"></div>
                        </div>
                    <?php
                    } ?>
                    <div class="mb-3">
                        <input type="text" placeholder="Category Name" class="form-control" id="subCatName">
                        <div class="invalid-feedback subCatNameErrMsg"></div>
                    </div>
                    <div class="mb-3">
                        <textarea name="description" class="form-control cat_des_textarea" placeholder="Category Description" style="resize: none;" id="subCatDes"></textarea>
                        <div class="show_value_length d-none">
                            <span class="value_length">0</span>
                            <span class="limit_length">/120</span>
                        </div>
                        <div class="invalid-feedback subCatDesUpdate"></div>
                    </div>
                    <button type="button" id="upSubCat" class="btn btn-primary btn-sm">Update Sub-Category</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- sub sub chategory update modal -->
<div class="modal fade" id="SubSubCatModal" tabindex="-1" role="dialog" aria-labelledby="SubSubCatModal1923" aria-hidden="true" style="z-index: 99999999
">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white shadow">
                <h5 class="modal-title fw-bold" id="SubSubCatModal1923">Update Sub-sub-Category</h5>
                <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close" style="outline: none;">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-success" id="upSubSubCatSuccMsg"></div>
                <form method="POST">
                    <input type="hidden" id="subSubCatId">
                    <?php
                    $selectSubCat = $conn->query("SELECT * FROM `sub_category`");
                    if ($selectSubCat->num_rows > 0) {
                    ?>
                        <div class="mb-3">
                            <select class="form-select form-control selectPreSubCat">
                                <option id="upSelectPreSubCat"></option>Select Parent Sub Cetagory</option>
                                <?php
                                while ($SubCat_Fetch = $selectSubCat->fetch_object()) {
                                ?>
                                    <option value="<?= $SubCat_Fetch->id ?>"><?= $SubCat_Fetch->name ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <div class="invalid-feedback selectPreSubCat"></div>
                        </div>
                    <?php
                    }
                    ?>

                    <div class="mb-3">
                        <input type="text" placeholder="Category Name" class="form-control" id="subSubCatName">
                        <div class="invalid-feedback subSubCatNameErrMsg"></div>
                    </div>
                    <div class="mb-3">
                        <textarea name="description" class="form-control cat_des_textarea" placeholder="Category Description" style="resize: none;" id="subSubCatDes"></textarea>
                        <div class="invalid-feedback subSubCatDesUpdate"></div>
                        <div class="show_value_length d-none">
                            <span class="value_length">0</span>
                            <span class="limit_length">/120</span>
                        </div>

                    </div>
                    <button type="button" id="upSubSubCat" class="btn btn-primary btn-sm">Update Sub-Category</button>
                </form>
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

<!-- modal chategory scripts -->
<script src="./js/custom/upCatModal.js?<?= time(); ?>"></script>
</body>

</html>