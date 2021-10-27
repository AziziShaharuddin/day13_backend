<?php

    include 'class.php';

    $kevin = new Person("Kevin");
    $fikri = new Person("Fikri");
    $arjun = new Person("Arjun");

    $shop = new Shop("kedai runcit");
    $items = new Shop("kedai runcit");
    // $items->itemlist(['buku', 'bread', 'pen']);

    // $purchase = new Purchase;
    // $purchase->itempurchased(['bread', 'pen']);

    echo $kevin->name." goes into ".$shop->name." There are alot of items such as ";
    $items->itemlist(['buku', 'bread', 'pen','tissue','chocolate','coffee']);
    echo "<br>He then gets couple of items such as ";
    $kevin->itempurchased(['bread', 'pen','coffee']);
    echo "<br> The items left are ";
    $items->stockhabis(['bread', 'pen','coffee']);

    echo "<br>".$fikri->name." goes into the shop and buy ";
    $fikri->itempurchased(['tissue']);
    echo "<br> The items left are ";
    $items->stockhabis(['tissue']);

    echo "<br>The owner then add in new stocks. The list of items in the shop now are ";
    $items->newstock(['bola','phone']);
    echo "<br>".$arjun->name." came into the shop and buy ";
    $arjun->itempurchased(['phone','chocolate']);
    echo "<br> The items left are ";
    $items->stockhabis(['phone','chocolate']);
    

