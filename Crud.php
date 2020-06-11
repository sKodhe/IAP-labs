<?php
interface Crud{
    
    public function save();
    public function readALl();
    public function readUnique();
    public function search();
    public function update();
    public function removeOne();
    public function removeAll();

    //LAB 2

    public function validateForm();
    public function createFormErrorSessions();

}

?>