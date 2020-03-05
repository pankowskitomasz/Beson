$("input, textarea").on("paste",function(){
    return false;
});
    
function checkFormText(){
    var inputArray = $("input[type='text']");
    var rgx = new RegExp(/[^a-zA-Z]+$/i);  
    for(var i=0;i<inputArray.length;i++){
        if(inputArray[i].value.match(rgx)){
            return false;
        }
    }
    return true;
}
    
function checkFormTel(){
    var inputArray = $("input[type='tel']");
    var rgx = new RegExp(/[^0-9]+$/i);  
    for(var i=0;i<inputArray.length;i++){
        if(inputArray[i].value.match(rgx)){
            return false;
        }
    }
    return true;
}
    
function checkFormEmail(){
    var inputArray = $("input[type='email']");
    var rgx = new RegExp(/[^a-zA-Z0-9.@]+$/i);
    for(var i=0;i<inputArray.length;i++){
        if(inputArray[i].value.match(rgx)){
            return false;
        }
    }
    return true;
}
    
function checkFormTextarea(){
    var inputArray = $("input[type='textarea']");
    var rgx = new RegExp(/[^a-zA-Z0-9.,!?#\- ]+$/i);
    for(var i=0;i<inputArray.length;i++){
        if(inputArray[i].value.match(rgx)){
            return false;
        }
    }
    return true;
}
    
function checkForm(){
    if(checkFormText()===true
        && checkFormTel()===true
        && checkFormEmail()===true
        && checkFormTextarea()===true){
            return true;
        }
    return false;
}
    
function swapTarget(){
    $("form").eq(0).attr("action","confirm#message");
}
    
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
    
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
    
function acceptPrivacyPolicy(){
    setCookie("privacy_accepted","1",1);
    $("#privacyModal").modal('hide');
}
    
function gpdrDeclaration(){
    if(getCookie("privacy_accepted")!="1"){
        $("#privacyModal").modal();
    }
}
        
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

gpdrDeclaration();
setTimeout(swapTarget,11000);