$(function(){
  getProducts();
});

function getProducts(){


  $.ajax({
    url: "php/getProducts.php",
    type: "GET",
    async: true,
    success: function(resp){

      $("#prodottiBiologici").html("");

      $("#antiquariato").html("");

      $("#vestiti").html("");

      var tmp = "";

      for (var i = 0; i < resp.products.length; i++) {
        tmp = "";
        tmp += '<div class="col-sm-4">';
        tmp += '<div class="product-image-wrapper"><div class="single-products"><div class="productinfo text-center">';
        tmp += '<img src="images/products/'+resp.products[i].id+'.jpg" alt="" />';
        tmp += '<h2>€'+resp.products[i].prezzo+'</h2><p>'+resp.products[i].nome+'</p>';
        tmp += '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>';
        tmp += '</div><div class="product-overlay"><div class="overlay-content"><h2>€'+resp.products[i].prezzo+'</h2>';
        tmp += '<p>'+resp.products[i].nome+'</p>';
        tmp += '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>';
        tmp += '</div></div></div></div></div>';
        $("#allProd").append(tmp);
      }
      // 
      // var c = 0;
      // tmp = "";
      //
      // for (i = 0; i < resp.products.length; i++) {
      //   if(c = 0)
      //     tmp += '<div class="item">';
      //   if(c < 3){
      //     tmp += '<div class="col-sm-4"><div class="product-image-wrapper"><div class="single-products">';
      //     tmp += '<div class="productinfo text-center"><img src="images/products/'+resp.products[i].id+'.jpg" alt="'+resp.products[i].descrizione+'" />';
      //     tmp += '<h2>€'+resp.products[i].prezzo+'</h2><p>'+resp.products[i].nome+'</p>';
      //     tmp += '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a></div></div></div></div>';
      //
      //     c++;
      //   }else {
      //     c = 0;
      //   }
      //   tmp += '</div>';
      //   $("#recommProd").append(tmp);
      // }

      for (i = 0; i < resp.products; i++) {
        tmp = "";
        tmp = '<div class="col-sm-3"><div class="product-image-wrapper"><div class="single-products"><div class="productinfo text-center">';
        tmp += '<img src="images/products/'+resp.products[i].id+'.jpg" alt="'+resp.products[i].descrizione+'" />';
        tmp += '<h2>€'+resp.products[i].prezzo+'</h2>';
        tmp += '<p>'+resp.products[i].nome+'</p>';
        tmp += '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a></div></div></div></div>';
        if(resp.products[i].id_categoria == 1){
          $("#prodottiBiologici").append(tmp);
        }else{
          if(resp.products[i].id_categoria == 2){
            $("#vestiti").append(tmp);
          }else{
            $("#antiquariato").append(tmp);
          }
        }
      }

    },
    error: function(err){
      console.log(err);
    }
  });

}
