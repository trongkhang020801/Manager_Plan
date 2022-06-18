<?php 
class News extends Controller {

    function showNews() {      
        // Call Views
        $this->view("news", [
        ]);
    }
}
?>