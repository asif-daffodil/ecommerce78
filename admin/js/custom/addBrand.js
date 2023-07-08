$("#add_Brand").click(function () {
  var formData = new FormData();
  const brand_img = $("#brand_img")[0].files[0];
  const brand_name = $("#brand_name").val();
  const brands_des = $("#brands_des").val();

  formData.append("brand_img", brand_img);
  formData.append("brand_name", brand_name);
  formData.append("brands_des", brands_des);
  formData.append("brandAdd", "ok");

  $.ajax({
    url: "./ajax/addBrands.php",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function (response) {
      console.log(response);
      var response = JSON.parse(response);
      var error = response.error;
      var msg = response.msg;

      if (error === true) {
        Swal.fire({
          title: "Error!",
          text: msg,
          icon: "error",
          confirmButtonText: "Sure",
        });
      } else {
        Swal.fire({
          icon: "success",
          title: msg,
          showConfirmButton: true,
        }).then(() => {
          location.reload();
        });
      }
    },
  });
});
