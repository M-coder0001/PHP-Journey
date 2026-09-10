<?php
    function test ($bal, $withdraw)
    {
        try
        {
            if ($withdraw > $bal)
            {
                throw new Exception("Insufficient balance.");
            }
            else
            {
                $bal -= $withdraw;
                echo "Withdrawal successful. Remaining balance: $" . $bal;
            }
        }
        catch (Exception $e)
        {
            echo "Error: " . $e->getMessage();
        }
        
    }
    test(1000, 1500);
?>