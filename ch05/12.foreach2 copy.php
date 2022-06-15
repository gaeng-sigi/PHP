<style>
    table {
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid #000;
    }

    th,
    td {
        padding: 5px;
    }
</style>
<table>
    <tr>
        <th>이름</th>
        <th>키</th>
    </tr>
    <?php

    $array = array(
        "hong" => 182.2,
        "hwang" => 180.4,
        "kim" => 176.3,
        "park" => 174.1
    );

    foreach ($array as $key => $val) {
        print "<tr>";
        print "<td>${key}</td>";
        print "<td>${val}</td>";
        print "</tr>";
    }

    ?>
</table>