<html>
    <head>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;

            }
            th, td {
                padding: 5px;
            }
            td
            {
                font-size: 18px;
            }
            table tr:nth-child(even) {
                background-color: #eee;
            }
            table tr:nth-child(odd) {
                background-color:#fff;
            }
            table th	{
                background-color: black;
                color: white;
                font-size: 20px;
            }
        </style>    


    </head>
    <body>
        <table  align="center" style="width:100%">
            <tr>
                <th colspan="2">Payment Receipt</th>
            </tr>
            <tr>
                <td>Receipt Number : </td>
                <td><?php echo $model->receipt_no; ?></td>
            </tr>
            <tr>
                <td>Name : </td>
                <td><?php echo $model->User->first_name . " " . $model->User->last_name; ?></td>
            </tr>
            <tr>
                <td>Amount : </td>
                <td>$<?php echo $model->amount; ?></td>
            </tr>
            <tr>
                <td>Date :</td>
                <td><?php echo $model->date_entered; ?></td>
            </tr>
            <tr>
                <td>Mode :</td>
                <td><?php echo $model->mode; ?></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><?php echo $model->User->email; ?></td>
            </tr>
            <tr>
                <td>Address : </td>
                <td><?php echo $model->User->address; ?></td>
            </tr>

        </table>
    </body>
</html>


