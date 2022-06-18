<?php 
class About extends Controller {

    function showAbout() {      
        // Call Views
        $this->view("about", [
        ]);
    }
}
?>