<?php $sq = 'SELECT * FROM users ORDER BY RAND()LIMIT 3 ';
$reul = mysqli_query($con, $sq);
$users= mysqli_fetch_all($reul, MYSQLI_ASSOC);?>