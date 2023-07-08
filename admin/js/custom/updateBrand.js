$(document).on("click", ".upBrandBtn", function () {
  const brandId = $(this).attr("data-brandId");
  const brandImg = $(this).attr("data-brandImg");
  const brandName = $(this).attr("data-brandName");
  const brandDes = $(this).attr("data-brandDes");

  $("#brands_Id").val(brandId);
  $("#brand_imgModalSrc").attr("src", "../" + brandImg);
  $("#update_brandName").val(brandName);
  $("#update_brandDetails").val(brandDes);

  $("#updateBrands").modal("show");
});

$(document).ready(function () {
  $("#updateImageSrc").change(function () {
    var file = this.files[0];
    var reader = new FileReader();

    reader.onload = function (e) {
      $("#brand_imgModalSrc").attr("src", e.target.result);
    };

    reader.readAsDataURL(file);
  });
});

$(document).on("click", "#upBrandData", function () {
  var formData = new FormData();

  const upbrandImg = $("#updateImageSrc")[0].files[0];
  const brandId = $("#brands_Id").val();
  const upBrandName = $("#update_brandName").val();
  const upBrandDetails = $("#update_brandDetails").val();

  formData.append("upbrandImg", upbrandImg);
  formData.append("brandId", brandId);
  formData.append("upBrandName", upBrandName);
  formData.append("upBrandDetails", upBrandDetails);
  formData.append("upForm", "ok");

  $.ajax({
    url: "./ajax/upBrands.php",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function (res) {
      var res = JSON.parse(res);
      var error = res.error;
      var msg = res.msg;

      if (error === true) {
        $("#upBrandError").text(msg);
        $("#upBrandError").removeClass("text-success");
        $("#upBrandError").addClass("text-danger");
      } else {
        $("#upBrandError").text(msg);
        $("#upBrandError").removeClass("text-danger");
        $("#upBrandError").addClass("text-success");
        setInterval(function () {
          location.reload();
        }, 3000);
      }
    },
  });
});
