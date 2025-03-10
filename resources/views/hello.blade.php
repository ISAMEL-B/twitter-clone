<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Table with Merged Cells</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Table with Different-Sized Partitions</h2>

    <table>
        <tr>
            <th colspan="3">Header (Spanning 3 Columns)</th>
        </tr>
        <tr>
            <td rowspan="2">Rowspan 2 (Merging Rows)</td>
            <td>Cell 1</td>
            <td>Cell 2</td>
        </tr>
        <tr>
            <td colspan="2">Colspan 2 (Merging Columns)</td>
        </tr>
        <tr>
            <td>Cell 3</td>
            <td rowspan="2" colspan="2">Rowspan & Colspan 2x2</td>
        </tr>
        <tr>
            <td>Cell 4</td>
        </tr>
    </table>

</body>
</html>