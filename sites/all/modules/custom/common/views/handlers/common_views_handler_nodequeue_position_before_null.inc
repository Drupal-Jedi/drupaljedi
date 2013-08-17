<?php

/**
 * @file
 */

class common_views_handler_nodequeue_position_before_null extends views_handler_sort {
  function admin_summary() {

  }

  function operator_form() {

  }

  function query() {
    $table = $this->ensure_my_table();

    $field = 'position';
    $as = $table . '_' . $field;

    if ($field) {
      $this->query->add_field($table, $field, $as);
    }

    // If we sort ASC items with NULL should be last, so set 99999,
    // If DESC set 0
    $order = strtoupper($this->options['order']);
    $stub  = ($order == 'DESC') ? '0' : '99999';

    $this->query->orderby[] = array('field' => "IFNULL($as, $stub) ", 'direction' => strtoupper($this->options['order']));
  }
}