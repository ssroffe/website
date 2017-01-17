$(document).ready(function(){
    var url = window.location.href;
    var currentPage = url.substr(url.indexOf("#") + 1);
    if(currentPage == "Home"){
        $("#navHome").attr("class","tab active");
    } else if(currentPage == "Functions"){
        $("#navFunctions").attr("class","tab active");
        
    }
});