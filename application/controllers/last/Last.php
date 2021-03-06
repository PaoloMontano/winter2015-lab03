<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Last.php
 *
 * ------------------------------------------------------------------------
 */
class Last extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';
        // build the list of authors, to pass on to our view
        $source = $this->quotes->last();
        $this->data = array_merge($this->data, $source);
        $this->render();
    }

}

/* End of file Last.php */
/* Location: application/controllers/Last.php */
