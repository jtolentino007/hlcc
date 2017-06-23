<?php
    class Group_model extends CORE_Model {
        protected  $table="groups";
        protected  $pk_id="group_id";

        function __construct() {
            parent::__construct();
        }
    }
?>