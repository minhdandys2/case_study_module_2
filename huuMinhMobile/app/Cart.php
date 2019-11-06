<?php


namespace App;


class Cart
{
    public $items = null;
    public $totalPrice = 0;
    public $totalQty = 0;

    public function __construct($oldCart)
    {
        if ($oldCart){
            $this->items = $oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQty = $oldCart->totalQty;
        }
    }

    public function addToCart($phone)
    {
        $storeItem = [
            'item' => $phone,
            'itemPrice' => 0,
            'itemQty' => 0
        ];
        if ($this->items) {
            if (array_key_exists($phone->id, $this->items)) {
                $storeItem = $this->items[$phone->id];
                $this->totalQty = count($this->items);

            } else {
                $this->totalQty++;
            }
        } else {

            $this->totalQty++;
        }
        $storeItem['itemPrice'] = ($storeItem['itemQty']+1) * $phone->price;
        $storeItem['itemQty']++;
        $this->items[$phone->id] = $storeItem;
        $this->totalPrice += $phone->price;
    }
}
