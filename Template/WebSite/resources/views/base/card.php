<?php

// Card Simples
function card($title, $urlImage, $description, $href = "#")
{
    $html = "<div class='card'>
                <p class='title'>$title</p>
                <!-- <div class='fakeimage' style='font-size: small;'>Image</div> -->
                <img src='$urlImage' alt='$title' title='$title' />
                <p class='description'>$description</p>
                <a href='$href' class='readmore'>Comprar &gt;&gt;</a>
            </div>";

    return $html;
}

function fullCard($title, $urlImage, $description,  $price, $discount)
{
    $text = "";
    if ($discount > 1) {
        $text .= $discount . "%";
    } 
    if ($discount > 5) {
        $text .= " Imperdível!!!";
    } 

    $html = "<div class='card'>
                <p class='title'>$title</p>
                <img src='$urlImage' alt='$title' title='$title' />
                <p class='description'>$description</p>
                <p>R$ $price</p>
                <p>$text</p>
            </div>";

    return $html;
}