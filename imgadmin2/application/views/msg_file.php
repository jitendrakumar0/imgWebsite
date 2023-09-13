<?php 
     
    if($this->session->userdata('toursuccmsg'))
    {    
        echo '<script type="text/JavaScript">$(document).ready(function () {' . 'toastr.success("' . $this->session->userdata('toursuccmsg') . '");});</script>';
          
        $this->session->unset_userdata('toursuccmsg');
    }
    
    if($this->session->userdata('tourfailmsg'))
    {
        echo '<script type="text/JavaScript">$(document).ready(function () {' . 'toastr.error("' . $this->session->userdata('tourfailmsg') . '");});</script>';
          
        $this->session->unset_userdata('tourfailmsg');
    }
 
?>
