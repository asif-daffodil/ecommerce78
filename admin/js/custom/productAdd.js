$(document).ready(function () {
  $("#singleProImg").change(function (e) {
    const file = e.target.files[0];
    if (file) {
      const fileName = file.name.toLowerCase();
      const fileExtension = fileName.split(".").pop();
      const allowedExtensions = ["jpg", "jpeg", "png", "gif"];
      if (allowedExtensions.includes(fileExtension)) {
        const reader = new FileReader();

        reader.onload = function (event) {
          $(".preview-image").removeClass("d-none");
          $("#previewImgSingle").attr("src", event.target.result);
        };

        reader.readAsDataURL(file);
      }
    }
  });

  $(".preview-image").click(function () {
    $("#previewImgSingle").removeAttr("src");
    $(".preview-image").addClass("d-none");
    $("#singleProImg").val(null);
  });

  // =================================================================
  // ================ product images gallery =========================
  // =================================================================
  let selectedFiles = [];

  $("#proGlryImg").change(function (e) {
    const files = Array.from(e.target.files);

    if (files.length > 0) {
      $(".allMultiImg").removeClass("d-none");
      $(".allMultiImg").addClass("d-flex");

      const imageCount = files.length;
      let totalSize = 0;
      const allowSize = 20 * 1024 * 1024;

      // Loop through the images and get their sizes
      for (var i = 0; i < imageCount; i++) {
        var file = files[i];
        var size = file.size;

        // Add the size of the image to the total size
        totalSize += size;
      }

      if (totalSize <= allowSize) {
        files.forEach(function (file) {
          const fileName = file.name.toLowerCase();
          const fileExtension = fileName.split(".").pop();
          const allowedExtensions = ["jpg", "jpeg", "png", "gif"];
          if (allowedExtensions.includes(fileExtension)) {
            const reader = new FileReader();

            reader.onload = function (event) {
              const parent = $('<div class="multiPreview-img"></div>');
              const image = $(
                '<img class="multi-img" width="120" height="120">'
              );
              image.attr("src", event.target.result);
              parent.append(image);
              $(".allMultiImg").append(parent);
            };

            reader.readAsDataURL(file);

            // Add the file to the selectedFiles array
            selectedFiles.push(file);
          }
        });
      } else {
        Swal.fire({
          icon: "error",
          title: "Doesn't allow Big File!",
          text: "Your file size is not allowed to gather than 20MB!",
          confirmButtonText: "Ok",
        });
      }
      // Update the files in the #proGlryImg input
      updateProGlryImgFiles();
    } else {
      $(".allMultiImg").addClass("d-none");
      $(".allMultiImg").removeClass("d-flex");
      $(".allMultiImg").empty();

      // Clear the selectedFiles array
      selectedFiles = [];
    }
  });

  $(document).on("click", ".multiPreview-img", function () {
    // Remove the .multiPreview-img element
    $(this).remove();

    // Get the index of the removed file in the selectedFiles array
    const index = $(this).index();

    // Remove the file from the selectedFiles array
    selectedFiles.splice(index, 1);

    // Update the files in the #proGlryImg input
    updateProGlryImgFiles();
  });

  // Function to update the files in the #proGlryImg input
  function updateProGlryImgFiles() {
    // Create a new DataTransfer object
    const updatedFiles = new DataTransfer();

    // Add each file from the selectedFiles array to the updatedFiles
    selectedFiles.forEach(function (file) {
      updatedFiles.items.add(file);
    });

    // Assign the updatedFiles to #proGlryImg input
    $("#proGlryImg")[0].files = updatedFiles.files;
  }

  // =================================================================
  // ================ ajax request =========================
  // =================================================================

  $("#addProduct").click(function () {
    const singleFile = $("#singleProImg")[0].files[0];
    const multiFiles = $("#proGlryImg")[0].files;
    const proName = $("#proName").val();
    const proTitle = $("#proTitle").val();
    const regPrice = $("#regPrice").val();
    const disPrice = $("#disPrice").val();
    const selectPCat = $("#SelectPCat").val();
    const selectPSCat = $("#SelectPSCat").val();
    const selectPSSCat = $("#SelectPSSCat").val();
    const selectPBrand = $("#SelectPBrand").val();
    const proType = $("#proType").val();
    const addProShortDes = $("#addProShortDes .ql-editor").html();
    const addProDes = $("#addProDes .ql-editor").html();
    const addInfo = $("#addInfo .ql-editor").html();
    const offerTime = $("#offerTime").val();

    let productHidenColor = $("#ms1 .ms-sel-ctn input[type='hidden']");
    let productColor = productHidenColor
      .map(function () {
        return $(this).val();
      })
      .get();

    let productHidenSize = $("#ms2 .ms-sel-ctn input[type='hidden']");
    let productSize = productHidenSize
      .map(function () {
        return $(this).val();
      })
      .get();

    const formData = new FormData();

    if (multiFiles.length > 0) {
      for (let i = 0; i < multiFiles.length; i++) {
        formData.append("multiImages[]", multiFiles[i]);
      }
    }

    if (productColor.length > 0) {
      for (let i = 0; i < productColor.length; i++) {
        formData.append("proColor[]", productColor[i]);
      }
    }

    if (productSize.length > 0) {
      for (let i = 0; i < productSize.length; i++) {
        formData.append("proSize[]", productSize[i]);
      }
    }
    formData.append("singleImage", singleFile);
    formData.append("proName", proName);
    formData.append("proTitle", proTitle);
    formData.append("regPrice", regPrice);
    formData.append("disPrice", disPrice);
    formData.append("selectPCat", selectPCat);
    formData.append("selectPSCat", selectPSCat);
    formData.append("selectPSSCat", selectPSSCat);
    formData.append("selectPBrand", selectPBrand);
    formData.append("proType", proType);
    formData.append("addProShortDes", addProShortDes);
    formData.append("addProDes", addProDes);
    formData.append("addInfo", addInfo);
    formData.append("offerTime", offerTime);

    $.ajax({
      url: "./ajax/product/productAdd.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        const res = JSON.parse(response);
        var error = res.error;
        var msg = res.msg;
        if (error === true) {
          Swal.fire({
            icon: "error",
            title: "Error",
            text: msg,
            confirmButtonText: "Understand",
          });
        } else {
          Swal.fire({
            icon: "success",
            title: "Congratulations!",
            text: msg,
            confirmButtonText: "Ok",
          }).then(function () {
            $("#previewImgSingle").removeAttr("src");
            $(".preview-image").addClass("d-none");
            $("#proAddForm").trigger("reset");
            $(".allMultiImg").addClass("d-none");
            $(".allMultiImg").removeClass("d-flex");
            $(".allMultiImg").empty();
            window.location.reload();
          });
        }
      },
    });
  });
});
