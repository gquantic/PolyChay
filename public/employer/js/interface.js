// Кнопка скрыть меню
var menuMinimalize = false;

$('#minimalize_verticalmenu').on('click',function(){
    if(menuMinimalize == false){
        $(this).html("<svg \n" +
            " xmlns=\"http://www.w3.org/2000/svg\"\n" +
            " xmlns:xlink=\"http://www.w3.org/1999/xlink\"\n" +
            " width=\"14px\" height=\"25px\">\n" +
            "<path fill-rule=\"evenodd\"  fill=\"rgb(240, 108, 96)\"\n" +
            " d=\"M1.254,24.131 C0.890,23.768 0.889,23.178 1.253,22.813 L10.914,13.133 C11.277,12.769 11.277,12.178 10.913,11.814 L1.253,2.134 C0.889,1.770 0.890,1.180 1.254,0.816 C1.619,0.453 2.209,0.453 2.572,0.818 L12.232,10.497 C12.777,11.042 13.050,11.758 13.050,12.474 C13.050,13.190 12.777,13.906 12.233,14.450 L2.572,24.130 C2.209,24.494 1.619,24.495 1.254,24.131 Z\"/>\n" +
            "</svg>");

        // Удаление колов
        $('#header-col').addClass('col-lg-2');
        $('#header-col').removeClass('col-lg-3 col-xl-3');

        $('#vertical-menu').addClass('menu-vertical-minimalize');
        $('#vertical-menu').removeClass('menu-vertical');
        menuMinimalize = true;
    }else{
        $(this).html('<svg\n' +
            '                                        xmlns="http://www.w3.org/2000/svg"\n' +
            '                                        xmlns:xlink="http://www.w3.org/1999/xlink"\n' +
            '                                        width="14px" height="25px">\n' +
            '                                    <path\n' +
            '                                          d="M12.777,24.131 C13.141,23.768 13.142,23.178 12.778,22.813 L3.117,13.133 C2.754,12.769 2.754,12.178 3.118,11.814 L12.778,2.134 C13.142,1.770 13.141,1.180 12.777,0.816 C12.412,0.453 11.822,0.453 11.459,0.818 L1.799,10.497 C1.254,11.042 0.981,11.758 0.981,12.474 C0.981,13.190 1.254,13.906 1.798,14.450 L11.459,24.130 C11.822,24.494 12.412,24.495 12.777,24.131 Z"/>\n' +
            '                                </svg>');

        // Удаление колов
        $('#header-col').addClass('col-lg-3 col-xl-3');
        $('#header-col').removeClass('col-lg-2');

        $('#vertical-menu').addClass('menu-vertical');
        $('#vertical-menu').removeClass('menu-vertical-minimalize');
        menuMinimalize = false;
    }
});
