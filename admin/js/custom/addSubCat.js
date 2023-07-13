$(document).ready(() => {
    $("#SelectPCat").on("change", () => {
        const catId = $("#SelectPCat").val();
        $.get(`./ajax/product/getSubCat?id=${catId}`, (res) => {
            var alu = JSON.parse(res);
            if (alu.length > 0) {
                $("#SelectPSCat").empty();
                alu?.map(data => {
                    $("#SelectPSCat").append(`
                        <option value="${data.id}">${data.name}</option>
                    `);
                });
            }else{
                $("#SelectPSCat").empty();
                $("#SelectPSCat").append(`
                        <option value="">Data Not Found</option>
                `);
            }
        });
    });
});

