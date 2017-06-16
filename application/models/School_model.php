<?php
    class School_model extends CORE_Model {
        protected  $table="schools";
        protected  $pk_id="school_id";

        function __construct() {
            parent::__construct();
        }
    }
?>