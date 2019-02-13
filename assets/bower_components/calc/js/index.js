$(document).ready(function() {

  var string = "";

  /* Calculator input string */
  $(".value").click(function() {
    string += $(this).text();
    $("#calc").text(string);
  });

  /* Clear all */
  $(".C").click(function() {
    string = "";
    $("#calc, #result").text("0");
  });
  /* Clear last entry */
  $(".CE").click(function() {
    string = string.slice(0, string.length - 1);
    $("#calc").text(string);
  });

  /* Show result */
  $(".equals").click(function() {
    $("#result").text(eval(string));
  });
  
  $(document).keypress(function(event){
    console.log(event.which);
    //0
    if(event.which == 48){
      string += 0;
      $("#calc").text(string);
    }
    if(event.which == 49){
      string += 1;
      $("#calc").text(string);
    }
    if(event.which == 50){
      string += 2;
      $("#calc").text(string);
    }
    if(event.which == 51){
      string += 3;
      $("#calc").text(string);
    }
    
    //+
    if(event.which == 43){
      string += '+';
      $("#calc").text(string);
    }
    
    if(event.which == 13){
      $("#result").text(eval(string));
    }
  });

});