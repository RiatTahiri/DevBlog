<?php

class Tasks extends MainController
{
    function main()
    {
        $data['Page_title'] = 'Tasks';
        $viewTask = $this->loadModels('ViewTasks');

        $results = $viewTask->getTasks();
        $data['tasks'] = $results;


        try {
            if (isset($_POST['id'])) {
                $viewTask->deleteTaskByID($_POST['id']);
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        try {
            if (isset($_POST['editID'])) {
                $viewTask->editTask($_POST['editID']);
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        $this->views('TaskView', $data);
    }
}
