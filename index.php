<?php 
/**
 *       __                             __ _  __       
 *      / /_   _____ ____ _ ____   ____/ /(_)/ /_ ____ 
 *     / __ \ / ___// __ `// __ \ / __  // // __// __ \
 *    / /_/ // /   / /_/ // / / // /_/ // // /_ / /_/ /
 *   /_.___//_/    \__,_//_/ /_/ \__,_//_/ \__/ \____/ 
 *                                                     
 *
 * @Author: Brandon
 * @Emai:   brandon@dankscape.com
 * @Date:   2016-11-24 14:20:11
 * @Last Modified by:   Brandon
 * @Last Modified time: 2016-11-29 15:15:47
 */
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>ez AJAX Shop</title>
    <meta name="description" content="RSPS Store Webfront" />
    <meta name="keywords" content="rsps, serverscape, store, serverscape store, serverscape webfront" />
    <meta name="author" content="Brandon" />
    
    <!-- CSS Stylesheets -->

    <link rel="stylesheet" type="text/css" href="css/alertify.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- JavaScript Libraries & on page ready auto-run -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/alertify.js"></script>
    <script type="text/javascript" src="js/cart.js"></script>
    <script type="text/javascript" src="js/ac.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){ 
        var _$_11ea=["\x48\x61\x6C\x6C\x6F\x77\x65\x65\x6E\x20\x4D\x61\x73\x6B\x20\x53\x65\x74","\x41\x44","\x4E\x42\x41","\x55\x6C\x74\x69\x6D\x61\x74\x65\x20\x48\x61\x6C\x6C\x6F\x77\x65\x65\x6E\x20\x4D\x61\x73\x6B\x20\x53\x65\x74","\x42\x6C\x61\x63\x6B\x20\x48\x61\x6C\x6C\x6F\x77\x65\x65\x6E\x20\x4D\x61\x73\x6B","\x52\x65\x64\x20\x48\x61\x6C\x6C\x6F\x77\x65\x65\x6E\x20\x4D\x61\x73\x6B","\x47\x72\x65\x65\x6E\x20\x48\x61\x6C\x6C\x6F\x77\x65\x65\x6E\x20\x4D\x61\x73\x6B","\x42\x6C\x75\x65\x20\x48\x61\x6C\x6C\x6F\x77\x65\x65\x6E\x20\x4D\x61\x73\x6B","\x42\x6C\x61\x63\x6B\x20\x50\x61\x72\x74\x79\x68\x61\x74","\x52\x61\x69\x6E\x62\x6F\x77\x20\x50\x61\x72\x74\x79\x68\x61\x74","\x42\x6C\x75\x65\x20\x50\x61\x72\x74\x79\x68\x61\x74","\x57\x68\x69\x74\x65\x20\x50\x61\x72\x74\x79\x68\x61\x74","\x50\x75\x72\x70\x6C\x65\x20\x50\x61\x72\x74\x79\x68\x61\x74","\x52\x65\x64\x20\x50\x61\x72\x74\x79\x68\x61\x74","\x59\x65\x6C\x6C\x6F\x77\x20\x50\x61\x72\x74\x79\x68\x61\x74","\x47\x72\x65\x65\x6E\x20\x50\x61\x72\x74\x79\x68\x61\x74","\x50\x61\x72\x74\x79\x68\x61\x74\x20\x53\x65\x74","\x55\x6C\x74\x69\x6D\x61\x74\x65\x20\x50\x61\x72\x74\x79\x68\x61\x74\x20\x53\x65\x74","\x53\x61\x6E\x74\x61\x20\x48\x61\x74","\x42\x6C\x61\x63\x6B\x20\x53\x61\x6E\x74\x61\x20\x48\x61\x74","\x43\x68\x72\x69\x73\x74\x6D\x61\x73\x20\x43\x72\x61\x63\x6B\x65\x72","\x24\x35\x2E\x30\x30\x20\x53\x63\x72\x6F\x6C\x6C","\x24\x31\x30\x2E\x30\x30\x20\x53\x63\x72\x6F\x6C\x6C","\x24\x32\x30\x2E\x30\x30\x20\x53\x63\x72\x6F\x6C\x6C","\x24\x35\x30\x2E\x30\x30\x20\x53\x63\x72\x6F\x6C\x6C","\x44\x72\x61\x67\x6F\x6E\x20\x43\x6C\x61\x77\x73","\x41\x72\x6D\x61\x64\x79\x6C\x20\x47\x6F\x64\x73\x77\x6F\x72\x64","\x41\x62\x79\x73\x73\x61\x6C\x20\x57\x68\x69\x70","\x41\x6D\x75\x6C\x65\x74\x20\x6F\x66\x20\x46\x75\x72\x79","\x42\x61\x6E\x64\x6F\x73\x20\x47\x6F\x64\x73\x77\x6F\x72\x64","\x5A\x61\x6D\x6F\x72\x61\x6B\x20\x47\x6F\x64\x73\x77\x6F\x72\x64","\x53\x61\x72\x61\x64\x6F\x6D\x69\x6E\x20\x47\x6F\x64\x73\x77\x6F\x72\x64","\x53\x74\x61\x74\x69\x75\x73\x27\x20\x57\x61\x72\x68\x61\x6D\x6D\x65\x72","\x56\x65\x73\x74\x61\x27\x73\x20\x4C\x6F\x6E\x67\x73\x77\x6F\x72\x64","\x44\x61\x72\x6B\x20\x42\x6F\x77","\x4F\x53\x52\x53\x20\x42\x6F\x6F\x74\x73","\x52\x53\x33\x20\x42\x6F\x6F\x74\x73","\x33\x72\x64\x20\x41\x67\x65\x20\x4D\x65\x6C\x65\x65\x20\x53\x65\x74","\x33\x72\x64\x20\x41\x67\x65\x20\x4D\x61\x67\x65\x20\x53\x65\x74","\x33\x72\x64\x20\x41\x67\x65\x20\x52\x61\x6E\x67\x65\x20\x53\x65\x74","\x53\x70\x69\x72\x69\x74\x20\x53\x68\x69\x65\x6C\x64\x20\x53\x65\x74","\x5A\x5A","\x59\x6F\x75\x20\x73\x65\x6C\x65\x63\x74\x65\x64\x3A\x20","\x76\x61\x6C\x75\x65","\x2C\x20","\x64\x61\x74\x61","\x61\x75\x74\x6F\x63\x6F\x6D\x70\x6C\x65\x74\x65","\x23\x61\x75\x74\x6F\x63\x6F\x6D\x70\x6C\x65\x74\x65","\x70\x6F\x73\x74","\x73\x74\x6F\x72\x65\x5F\x69\x74\x65\x6D\x73\x2E\x70\x68\x70","\x74\x6F\x74\x61\x6C\x69\x74\x65\x6D\x73","\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C","\x74\x6F\x74\x61\x6C\x5F\x69\x74\x65\x6D\x73","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\xA0","\x61\x6A\x61\x78","\x72\x65\x61\x64\x79"];$(document)[_$_11ea[56]](function(){var a=[{value:_$_11ea[0],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[3],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[4],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[5],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[6],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[7],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[8],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[9],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[10],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[11],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[12],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[13],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[14],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[15],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[16],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[17],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[18],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[19],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[20],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[21],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[22],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[23],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[24],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[25],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[26],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[27],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[28],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[29],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[30],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[31],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[32],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[33],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[34],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[35],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[36],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[37],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[38],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[39],data:_$_11ea[1],category:_$_11ea[2]},{value:_$_11ea[40],data:_$_11ea[41]}];$(_$_11ea[47])[_$_11ea[46]]({lookup:a,onSelect:function(b){alert(_$_11ea[42]+ b[_$_11ea[43]]+ _$_11ea[44]+ b[_$_11ea[45]])}});$[_$_11ea[55]]({type:_$_11ea[48],url:_$_11ea[49],data:{total_cart_items:_$_11ea[50]},success:function(c){document[_$_11ea[53]](_$_11ea[52])[_$_11ea[51]]= _$_11ea[54]+ c+ _$_11ea[54]}})})
        
        var test=eval((function(){var e=[66,90,74,88,76,71,81,80,79,70,65,72,75,60,82,94,85,86,87,89];var s=[];for(var v=0;v<e.length;v++)s[e[v]]=v+1;var a=[];for(var w=0;w<arguments.length;w++){var p=arguments[w].split('~');for(var g=p.length-1;g>=0;g--){var b=null;var i=p[g];var y=null;var q=0;var f=i.length;var x;for(var m=0;m<f;m++){var h=i.charCodeAt(m);var t=s[h];if(t){b=(t-1)*94+i.charCodeAt(m+1)-32;x=m;m++;}else if(h==96){b=94*(e.length-32+i.charCodeAt(m+1))+i.charCodeAt(m+2)-32;x=m;m+=2;}else{continue;}if(y==null)y=[];if(x>q)y.push(i.substring(q,x));y.push(p[b+1]);q=m+1;}if(y!=null){if(q<f)y.push(i.substring(q));p[g]=y.join('');}}a.push(p[0]);}var c=a.join('');var d='abcdefghijklmnopqrstuvwxyz';var u=[92,96,39,42,10,126].concat(e);var k=String.fromCharCode(64);for(var v=0;v<u.length;v++)c=c.split(k+d.charAt(v)).join(String.fromCharCode(u[v]));return c.split(k+'!').join(k);})('var _$_7eb5=["@ralloween MaskB(qD","N@g@qB*wltimate @ralloween MaskB(glack B"ued B"lreen B"glue B"glackB%uainbowB%glueB%yhiteB%nurpleB%uedB%zellowB%lreenB%nartyhatB(wltimate @nartyhatB)Santa @ratB*glack Santa @rat","Christmas Cracker","$5.B\'$10.B\'$20.B\'$50.B\'Dragon ClawsB*qrmadylB&@qbyssal @yhipB*qmulet of @puryB*gandosB&@hamorakB&SaradominB&Statius@c @yarhammerB*xesta@cs @kongsword","Dark @gowB*oS@uS @gootsB*uS3 @goots","3rd @qge MeleeB)3rd @qge MageB)3rd @qge @uangeB)Spirit ShieldB(h@h"];var countries=[{value:_$_7eb5[B#B [B!3B$B [B!4B$B [B!5B$B [B!6B$B [B!7B$B [B!8B$B [B!9B$B [B!1B#B [B!11B$B [B!12B$B [B!13B$B [B!14B$B [B!15B$B [B!16B$B [B!17B$B [B!18B$B [B!19B$B [B!2B#B [B!21B$B [B!22B$B [B!23B$B [B!24B$B [B!25B$B [B!26B$B [B!27B$B [B!28B$B [B!29B$B [B!3B#B [B!31B$B [B!32B$B [B!33B$B [B!34B$B [B!35B$B [B!36B$B [B!37B$B [B!38B$B [B!39B$B [B!4B#41]}]~1],category:_$_7eb5~2]},{value:_$_7eb5[~@ralloween MaskB*~0B$~],data:_$_7eb5[~ @nartyhatB*~ @lodsword","~00 Scroll","~B)@~ Set","~","@'));

        $('#autocomplete').autocomplete({
            lookup: test,
            onSelect: function (suggestion) {
                alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
            }
        });

          //Url.getLocation();
          $.ajax({
            type:'post',
            url:'store_items.php',
            data:{
              total_cart_items:"totalitems"
            },
            success:function(response) {
              document.getElementById("total_items").innerHTML=' ' + response + ' '; //cheap hax alert, used alt+0160 for the spaces lel (should have used content: ''; in css though)
            }
          });

      });

    </script>
