<?php

$data = [10,20,30,'lol','group','pp'];

//echo $data[5].'<br>';
//
//foreach ($data as $pp)
//{
//    echo $pp.'<br>';
//}


$students = [
    "0" => [
      'name' => 'a',
      'city' => 'b',
      'country' => 'c'
    ],
    "1" => [
        'name' => 'e',
        'city' => 'f',
        'country' => 'g'
    ],
    "2" => [
        'name' => 'h',
        'city' => 'i',
        'country' => 'j'
    ]

];
?>

<table border="1" width="500">
    <tr>
        <th>Name</th>
        <th>City</th>
        <th>Country</th>
    </tr>
    <?php foreach ($students as $lol){ ?>
    <tr>
        <td><?php echo $lol['name']?></td>
        <td><?php echo $lol['city']?></td>
        <td><?php echo $lol['country']?></td>
    </tr>
    <?php } ?>
</table>
