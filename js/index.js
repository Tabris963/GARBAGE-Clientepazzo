$(function(){
  getProducts();
});

function getProducts(){


  $.ajax({
    url: "php/getProducts.php",
    type: "GET",
    async: true,
    success: function(resp){
      console.log(resp);
    },
    error: function(err){
      console.log(err);
    }
  });

}