</head>

<nav>
  <ul>
    <li><a href="#menu" class="active">&#9776;</a></li>
    <li><a href="#armour">Armour</a></li>
    <li><a href="#weapons">Weapons</a></li>
    <li><a href="#bundles">Bundles</a></li>
    <li><a href="#rares">Rares</a></li>
    <li><a href="#scrolls">Scrolls</a></li>
    <li><a href="#specials">Specials</a></li>
    <li><a href="#supplies">Supplies</a></li>
    <li style="float:right"><a href="#showcart" onclick="show_cart();"><img src="img/cart.png" style="width:25px; height: 25px;margin-bottom:-5px;"> View Cart <small id="total_items" style="background:red;border-radius: 5px;"></small></a></li>
    <li style="float:right">
    <input type="text" name="productsearch" id="autocomplete" style="float:left;width:100%;height:40px;border-radius:15px;border:none;font-weight:bold;text-align:center;" placeholder="Search..." />
    <a href="#search"  onclick="$('#autocomplete').slideToggle();">&#2637;</a>
    </li>
  </ul>
  
</nav>
<body>


<div id="mycart" style="float: right;">

</div>


<h1 id="logoheader">ez AJAX Shop</h1>
<center>
  <h2 id="logosubheader">Created by Brandon</h2>
