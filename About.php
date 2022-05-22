<?php

class About extends MainController
{
    function main()
    {
        $data['Page_title'] = 'About';
        $this->views('AboutView', $data);
    }
}
