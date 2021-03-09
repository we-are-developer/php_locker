<?php

# Simple Pattern Program
# Print Below Pattern

# PHP Script Start From Here

# No. of rows
$rows = 5;

# No. of cols
$cols = 5;

for($i = 1; $i <= $rows ; $i++ )
{
    for($j = 1; $j <= $cols ; $j++)
    {
        echo "*";
    }

    echo "<br/>";
}

# PHP Script Close Here

# Output:

/*

*****
*****
*****
*****
*****

*/