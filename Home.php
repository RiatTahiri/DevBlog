<?php

class Home extends MainController
{
    function main()
    {
        $data['Page_title'] = 'Home';
        $data['success'] = 'Successfully Uploaded Item to the database';
        $data['error'] = "Coudn't Upload to the database, Error";
        $uploadTask = $this->loadModels('UploadTasks');

        if (isset($_POST['title']) && isset($_POST['descriptionItem'])) {
            $uploadTask->upload();
        }
        $this->views('HomeView', $data);
    }
}
