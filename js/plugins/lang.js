
/*
    $(document).ready(function () {
        var esImgLink = "http://popol.es/img/flag/es.png";
        var engImgLink = "http://popol.es/img/flag/eng.png";

        var imgBtnSel = $('#imgBtnSel');
        var imgBtnEs = $('#imgBtnEs');
        var imgBtnEng = $('#imgBtnEng');;


        var spanNavSel = $('#lanNavSel');
        var spanBtnSel = $('#lanBtnSel');

        imgBtnSel.attr("src", esImgLink);
        imgBtnEs.attr("src", esImgLink);
        imgBtnEng.attr("src", engImgLink);

        imgNavSel.attr("src", esImgLink);
        imgNavEs.attr("src", esImgLink);
        imgNavEng.attr("src", engImgLink);

        $(".language").on("click", function (event) {
            var currentId = $(this).attr('id');

            if (currentId === "navEs") {
                imgNavSel.attr("src", esImgLink);
                spanNavSel.text("ES");
            } else if (currentId === "navEng") {
                imgNavSel.attr("src", engImgLink);
                spanNavSel.text("ENG");
            }

            if (currentId === "btnEs") {
                imgBtnSel.attr("src", esImgLink);
                spanBtnSel.text("ES");
            } else if (currentId === "btnEng") {
                imgBtnSel.attr("src", engImgLink);
                spanBtnSel.text("ENG");
            }
        });
    });
*/

    $(window).scroll(function () {
        if ($(this).scrollTop() < 100) {
            $('#lang').fadeIn();
        } else {
            if($(window).width() < 800){
                $('#lang').fadeOut();
            }else{
                $('#lang').fadeIn();
            }
        }
    });
