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