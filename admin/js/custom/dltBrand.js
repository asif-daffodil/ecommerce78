$(document).on("click", ".dltBrand", function () {
  const brandId = $(this).attr("data-brandId");

  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete!",
  }).then((result) => {
    if (result.isConfirmed) {
      deleteFunc();
      $(this).closest("tr").remove();
    }
  });

  function deleteFunc() {
    $.ajax({
      url: "./ajax/dltBrand.php",
      type: "GET",
      data: {
        brandId: brandId,
        getSuccess: "success",
      },
      success: function (data) {
        if (data.error) {
          Swal.fire({
            title: "Error!",
            text: msg,
            icon: "error",
            confirmButtonText: "Sure",
          });
        } else {
          Swal.fire({
            icon: "success",
            title: "Your brand has been deleted.",
            confirmButtonText: "Ok",
          });
        }
      },
    });
  }
});
