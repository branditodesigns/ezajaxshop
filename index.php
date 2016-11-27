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
 * @Last Modified time: 2016-11-28 09:39:20
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
    <script type="text/javascript">
    $(document).ready(function(){ 
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
    <li style="float:right"></li>
    <li style="float:right"><a href="#showcart" onclick="show_cart();"><img src="img/cart.png" style="width:25px; height: 25px;margin-bottom:-5px;"> View Cart <small id="total_items" style="background:red;border-radius: 5px;"></small></a></li>
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
      <img src="img/products/rares/rainbow partyhat.png">
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