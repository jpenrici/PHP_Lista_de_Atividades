<?php

function card($id, $author, $title, $description, $url_image, $updatedAt, $buttons)
{
    $html = "<div class='card'>
                <div class='card-image'>
                    <img src='$url_image' alt='$title' title='$title' />
                </div>
                <div class='card-content'>
                    <div class='card-title'>
                        $title
                    </div>
                    <div class='card-description'>
                        $description
                    </div>
                    <div class='card-meta'>
                        <div>
                            $author
                        </div>
                        <div>
                            $updatedAt
                        </div>
                        <div class='buttons'>
                            $buttons
                        </div>
                    </div>
                </div>
            </div>
    ";

    return $html;
}

?>


