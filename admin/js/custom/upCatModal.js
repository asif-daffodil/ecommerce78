$(document).ready(function () {
  // --------------------------------------------
  // -------- main chategory modal----------------
  // --------------------------------------------

  $(document).on("click", ".upCatBtn", function () {
    const catName = $(this).attr("data-catName");
    const catDes = $(this).attr("data-catDes");
    const catId = $(this).attr("data-catId");
    $("#catName").val(catName);
    $("#catDes").val(catDes);
    $("#catId").val(catId);
    $("#mainCatModal").modal("show");
  });

  $("#updateCatForm").submit(function (e) {
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
    } else if (catDes.length > 120) {
      // Handle empty category name
      $("#catDes").addClass("is-invalid");
      $("#catDes").next().html("Description cannot be 120 characters long!");
      return;
    } else {
      $("#catDes").removeClass("is-invalid");
      $("#catName").removeClass("is-invalid");
    }

    // Perform AJAX request to update the category
    $.ajax({
      url: "./ajax/update_category.php",
      type: "POST",
      data: {
        catId: catId,
        catName: catName,
        catDes: catDes,
        passCatdata: "success",
      },
      success: function (response) {
        if (response === "success") {
          $("#smsg").text("Category updated successfully.");
          setTimeout(() => {
            location.href = "./productsCategory.php";
          }, 2000);
        } else {
          // Update failed
          // Handle the error message or show validation errors
        }
      },
      error: function () {
        // Handle AJAX error
      },
    });
  });

  // --------------------------------------------
  // -------- sub chategory modal----------------
  // --------------------------------------------
  $(document).on("click", ".upSubCatBtn", function () {
    const catName = $(this).attr("data-catName");
    const catDes = $(this).attr("data-catDes");
    const catId = $(this).attr("data-catId");
    const selectId = $(this).attr("data-selectId");
    const selectName = $(this).attr("data-selectName");

    $("#subCatName").val(catName);
    $("#subCatDes").val(catDes);
    $("#subCatId").val(catId);
    $("#selected_pre_cat_id").val(selectId);
    $("#selected_pre_cat_id").html(selectName);

    $("#mainSubCatModal").modal("show");
  });

  $("#upSubCat").click(function () {
    const subCatId = $("#subCatId").val();
    const upSelectPreCat = $("#upSelectPreCat").val();
    const subCatName = $("#subCatName").val();
    const subCatDes = $("#subCatDes").val();

    $.ajax({
      url: "./ajax/update_category.php",
      type: "POST",
      data: {
        subCatId: subCatId,
        upSelectPreCat: upSelectPreCat,
        subCatName: subCatName,
        subCatDes: subCatDes,
        postData: "success",
      },
      success: function (response) {
        var res = JSON.parse(response);

        var err = res.err;
        var err_msg = res.err_msg;

        $("#upSelectPreCat, #subCatName, #subCatDes").removeClass("is-invalid");
        $(
          ".upSelectPreCatErrormsg, .subCatNameErrMsg, .subCatDesUpdate, #upSubCatSuccMsg"
        ).text();

        if (err === 1) {
          $("#upSelectPreCat").addClass("is-invalid");
          $(".upSelectPreCatErrormsg").text(err_msg);
        } else if (err === 2) {
          $("#upSelectPreCat").addClass("is-invalid");
          $(".upSelectPreCatErrormsg").text(err_msg);
        } else if (err === 3) {
          $("#subCatName").addClass("is-invalid");
          $(".subCatNameErrMsg").text(err_msg);
          $("#upSelectPreCat, #subCatDes").removeClass("is-invalid");
          $(
            ".upSelectPreCatErrormsg, .subCatDesUpdate, #upSubCatSuccMsg"
          ).text();
        } else if (err === 4) {
          $("#subCatDes").addClass("is-invalid");
          $(".subCatDesUpdate").text(err_msg);

          $("#upSelectPreCat, #subCatName,").removeClass("is-invalid");
          $(
            ".upSelectPreCatErrormsg, .subCatNameErrMsg, #upSubCatSuccMsg"
          ).text();
        } else if (err === 5) {
          $(".subCatDesUpdate").text(err_msg);

          $("#upSelectPreCat, #subCatName , .subCatDesUpdate").removeClass(
            "is-invalid"
          );
          $(
            ".upSelectPreCatErrormsg, .subCatNameErrMsg,  #upSubCatSuccMsg"
          ).text();
        } else if (err === 6) {
          $("#upSelectPreCat, #subCatName, #subCatDes").removeClass(
            "is-invalid"
          );
          $(
            ".upSelectPreCatErrormsg, .subCatNameErrMsg, .subCatDesUpdate, #upSubCatSuccMsg"
          ).text();
          $("#upSubCatSuccMsg").html(err_msg);
          setTimeout(() => {
            location.href = "./productsCategory.php";
          }, 2000);
        }
      },
    });
  });

  // --------------------------------------------
  // -------- sub sub chategory modal----------------
  // --------------------------------------------
  $(document).on("click", ".upSubSubCatBtn", function () {
    const catId = $(this).attr("data-catId");
    const selectId = $(this).attr("data-selectId");
    const selectName = $(this).attr("data-selectName");
    const catName = $(this).attr("data-catName");
    const catDes = $(this).attr("data-catDes");

    $("#subSubCatId").val(catId);
    $("#upSelectPreSubCat").val(selectId);
    $("#upSelectPreSubCat").html(selectName);
    $("#subSubCatName").val(catName);
    $("#subSubCatDes").val(catDes);

    $("#SubSubCatModal").modal("show");
  });

  $(document).on("click", "#upSubSubCat", function () {
    const subSubCatId = $("#subSubCatId").val();
    const selectPreSubCat = $(".selectPreSubCat").val();
    const subSubCatName = $("#subSubCatName").val();
    const subSubCatDes = $("#subSubCatDes").val();

    $.ajax({
      url: "./ajax/update_category.php",
      type: "POST",
      data: {
        subSubCatId: subSubCatId,
        selectPreSubCat: selectPreSubCat,
        subSubCatName: subSubCatName,
        subSubCatDes: subSubCatDes,
        postSubSubData: "success",
      },
      success: function (res) {
        $(".selectPreSubCat, #subSubCatName, #subSubCatDes").removeClass(
          "is-invalid"
        );
        $(
          ".selectPreSubCat, .subSubCatNameErrMsg, .subSubCatDesUpdate, #upSubSubCatSuccMsg"
        ).text();

        if (res === "error1") {
          $(".selectPreSubCat").addClass("is-invalid");
          $(".selectPreSubCat").text("Please Select a Previous Sub-Category!");
        } else if (res === "error2") {
          $(".selectPreSubCat").addClass("is-invalid");
          $(".selectPreSubCat").text("Please Select a Previous Sub-Category!");
        } else if (res === "error3") {
          $("#subSubCatName").addClass("is-invalid");
          $(".subSubCatNameErrMsg").text("Please Select a Sub-Sub-Category");
          $(".selectPreSubCat, #subSubCatDes").removeClass("is-invalid");
          $(
            ".selectPreSubCat, .subSubCatDesUpdate, #upSubSubCatSuccMsg"
          ).text();
        } else if (res === "error4") {
          $("#subSubCatDes").addClass("is-invalid");
          $(".subSubCatDesUpdate").text(
            "Description cannot be 120 characters long!"
          );

          $(".selectPreSubCat, #subSubCatName").removeClass("is-invalid");
          $(
            ".selectPreSubCat, .subSubCatNameErrMsg, #upSubSubCatSuccMsg"
          ).text();
        } else if (res === "error5") {
          $(".subSubCatDesUpdate").text("Something went wrong!");

          $(".selectPreSubCat, #subSubCatName, #subSubCatDes").removeClass(
            "is-invalid"
          );
          $(
            ".selectPreSubCat, .subSubCatNameErrMsg, #upSubSubCatSuccMsg"
          ).text();
        } else if (res === "success") {
          $(".selectPreSubCat, #subSubCatName, #subSubCatDes").removeClass(
            "is-invalid"
          );
          $(
            ".selectPreSubCat, .subSubCatNameErrMsg, .subSubCatDesUpdate, #upSubSubCatSuccMsg"
          ).text();

          $("#upSubSubCatSuccMsg").html(
            "Sub-Sub Category Updated Successfully!"
          );
          setTimeout(() => {
            location.href = "./productsCategory.php";
          }, 2000);
        }
      },
    });
  });
});
