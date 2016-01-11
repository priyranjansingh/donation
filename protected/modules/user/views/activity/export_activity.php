<html>
    <head>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;

            }
            th, td {
                padding: 15px;
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
            <?php
            if (!empty($user_trans)) {
                ?>
            <tr>
            <th colspan="4">Activity Summary</th>
            </tr>
            <tr>
            <td>Date</td>
            <td>Detail</td>
            <td>Amount</td>
            <td>Type</td>
            </tr>
                <?php
                foreach ($user_trans as $trans) {
                    if ($trans->Donation) {
                        ?>
                        <tr>
                            <td>
                                <div class="small">
                                    <?php echo date("M", strtotime($trans->date_entered)); ?>
                                    <?php
                                    if (date("Y", strtotime($trans->date_entered)) != date('Y')) {
                                        echo " , " . date("Y", strtotime($trans->date_entered));
                                    }
                                    ?>
                                </div>
                                <h3 class="mdl-color-text--cyan no-margin "><?php echo date("d", strtotime($trans->date_entered)); ?></h3>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <div class="">
                                    (<?php echo $trans->Donation->visit->visit_code; ?>) 
                                    <?php echo $trans->Donation->solicitor->first_name . " " . $trans->Donation->solicitor->last_name; ?>
                                </div>
                                <ul class="list-unstyled f12">
                                    <li>
                                        Transaction Type - Donation
                                    </li>
                                </ul>
                            </td>
                            <td>- $<?php echo $trans->debit; ?>  </td>
                            <td>Donation  </td>
                        </tr>
                        <?php
                    } else {
                        ?>    
                        <tr>
                            <td>
                                <div class="small">
                                    <?php echo date("M", strtotime($trans->date_entered)); ?>
                                    <?php
                                    if (date("Y", strtotime($trans->date_entered)) != date('Y')) {
                                        echo " , " . date("Y", strtotime($trans->date_entered));
                                    }
                                    ?>
                                </div>
                                <h3 class="mdl-color-text--cyan no-margin "><?php echo date("d", strtotime($trans->date_entered)); ?></h3>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric">
                                Payment - Thank You
                            </td>
                            <td>+ $<?php echo $trans->credit; ?>  </td>
                            <td>Payment</td>
                        </tr>
                        <?php
                    }
                }
            } else {
                ?> 
                <tr >
                    <td style="text-align: center;">
                        <h4>There is not any previous donations.</h4>
                    </td>   
                </tr>   
                <?php
            }
            ?>
        </table>
    </body>
</html>


