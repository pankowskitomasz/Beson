
$(".gallery-nav a").click(function(){
    var ref = $(this).text().toLowerCase();
    var items = $(".gallery").find(".item");
    if(ref!="alles"){
        for(var i=0;i< items.length; i++){
if($(items[i]).attr("data-ext")==ref){
    $(items[i]).parent().fadeOut(1000);
}			
        }
    }
    else{
        $(".gallery").find(".item").parent().fadeIn();
    }
});
$(".gallery .item a").click(function(){
    var ref = $(this).find("img").attr("src");
    var gallRef = $(this).attr("data-target");
    var crsRef = $(gallRef+" .carousel").attr("id");
    var imgsArr = $(gallRef+" .carousel-inner").find("img");
    for(var i=0;i<imgsArr.length;i++){
        if($(imgsArr[i]).attr("src")==ref){
    $(("#"+crsRef)).carousel(i);
    break;
            }
        }
    });
$("#crs").carousel('pause');