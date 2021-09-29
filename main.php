<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class="container2">
        <div class="main">
            <h3>Answer :</h3>
            <br>
            <h4><?php   include 'form.php';      ?></h4>
        </div>
        <div class="table">
            <?php
                
                echo    '<table>
                            <tr>
                                <td>Номинал</td>
                                <td>Количество</td>
                            </tr>
                        </table>';

                       
                        
                        //include 'form.php';
                        //print_r($atm->getBills($sum));
                        
                        // foreach ($arr->getBills($sum) as $key => $item){
                        //     echo '<table>
                        //             <tr>
                        //                 <td>'; echo $key; echo '</td>
                        //                 <td>'; echo $item; echo '</td>
                        //                 </tr>
                        //             </table>';
                        // }
            ?>
        </div>
    </div>
</body>
</html>