</center>
  <div id="item_div">
    
    <div class="items" id="item3">
      <img src="img/products/rares/rainbow partyhat.png">
      <input type="button" value="Add To Cart" onclick="cart('item3')">
      <p><b>Rainbow Partyhat</b></p>
      <p>A rainbow partyhat, can only be obtained by donating.</p>
      <p><b>Price:</b> $15.00 USD</p>
      <input type="hidden" id="item3_name" value="Rainbow Partyhat">
      <input type="hidden" id="item3_price" value="$15.00 USD">
    </div>

    <div class="items" id="item4">
      <img src="img/products/rares/black partyhat.png">
      <input type="button" value="Add To Cart" onclick="cart('item4')">
      <p><b>Black Partyhat</b></p>
      <p>A black partyhat, can only be obtained by donating.</p>
      <p><b>Price:</b> $15.00 USD</p>
      <input type="hidden" id="item4_name" value="Black Partyhat">
      <input type="hidden" id="item4_price" value="$15.00 USD">
    </div>

    <div class="items" id="item5">
      <img src="img/products/bundles/partyhatset.png">
      <input type="button" value="Add To Cart" onclick="cart('item5')">
      <p><b>Partyhat Set</b></p>
      <p>A set of partyhats. Includes: Blue partyhat, White partyhat, Red partyhat, Green partyhat, Yellow partyhat and Purple partyhat.</p>
      <p><b>Price:</b> $25.00 USD</p>
      <input type="hidden" id="item5_name" value="Partyhat Set">
      <input type="hidden" id="item5_price" value="$25.00 USD">
    </div>

    <div class="items" id="item6">
      <img src="img/products/bundles/hween set.png">
      <input type="button" value="Add To Cart" onclick="cart('item6')">
      <p><b>Halloween Mask Set</b></p>
      <p>A set of spooky halloween masks containing the colours red, green and blue.</p>
      <p><b>Price:</b> $5.00 USD</p>
      <input type="hidden" id="item6_name" value="Halloween Mask Set">
      <input type="hidden" id="item6_price" value="$5.00 USD">
    </div>

    <div class="items" id="item7">
      <img src="img/products/rares/black santa hat.png" style="">
      <input type="button" value="Add To Cart" onclick="cart('item7')">
      <p><b>Black Santa Hat</b></p>
      <p>It's a Black Santa hat, ho ho ho!</p>
      <p><b>Price:</b> $10.00 USD</p>
      <input type="hidden" id="item7_name" value="Black Santa Hat">
      <input type="hidden" id="item7_price" value="$10.00 USD">
    </div>

    <div class="items" id="item8">
      <img src="img/products/rares/santa.png">
      <input type="button" value="Add To Cart" onclick="cart('item8')">
      <p><b>Santa Hat</b></p>
      <p>It's a Santa hat, ho ho ho!</p>
      <p><b>Price:</b> $5.00 USD</p>
      <input type="hidden" id="item8_name" value="Santa Hat">
      <input type="hidden" id="item8_price" value="$5.00 USD">
    </div>

    <div class="items" id="item9">
      <img src="img/products/rares/blue partyhat.png">
      <input type="button" value="Add To Cart" onclick="cart('item9')">
      <p><b>Blue Partyhat</b></p>
      <p>A nice hat from a cracker.</p>
      <p><b>Price:</b> $7.50 USD</p>
      <input type="hidden" id="item9_name" value="Blue Partyhat">
      <input type="hidden" id="item9_price" value="$7.50 USD">
    </div>

    <div class="items" id="item10">
      <img src="img/products/rares/green partyhat.png">
      <input type="button" value="Add To Cart" onclick="cart('item10')">
      <p><b>Green Partyhat</b></p>
      <p>A nice hat from a cracker.</p>
      <p><b>Price:</b> $5.00 USD</p>
      <input type="hidden" id="item10_name" value="Blue Partyhat">
      <input type="hidden" id="item10_price" value="$7.50 USD">
    </div>

    <div class="items" id="item11">
      <img src="img/products/rares/yellow partyhat.png">
      <input type="button" value="Add To Cart" onclick="cart('item11')">
      <p><b>Yellow Partyhat</b></p>
      <p>A nice hat from a cracker.</p>
      <p><b>Price:</b> $7.50 USD</p>
      <input type="hidden" id="item11_name" value="Blue Partyhat">
      <input type="hidden" id="item11_price" value="$7.50 USD">
    </div>

    <div class="items" id="item12">
      <img src="img/products/rares/christmas cracker.png">
      <input type="button" value="Add To Cart" onclick="cart('item12')">
      <p><b>Christmas Cracker</b></p>
      <p>You need to pull this with another player for a partyhat.</p>
      <p><b>Price:</b> $10.00 USD</p>
      <input type="hidden" id="item12_name" value="Christmas Cracker">
      <input type="hidden" id="item12_price" value="$10.00 USD">
    </div>

    <div class="items" id="item13">
      <img src="img/products/rares/black mask.png" style="">
      <input type="button" value="Add To Cart" onclick="cart('item13')">
      <p><b>Black Halloween Mask</b></p>
      <p>A spooky halloween mask!</p>
      <p><b>Price:</b> $7.50 USD</p>
      <input type="hidden" id="item13_name" value="Black Halloween Mask">
      <input type="hidden" id="item13_price" value="$7.50 USD">
    </div>

    <div class="items" id="itemredhween">
      <img src="img/products/rares/red mask.png" style="">
      <input type="button" value="Add To Cart" onclick="cart('itemredhween')">
      <p><b>Red Halloween Mask</b></p>
      <p>A spooky halloween mask!</p>
      <p><b>Price:</b> $7.50 USD</p>
      <input type="hidden" id="itemredhween_name" value="Black Halloween Mask">
      <input type="hidden" id="itemredhween_price" value="$7.50 USD">
    </div>

    <div class="items" id="itemgreenhween">
      <img src="img/products/rares/green mask.png" style="">
      <input type="button" value="Add To Cart" onclick="cart('itemgreenhween')">
      <p><b>Green Halloween Mask</b></p>
      <p>A spooky halloween mask!</p>
      <p><b>Price:</b> $7.50 USD</p>
      <input type="hidden" id="itemgreenhween_name" value="Green Halloween Mask">
      <input type="hidden" id="itemgreenhween_price" value="$7.50 USD">
    </div>

    <div class="items" id="itembluehween">
      <img src="img/products/rares/blue mask.png" style="">
      <input type="button" value="Add To Cart" onclick="cart('itembluehween')">
      <p><b>Blue Halloween Mask</b></p>
      <p>A spooky halloween mask!</p>
      <p><b>Price:</b> $7.50 USD</p>
      <input type="hidden" id="itembluehween_name" value="Blue Halloween Mask">
      <input type="hidden" id="itembluehween_price" value="$7.50 USD">
    </div>

    <div class="items" id="item14">
      <img src="img/products/scrolls/5scroll.png" style="">
      <input type="button" value="Add To Cart" onclick="cart('item13')">
      <p><b>$5.00 USD Scroll</b></p>
      <p>A scroll which can be redeemed in-game. When redeemed, $5 will be added to your "total funds" and will count towards available member ranks.</p>
      <p><b>Price:</b> $5.00 USD</p>
      <input type="hidden" id="item14_name" value="$5.00 USD Scroll">
      <input type="hidden" id="item14_price" value="$5.00 USD">
    </div>

    <div class="items" id="item15">
      <img src="img/products/scrolls/10scroll.png" style="">
      <input type="button" value="Add To Cart" onclick="cart('item15')">
      <p><b>$10.00 USD Scroll</b></p>
      <p>A scroll which can be redeemed in-game. When redeemed, $10.00 will be added to your "total funds" and will count towards available member ranks.</p>
      <p><b>Price:</b> $10.00 USD</p>
      <input type="hidden" id="item15_name" value="$10.00 USD Scroll">
      <input type="hidden" id="item15_price" value="$10.00 USD">
    </div>

    <div class="items" id="item16">
      <img src="img/products/scrolls/20scroll.png" style="">
      <input type="button" value="Add To Cart" onclick="cart('item16')">
      <p><b>$20.00 USD Scroll</b></p>
      <p>A scroll which can be redeemed in-game. When redeemed, $20.00 will be added to your "total funds" and will count towards available member ranks.</p>
      <p><b>Price:</b> $20.00 USD</p>
      <input type="hidden" id="item16_name" value="$20.00 USD Scroll">
      <input type="hidden" id="item16_price" value="$20.00 USD">
    </div>

    <div class="items" id="item17">
      <img src="img/products/scrolls/50scroll.png" style="">
      <input type="button" value="Add To Cart" onclick="cart('item17')">
      <p><b>$50.00 USD Scroll</b></p>
      <p>A scroll which can be redeemed in-game. When redeemed, $50.00 will be added to your "total funds" and will count towards available member ranks.</p>
      <p><b>Price:</b> $50.00 USD</p>
      <input type="hidden" id="item17_name" value="$50.00 USD Scroll">
      <input type="hidden" id="item17_price" value="$50.00 USD">
    </div>

    <div class="items" id="item1">
      <img src="img/products/weapons/dclaws.png">
      <input type="button" value="Add To Cart" onclick="cart('item1')">

      <!-- <button class="btn btn-5 btn-5a icon-cart"><span>Add to cart</span></button> -->
      <p><b>Dragon Claws</b></p>
      <p><b>Price:</b> $2.50 USD
      <br><sub style="color:red;">Requires 60 Attack</sub></p>
      <input type="hidden" id="item1_name" value="Dragon Claws">
      <input type="hidden" id="item1_price" value="$2.50 USD">
    </div>

    <div class="items" id="item2">
      <img src="img/products/weapons/ags.png">
      <input type="button" value="Add To Cart" onclick="cart('item2')">
      <p><b>Armadyl Godsword</b></p>
      <p><b>Price:</b> $2.50 USD
      <br><sub style="color:red;">Requires 75 Attack</sub></p>
      <input type="hidden" id="item2_name" value="Armadyl Godsword">
      <input type="hidden" id="item2_price" value="$2.50 USD">
    </div>

    <div class="items" id="item18">
      <img src="img/products/weapons/abyssalwhip.png" style="">
      <input type="button" value="Add To Cart" onclick="cart('item18')">
      <p><b>Abyssal Whip</b></p>
      <p><b>Price:</b> $1.00 USD
      <br><sub style="color:red;">Requires 75 Attack</sub></p>
      <input type="hidden" id="item18_name" value="Abyssal Whip">
      <input type="hidden" id="item18_price" value="$1.00 USD">
    </div>

    <div class="items" id="item19">
      <img src="img/products/weapons/bgs.png">
      <input type="button" value="Add To Cart" onclick="cart('item19')">
      <p><b>Bandos Godsword</b></p>
      <p><b>Price:</b> $2.50 USD
      <br><sub style="color:red;">Requires 75 Attack</sub></p>
      <input type="hidden" id="item19_name" value="Bandos Godsword">
      <input type="hidden" id="item19_price" value="$2.50 USD">
    </div>

    <div class="items" id="item20">
      <img src="img/products/weapons/sgs.png">
      <input type="button" value="Add To Cart" onclick="cart('item20')">
      <p><b>Saradomin Godsword</b></p>
      <p><b>Price:</b> $2.50 USD
      <br><sub style="color:red;">Requires 75 Attack</sub></p>
      <input type="hidden" id="item2_name" value="Saradomin Godsword">
      <input type="hidden" id="item2_price" value="$2.50 USD">
    </div>

    <div class="items" id="item21">
      <img src="img/products/weapons/zgs.png">
      <input type="button" value="Add To Cart" onclick="cart('item21')">
      <p><b>Zamorak Godsword</b></p>
      <p><b>Price:</b> $2.50 USD
      <br><sub style="color:red;">Requires 75 Attack</sub></p>
      <input type="hidden" id="item21_name" value="Zamorak Godsword">
      <input type="hidden" id="item21_price" value="$2.50 USD">
    </div>

    <div class="items" id="item22">
      <img src="img/products/weapons/swh.png">
      <input type="button" value="Add To Cart" onclick="cart('item22')">
      <p><b>Statius' Warhammer</b></p>
      <p><b>Price:</b> $1.50 USD
      <br><sub style="color:red;">Requires 70 Attack</sub></p>
      <input type="hidden" id="item22_name" value="Statius' Warhammer">
      <input type="hidden" id="item22_price" value="$1.50 USD">
    </div>

    <div class="items" id="item23">
      <img src="img/products/weapons/vls.png">
      <input type="button" value="Add To Cart" onclick="cart('item23')">
      <p><b>Vesta's Longsword</b></p>
      <p><b>Price:</b> $1.50 USD
      <br><sub style="color:red;">Requires 70 Attack</sub></p>
      <input type="hidden" id="item23_name" value="Vesta's Longsword">
      <input type="hidden" id="item23_price" value="$1.50 USD">
    </div>

    <div class="items" id="item24">
      <img src="img/products/weapons/dbow.png">
      <input type="button" value="Add To Cart" onclick="cart('item24')">
      <p><b>Dark Bow</b></p>
      <p><b>Price:</b> $1.00 USD
      <br><sub style="color:red;">Requires 70 Range</sub></p>
      <input type="hidden" id="item24_name" value="Dark Bow">
      <input type="hidden" id="item24_price" value="$1.50 USD">
    </div>

    <div class="items" id="item25">
      <img src="img/products/armour/zerkring.gif">
      <input type="button" value="Add To Cart" onclick="cart('item25')">
      <p><b>Berserker Ring</b></p>
      <p>A ring reputed to bring out a berserk fury in its wearer.</p>
      <p><b>Price:</b> $0.50 USD</p>
      <input type="hidden" id="item25_name" value="Berserker Ring">
      <input type="hidden" id="item25_price" value="$0.50 USD">
    </div>

    <div class="items" id="item26">
      <img src="img/products/armour/seers.gif">
      <input type="button" value="Add To Cart" onclick="cart('item26')">
      <p><b>Seers' Ring</b></p>
      <p>Improves the wearer's skill with magic.</p>
      <p><b>Price:</b> $0.50 USD</p>
      <input type="hidden" id="item26_name" value="Seers' Ring">
      <input type="hidden" id="item26_price" value="$0.50 USD">
    </div>

    <div class="items" id="item27">
      <img src="img/products/armour/archers.gif">
      <input type="button" value="Add To Cart" onclick="cart('item27')">
      <p><b>Archers' Ring</b></p>
      <p>Improves the wearer's skill with ranged attacks.</p>
      <p><b>Price:</b> $0.50 USD</p>
      <input type="hidden" id="item27_name" value="Archers' Ring">
      <input type="hidden" id="item27_price" value="$0.50 USD">
    </div>

    <div class="items" id="item28">
      <img src="img/products/armour/fury.gif">
      <input type="button" value="Add To Cart" onclick="cart('item28')">
      <p><b>Amulet of Fury</b></p>
      <p>A very powerful enchanted onyx amulet.</p>
      <p><b>Price:</b> $0.25 USD</p>
      <input type="hidden" id="item28_name" value="Amulet of Fury">
      <input type="hidden" id="item28_price" value="$0.25 USD">
    </div>

    <div class="items" id="item29">
      <img src="img/products/bundles/osrsboots.png">
      <input type="button" value="Add To Cart" onclick="cart('item29')">
      <p><b>OSRS Boots</b></p>
      <p>
      Improves the wearer's skill further than with the corresponding RS3 boots.
      </p>
      <p><b>Price:</b> $2.50 USD</p>
      <input type="hidden" id="item29_name" value="OSRS Boots">
      <input type="hidden" id="item29_price" value="$2.50 USD">
    </div>

    <div class="items" id="item30">
      <img src="img/products/bundles/rs3boots.png">
      <input type="button" value="Add To Cart" onclick="cart('item30')">
      <p><b>RS3 Boots</b></p>
      <p>
      Improves the wearer's skill with the corresponding boots.
      </p>
      <p><b>Price:</b> $2.50 USD</p>
      <input type="hidden" id="item30_name" value="RS3 Boots">
      <input type="hidden" id="item30_price" value="$2.50 USD">
    </div>

    <div class="items" id="item31">
      <img src="img/products/bundles/3rd_age_melee.png">
      <input type="button" value="Add To Cart" onclick="cart('item31')">
      <p><b>Third-Age Melee Set</b></p>
      <p>
      Ancient armour beaten from magical silver. Includes: Third-age full helmet, Third-age platebody, Third-age platelegs and Third-age kiteshield.
      </p>
      <p><b>Price:</b> $10.00 USD</p>
      <input type="hidden" id="item31_name" value="3rd Age Melee Set">
      <input type="hidden" id="item31_price" value="$10.00 USD">
    </div>

    <div class="items" id="item32">
      <img src="img/products/bundles/3rd_age_mage.png">
      <input type="button" value="Add To Cart" onclick="cart('item32')">
      <p><b>Third-Age Mage Set</b></p>
      <p>
      Ancient mage protection enchanted in the Third-Age. Includes: Third-age mage hat, Third-age robe top, Third-age robe and Third-age amulet.
      </p>
      <p><b>Price:</b> $10.00 USD</p>
      <input type="hidden" id="item32_name" value="3rd Age Mage Set">
      <input type="hidden" id="item32_price" value="$10.00 USD">
    </div>

    <div class="items" id="item33">
      <img src="img/products/bundles/3rd_age_range.png">
      <input type="button" value="Add To Cart" onclick="cart('item33')">
      <p><b>Third-Age Range Set</b></p>
      <p>
      Ancient range protection crafted from white dragonhide. Includes: Third-age range coif, Third-age range top, Third-age range legs and Third age vambraces.
      </p>
      <p><b>Price:</b> $10.00 USD</p>
      <input type="hidden" id="item33_name" value="3rd Age Range Set">
      <input type="hidden" id="item33_price" value="$10.00 USD">
    </div>

    <div class="items" id="item34">
      <img src="img/products/bundles/nex_set.png">
      <input type="button" value="Add To Cart" onclick="cart('item34')">
      <p><b>Nex Armour Set</b></p>
      <p>
      A complete set of Nex armours. Includes: Torva armour set, Pernix armour set and Virtus armour set.
      </p>
      <p><b>Price:</b> $25.00 USD</p>
      <input type="hidden" id="item34_name" value="Nex Armour Set">
      <input type="hidden" id="item34_price" value="$25.00 USD">
    </div>

    <div class="items" id="item35">
      <img src="img/products/bundles/ss_set.png">
      <input type="button" value="Add To Cart" onclick="cart('item35')">
      <p><b>Spirit Shield Set</b></p>
      <p>
      A set of spirit shields. Includes: Divine spirit shield, Elysian spirit shield, Arcane spirit shield and Spectral spirit shield.
      </p>
      <p><b>Price:</b> $10.00 USD</p>
      <input type="hidden" id="item35_name" value="Spirit Shield Set">
      <input type="hidden" id="item35_price" value="$10.00 USD">
    </div>

    <div class="items" id="item36">
      <img src="img/products/supplies/rocktail.png">
      <input type="button" value="Add To Cart" onclick="cart('item36')">
      <p><b>10,000 x Rocktails</b></p>
      <p>
      10,000 Cooked Rocktails, more than enough for the average pker.
      </p>
      <p><b>Price:</b> $10.00 USD</p>
      <input type="hidden" id="item36_name" value="10,000 Cooked Rocktails">
      <input type="hidden" id="item36_price" value="$5.00 USD">
    </div>
  </div>
  </body>
</html>