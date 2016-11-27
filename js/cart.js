function cart(id)
    {
    var ele=document.getElementById(id);
    var img_src=ele.getElementsByTagName("img")[0].src;
    var name=document.getElementById(id+"_name").value;
    var price=document.getElementById(id+"_price").value;
  
    alertify.notify('<font style="color:darkgreen;"><b>'+name+' <br> '+price+'</b><br> was added to the cart.', 'success', 5, function(){  console.log('Added '+name+' ('+price+') to cart.'); });

    $.ajax({
        type:'post',
        url:'store_items.php',
        data:{
          item_src:img_src,
          item_name:name,
          item_price:price
        },
        success:function(response) {
          document.getElementById("total_items").value=response;
        }
      });
    
    update_cart();

    }
    function empty_cart(id)
    {
  
    alertify.notify('<font style="color:darkred;"><b>You emptied the cart.</b>', 'error', 5, function(){  console.log('Cart was emptied by the user.'); });

    $.ajax({
        type:'post',
        url:'store_items.php',
        data:{
          cart_action:'empty'
        },
        success:function(response) {
          document.getElementById("total_items").value=0;
          $("#mycart").slideToggle();
        }
      });
  
    }

    function show_cart()
    {
      $.ajax({
      type:'post',
      url:'store_items.php',
      data:{
        showcart:"cart"
      },
      success:function(response) {
        document.getElementById("mycart").innerHTML=response;
        $("#mycart").slideToggle();
      }
     });

    }

    function update_cart()
    {
      $.ajax({
      type:'post',
      url:'store_items.php',
      data:{
        showcart:"cart"
      },
      success:function(response) {
        if($('#mycart').is(':hidden'))
        {
          $("#mycart").slideToggle();
          document.getElementById("mycart").innerHTML=response;
        }
        else
        {

          $("#mycart").slideToggle();
          document.getElementById("mycart").innerHTML=response;
          $("#mycart").slideToggle();
        }
      }
     });

    }