<html>
    <head>

    </head>
    <body>
        <table>
            <tr>
                <td colspan="2"><h4>Payment Receipt</h4></td>
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
                <td><?php echo $model->amount; ?></td>
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


