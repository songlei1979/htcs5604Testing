<?php


namespace App\Support;


class Collection
{
    protected $items = [];

    /**
     * Collection constructor.
     * @param array $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }


    public function get()
    {
        return $this->items;
    }

    public function count(){
        return sizeof($this->items);
    }
}
