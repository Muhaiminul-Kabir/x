<?php

class user
{
        public $id;
        public $name;
        public $email;
        public $pass;
        public $path;
        public $address;
        public $mobile;
        


}






class pt
{
        // Properties
        public $id;
        public $name;
        public $price;
        public $path;
        public $rate;
        public $type;
        // Methods
        function set_name($name)
        {
                $this->name = $name;
        }
        function get_name()
        {
                return $this->name;
        }
        function set_price($price)
        {
                $this->price = $price;
        }
        function get_rate()
        {
                return $this->rate;
        }
        function set_type($type)
        {
                $this->type = $type;
        }
        function get_type()
        {
                return $this->type;
        }
        function get_id()
        {
                return $this->id;
        }
        function set_id($id)
        {
                $this->id = $id;
        }
}
?>