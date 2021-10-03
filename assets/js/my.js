
function validatemyform(){
  var a = $("#name").val();
  var b = $("#email").val();
  var c = $("#subject").val();
  var d = $("#msg").val();

if (a == "" || b == "" || c == "" || d == "") {
  alert("Pease fill all details");
}else{
	  $("#succ-msg").show();
}
}


$( window ).load(function() {
  $("#succ-msg").hide();

});

