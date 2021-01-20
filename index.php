<html>
<head>
    <link rel='stylesheet' href='style.css'>
</head>
<?php

require_once 'vendor/autoload.php';

use Neoxygen\NeoClient\ClientBuilder;

$client = ClientBuilder::create()
    ->addConnection('default','http','localhost',7474)
    ->setAutoFormatResponse(true)
    ->build();
$query= "Match(a:Person) return a";
$client->sendCypherQuery($query);
$results=$client->getRows();
?>
<h1 align="center">List of users</h1>
<table >
    <tr>
        <th>Name</th>
        <th>test</th>
        <th>Gender</th>
        <th>Age</th>
        <th>City</th>
    </tr>
    <tr>
        <?php foreach ($results as $result ):
            foreach ($result as $col):
        ?>
        <td><?=$col['name']?></td>
        <td><?=$col['gender']?></td>
        <td><?=$col['age']?></td>
        <td><?=$col['city']?></td>
    </tr>
    <?php endforeach; endforeach; ?>
</html>

