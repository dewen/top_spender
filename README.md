Top Spender
===========

DESCRITION:
    
    Calculate the top 5 average spending from customer spending list.

USAGE:

    []$ php main.php < /path/to/data.csv

EXAMPLE:
    
    []$ php main.php < data/1000.csv 

    Output:

        id:351 $81
        id:943 $81
        id:184 $77
        id:792 $76
        id:26 $75
        PROCESS TIME: 0.0005
        MEMORY USAGED: 328728KB


FILES:

    .
    ├── data
    │   ├── 1000000.csv
    │   ├── 1000.csv
    │   └── 10.csv
    ├── func.php
    ├── main.php
    ├── README.md
    ├── script
    │   └── create_csv.php
    └── test
        ├── 1.csv
        ├── 2.csv
        ├── AvgTest.php
        └── init.php
