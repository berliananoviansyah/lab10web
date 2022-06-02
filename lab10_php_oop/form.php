<?php
/** Nama Class : Form
 * Deskripsi : Class untuk membuat form inputan text sederhana
 */

class Form
{
    private $fields = array();
    private $action;
    private $submit ="Submit Form";
    private $jumFiled = 0;

    public function __construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }

    public function displayForm()
    {
        echo "<form action='".$this->action.'" method='POST'>";
        echo '<table width="100%" border="0">
        for ($j=0; $j<count($this->fields); $j++) {
            echo "<tr>"
        }
    }
}