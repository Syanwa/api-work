<?php
$balanceA = 100+200+300+678;
$balanceB = 530+670+3;
$balanceC = 3000+39+49+98;


$data = array( array("company"=>"archeNland Limited", "Amounts"=>"100,-1,200,300,-700,678" , "Debits"=>1700, "Balance"=>$balanceA),
    array("company"=>"Narnia Gmb", "Amounts"=>"530,-23,670,3,-1299" , "Debits"=>"1299,3", "Balance"=>$balanceB),
    array("company"=>"Loneislands Pty", "Amounts"=>"-7568,39,49,-37,3000,98" , "Debits"=>"37,7568", "Balance"=>$balanceC)
);

?>




<?php if (count($data) > 0): ?>
    <table>
        <thead>
        <tr>
            <th><?php echo implode('</th><th>', array_keys(current($data))); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $row): array_map('htmlentities', $row); ?>
            <tr>
                <td><?php echo implode('</td><td>', $row); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
