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
<script>
    const mainCat = new DataTable('#mainCat', {
        lengthMenu: [5, 7]
    });
    const mainSubCat = new DataTable('#mainSubCat', {
        lengthMenu: [5, 7]
    });
    const mainSubSubCat = new DataTable('#mainSubSubCat', {
        lengthMenu: [5, 7]
    });
</script>
<!-- character length counter -->
<script>
    const catDesTextarea = document.querySelector(".cat_des_textarea");
    const showValueLength = document.querySelector(".show_value_length"),
        valueLength = showValueLength.querySelector(".value_length");

    const catDesTextarea2 = document.querySelector(".cat_des_textarea2");
    const showValueLength2 = document.querySelector(".show_value_length2"),
        valueLength2 = showValueLength2.querySelector(".value_length2");


    const catDesTextarea3 = document.querySelector(".cat_des_textarea3");
    const showValueLength3 = document.querySelector(".show_value_length3"),
        valueLength3 = showValueLength3.querySelector(".value_length3");

    catDesTextarea.addEventListener("keyup", () => {
        const value = catDesTextarea.value.length;

        valueLength.innerHTML = value;

        showValueLength.classList.remove("text-danger");
        showValueLength.classList.remove("d-block");
        showValueLength.classList.add("d-none");

        if (value > 0) {
            showValueLength.classList.add("d-block");
            showValueLength.classList.remove("d-none")
        }
        if (value > 120) {
            showValueLength.classList.add("text-danger");
        }
    })

    catDesTextarea2.addEventListener("keyup", () => {
        const value = catDesTextarea2.value.length;

        valueLength2.innerHTML = value;

        showValueLength2.classList.remove("text-danger");
        showValueLength2.classList.remove("d-block");
        showValueLength2.classList.add("d-none");

        if (value > 0) {
            showValueLength2.classList.add("d-block");
            showValueLength2.classList.remove("d-none")
        }
        if (value > 120) {
            showValueLength2.classList.add("text-danger");
        }
    })

    catDesTextarea3.addEventListener("keyup", () => {
        const value = catDesTextarea3.value.length;

        valueLength3.innerHTML = value;

        showValueLength3.classList.remove("text-danger");
        showValueLength3.classList.remove("d-block");
        showValueLength3.classList.add("d-none");

        if (value > 0) {
            showValueLength3.classList.add("d-block");
            showValueLength3.classList.remove("d-none")
        }
        if (value > 120) {
            showValueLength3.classList.add("text-danger");
        }
    })
</script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<script>
    $(document).ready(function() {


        $(".upCatBtn").click(function() {
            const catName = $(this).attr("data-catName");
            const catDes = $(this).attr("data-catDes");
            const catId = $(this).attr("data-catId");
            $("#catName").val(catName);
            $("#catDes").val(catDes);
            $("#catId").val(catId);
            $("#mainCatModal").modal("show");
        })

        $("#updateCatForm").submit(function(e) {
            e.preventDefault(); // Prevent form submission

            // Get form data
            const catId = $("#catId").val();
            const catName = $("#catName").val();
            const catDes = $("#catDes").val();

            // Perform client-side form validation
            if (!catName) {
                // Handle empty category name
                $("#catName").addClass("is-invalid");
                $("#catName").next().text("Please enter a category name.");
                return;
            }

            // Perform AJAX request to update the category
            $.ajax({
                url: "./ajax/update_category.php",
                type: "POST",
                data: {
                    catId: catId,
                    catName: catName,
                    catDes: catDes
                },
                success: function(response) {
                    if (response === "success") {
                        $("#smsg").text("Category updated successfully.");
                        setTimeout(() => {
                            // $("#mainCatModal").modal("hide");
                            location.reload();
                        }, 2000);
                    } else {
                        // Update failed
                        // Handle the error message or show validation errors
                    }
                },
                error: function() {
                    // Handle AJAX error
                }
            });
        });

    })
</script>
</body>

</html>