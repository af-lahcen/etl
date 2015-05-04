<?php

namespace BiSight\Etl\Transformer;

use BiSight\Etl\RowInterface;

class NullTransformer implements TransformerInterface
{
    public function __construct()
    {
    }
    
    public function getColumns()
    {
        return array();
    }
    
    public function transform(RowInterface $row)
    {
        
    }
}