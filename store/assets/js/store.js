function handleBackplate(event){
  //Character Backplate
  var data = $(this).attr("data");
  if(data != null){
    $("." + data).css("visibility", "visible");
    console.log($(this).attr("data"));
  } else {
    console.log("NO DATA");
  }
};

$(".char-avatar").on("click", handleBackplate);
