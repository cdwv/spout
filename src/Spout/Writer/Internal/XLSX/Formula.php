<?php
/**
 * @Author: grzegorz
 * @Date:   2015-04-28 13:17:53
 * @Last Modified by:   grzegorz
 * @Last Modified time: 2015-04-28 13:21:14
 */

namespace Box\Spout\Writer\Internal\XLSX;

class Formula {
    private $formula;

    public function __construct($formula)
    {
        $this->formula = $formula;
    }

    public function getFormula()
    {
        return $this->formula;
    }
}