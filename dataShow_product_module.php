<?php


function product_list()
{
        include 'product_data.php';

        $j = 0;

        while ($j < $i) {
                $rating = '';

                echo '<tr >
                    <td>' . $products[$j]->name . '</td>
                    <td>' . $products[$j]->price . '</td>
                    <td>' . $products[$j]->type . '</td>
                    <td>' . $products[$j]->rate . '</td>
            
                    <td><button class="text-light shadow btn btn-danger">Delete</button></td>
                  </tr>';


                $j++;
        }
}
?>