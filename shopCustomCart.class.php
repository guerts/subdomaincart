<?php
class shopCustomCart extends waAppViewHelper
{
    public static function total($code) {
        $model = new shopCartItemsModel();
        $total = $model->total($code);
        $result = array(
            'count' => 0,
            'total' => 0
        );
        if ($total > 0) {
            $order = array(
                'currency' => wa('shop')->getConfig()->getCurrency(false),
                'total' => $total,
                'items' => self::items(false, $code)
            );
            $discount = shopDiscounts::calculate($order);
            $total = $total - $discount;
            $count = 0;
            foreach ($order['items'] as $i) {
                $count = ($count + $i['quantity']);
            }
            $result['count'] = $count;
            $result['total'] = (float) $total;
        }
        return $result;
    }

    public function items($hierarchy = true, $code)
    {
        $model = new shopCartItemsModel();
        return $model->getByCode($code, true, $hierarchy);
    }
}
