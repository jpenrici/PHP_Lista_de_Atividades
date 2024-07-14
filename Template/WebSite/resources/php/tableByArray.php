<?php

// Função Html Table.
function tableByArray($data)
{
    $html = "";
    if (is_array($data)) {
        $html = "<table border = '1'>";
        foreach ($data as $item) {
            $html .= "<tr>";
            if (is_array($item)) {
                foreach ($item as $subitem) {
                    $html .= "<td>" . $subitem . "</td>";
                }
            } else {
                $html .= "<td>" . $item . "</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";
    }

    return $html;
}
