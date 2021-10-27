<?php

    class Person {
        public $name;
        public $purchase;

        function __construct($name) {
            $this->name = $name;
            return $this->name;
        }

        function itempurchased ($barang){
            $this->purchase = $barang;
            foreach ($this->purchase AS $beli){
                echo $beli." ";
            }
        }
    }

    class Shop {
        public $name;
        public $items;

        function __construct($name) {
            $this->name = $name;
        }

        function itemlist($listofitems){
            $this->items = $listofitems;
            foreach ($this->items AS $item) {
                echo $item." ";
            }
        }
        function stockhabis($beli){
            $this->items = array_diff($this->items,$beli);
            foreach ($this->items AS $items){
                echo $items." ";
            }
        }

        function newstock($stockbaru){
            $this->items = array_merge($this->items,$stockbaru);
            foreach ($this->items AS $item){
                echo $item." ";
            }
        }
    }

    // class Purchase {
    //     public $purchase;

    //     function itempurchased ($barang, $bought){
    //         $this->purchase = $barang;
    //         foreach ($this->purchase AS $beli){
    //             echo $beli." ";
    //         }
    //         // $bought->stockhabis($barang);
    //     }
    // }