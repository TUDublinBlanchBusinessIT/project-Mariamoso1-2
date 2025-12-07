<?php

class ExpenseCalculator
{
    public function calculateTotal($expenses)
    {
        $total = 0;
        foreach ($expenses as $expense) {
            $total += $expense['amount'];
        }
        return $total;
    }
}

?>