$(function(){
  getSingleProduct();
});

function getSingleProduct(){
  $.ajax({
    url: "php/getSingleProduct.php",
    type: "GET",
    async: true,
    success: function(resp){
      //console.log(resp);
      popolateProduct(resp);
    },
    error: function(err){
      console.log(err);
    }
  });

}

function popolateProduct(singleProduct){
  console.log(singleProduct);
  console.log(singleProduct.products[0].nome);
  productName = '<h3>'
              + singleProduct.products[0].nome
              +'</h3>';
  productPrice = '<h4>'
              + singleProduct.products[0].prezzo
              +'€</h4>';
  productDescription = '<p>'
              + singleProduct.products[0].descrizione
              +'</p>';
  document.getElementById("productName").innerHTML = productName;
  document.getElementById("productPrice").innerHTML = productPrice;
  document.getElementById("productDescription").innerHTML = productDescription;
}
