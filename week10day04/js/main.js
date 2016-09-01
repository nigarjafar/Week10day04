$("#menusetting").hide();
$("#blogsetting").hide();

$("#menuadd").hide();
$("#menuedit").hide();

$("#blogadd").hide();
$("#blogedit").hide();


//Menu
$("#menubutton").on('click',function(){
    $(".btn").removeClass("active");
    $("#menusetting").toggle();
    $(this).addClass("active")
})

$("#addbutton").on('click',function(){
    $("#menuadd").toggle();
    $("#menuedit").hide();
})

$("#editbutton").on('click',function(){
    $("#menuedit").toggle();
    $("#menuadd").hide();
})


//Blog post
$("#blogbutton").on('click',function(){
    $(".btn").removeClass("active");
    $("#blogsetting").toggle();
    $(this).addClass("active")
})

$("#addblogbutton").on('click',function(){
    $("#blogadd").toggle();
    $("#blogedit").hide();
})

$("#editblogbutton").on('click',function(){
    $("#blogedit").toggle();
    $("#blogadd").hide();
})

