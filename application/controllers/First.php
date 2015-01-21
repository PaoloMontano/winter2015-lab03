<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->first();
        $this->data = array_merge($this->data, $source);
        $this->render();
    }

    /**
     * Returns Bob Monkhouse's quote.
     */
    function zzz() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->first();
        $this->data = array_merge($this->data, $source);
        $this->render();
    }

    /**
     * Grabs a quote by the provided ID.
     *
     * @param int ID for specific quote requested.
     */
    function gimmie($id) {
      if ($source = $this->quotes->get($id)) {
        $this->data['pagebody'] = 'justone';
        $this->data = array_merge($this->data, $source);
        $this->render();
      }
      else {
        echo "Error";
      }
    }
}

/* End of file First.php */
/* Location: application/controllers/First.php */
