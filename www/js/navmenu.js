$(document).ready(function(){
    $("#navHome").click(function(){
        $("#content").load('resources/home.html');
        resetMenu();
        $("#navHome").attr("class","tab active");
    });
});

$(document).ready(function(){        
    $("#navGiftExchange").click(function(){
        $("#content").load('resources/geHome.html');
        resetMenu();
        $("#navGiftExchange").attr("class","tab active");
    });
});

$(document).ready(function(){        
    $("#navAbout").click(function(){
        $("#content").load('resources/about.html');
        resetMenu();
        $("#navAbout").attr("class","tab active");
    });
});

$(document).ready(function(){        
    $("#navContact").click(function(){
        $("#content").load('resources/contact.html');
        resetMenu();
        $("#navContact").attr("class","tab active");
    });
});

$(document).ready(function(){        
    $("#navUpdates").click(function(){
        $("#content").load('resources/geHome.html');
        resetMenu();
        $("#navUpdates").attr("class","tab active");
    });
});

$(document).ready(function(){        
    $("#navSuggestions").click(function(){
        $("#content").load('resources/geHome.html');
        resetMenu();
        $("#navSuggestions").attr("class","tab active");
    });
});

$(document).ready(function(){
    var url = window.location.href;
    var currentPage = url.substr(url.indexOf("#") + 1);
    if(currentPage == "Home"){
        $("#navHome").attr("class","tab active");
        $("#content").load('home.html');
    } else if(currentPage == "GiftExchange"){
        $("#navGiftExchange").attr("class","tab active");
        $("#content").load('resources/geHome.html');
    }
});

function resetMenu(){
    $("#navHome").attr("class","tab");
    $("#navGiftExchange").attr("class","tab");
    $("#navAbout").attr("class","tab");
    $("#navContact").attr("class","tab");
    $("#navUpdates").attr("class","tab");
    $("#navSuggestions").attr("class","tab");
}
