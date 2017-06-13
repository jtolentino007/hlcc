<?php
    class Visitor_model extends CORE_Model {
        protected  $table="visitors";
        protected  $pk_id="visitor_id";

        function __construct() {
            parent::__construct();
        }
    }
?>