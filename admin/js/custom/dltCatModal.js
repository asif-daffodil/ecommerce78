$(document).on("click", ".dltcat", function () {
  const catId = $(this).attr("data-catId");
  const catWhich = $(this).attr("data-catWhich");
  const serialNo = $(this).attr("data-serialNo");

  $("#dltCatWhich").html(catWhich);
  $("#dltCatSerialNo").html(serialNo);
  $("#getCatIdAttr").val(catId);
  $("#getWhichCatAttr").val(catWhich);

  $("#deleteModal").modal("show");
});

$(document).on("click", "#deleteCat", function () {
  const getCatIdAttr = $("#getCatIdAttr").val();
  const getWhichCatAttr = $("#getWhichCatAttr").val();

  $.ajax({
    url: "./ajax/delete_cat.php",
    type: "GET",
    data: {
      getWhichCatAttr: getWhichCatAttr,
      getCatIdAttr: getCatIdAttr,
      dltRequest: "success",
    },
    success: function (res) {
      console.log(res);
      if (res === "error") {
        $(".allDltMsg").text("Data Can't Exist!");
        setTimeout(function () {
          $(".allDltMsg").text("");
        }, 5000);
      } else if (res === "exists_child") {
        $(".allDltMsg").text(
          "This data has a child so you need to delete the child first!"
        );
        setTimeout(function () {
          $(".allDltMsg").text("");
        }, 5000);
      } else if (res === "deleted") {
        $(".allDltMsg").text("Data Deleted successfully!");
        $(".allDltMsg").removeClass("text-danger");
        $(".allDltMsg").addClass("text-success");
        setInterval(function () {
          location.href = "./productsCategory.php";
        }, 2000);
      }
    },
  });
});
