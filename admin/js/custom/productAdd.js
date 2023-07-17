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

      files.forEach(function (file) {
        const fileName = file.name.toLowerCase();
        const fileExtension = fileName.split(".").pop();
        const allowedExtensions = ["jpg", "jpeg", "png", "gif"];
        if (allowedExtensions.includes(fileExtension)) {
          const reader = new FileReader();

          reader.onload = function (event) {
            const parent = $('<div class="multiPreview-img"></div>');
            const image = $('<img class="multi-img" width="120" height="120">');
            image.attr("src", event.target.result);
            parent.append(image);
            $(".allMultiImg").append(parent);
          };

          reader.readAsDataURL(file);

          // Add the file to the selectedFiles array
          selectedFiles.push(file);
        }
      });
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

    const formData = new FormData();

    if (singleFile) {
      formData.append("singleImage", singleFile);
    }

    if (multiFiles.length > 0) {
      for (let i = 0; i < multiFiles.length; i++) {
        formData.append("multiImages[]", multiFiles[i]);
      }
    }
    formData.append("proName", proName);

    $.ajax({
      url: "./ajax/product/productAdd.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        console.log(response);

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
          });
        }
      },
    });
  });
});
