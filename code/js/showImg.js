$(function(){
    $("#photo").change(function(event) {
      var x = URL.createObjectURL(event.target.files[0]);
      $("#display_photo").attr("src",x);
      console.log(event);
    });
  })
  $(function(){
    $("#file").change(function(event) {
      var x = URL.createObjectURL(event.target.files[0]);
      $("#display_file").attr("src",x);
      console.log(event);
    });
  })