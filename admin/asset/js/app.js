/*Get pages function*/
pageMenu = $(".page-menu");
var getPages = function(){
    $.get('getPagesProcess', function(response){
        pageMenu.html(response);
    });
}