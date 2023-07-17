$(document).ready(() => {
  $("#SelectPCat").on("change", () => {
    const catId = $("#SelectPCat").val();
    catId ||
      ($("#SelectPSCat").empty() &&
        $("#SelectPSCat").append(`
                        <option value="">--- Select Sub Category ---</option>
                `) &&
        $("#SelectPSSCat").empty() &&
        $("#SelectPSSCat").append(`
                        <option value="">--- Select Sub-sub Category ---</option>
                `));
    catId &&
      $.get(`./ajax/product/getSubCat?id=${catId}`, (res) => {
        var alu = JSON.parse(res);
        if (alu.length > 0) {
          $("#SelectPSCat").empty();
          $("#SelectPSCat").append(`
                        <option value="">--- Select Sub Category ---</option>
                    `);
          alu?.map((data) => {
            $("#SelectPSCat").append(`
                        <option value="${data.id}">${data.name}</option>
                    `);
          });
        } else {
          $("#SelectPSCat").empty();
          $("#SelectPSCat").append(`
                        <option value="">Data Not Found</option>
                `);
        }
      });
  });
  $("#SelectPSCat").on("change", () => {
    const catId = $("#SelectPSCat").val();
    catId ||
      ($("#SelectPSSCat").empty() &&
        $("#SelectPSSCat").append(`
                        <option value="">--- Select Sub-sub Category ---</option>
                `));
    catId &&
      $.get(`./ajax/product/getSubSubCat?id=${catId}`, (res) => {
        var alu = JSON.parse(res);
        if (alu.length > 0) {
          $("#SelectPSSCat").empty();
          $("#SelectPSSCat").append(`
                        <option value="">--- Select Sub-sub Category ---</option>
                    `);
          alu?.map((data) => {
            $("#SelectPSSCat").append(`
                        <option value="${data.id}">${data.name}</option>
                    `);
          });
        } else {
          $("#SelectPSSCat").empty();
          $("#SelectPSSCat").append(`
                        <option value="">Data Not Found</option>
                `);
        }
      });
  });
});
