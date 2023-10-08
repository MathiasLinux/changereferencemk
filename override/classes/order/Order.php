<?php

class Order extends OrderCore
{
    public static function generateReference()
    {
        //Get the order_id for the current order
        $id_order = (int)Db::getInstance()->getValue('SELECT MAX(id_order) FROM ' . _DB_PREFIX_ . 'orders');
        return $id_order + 1;
    }
}
