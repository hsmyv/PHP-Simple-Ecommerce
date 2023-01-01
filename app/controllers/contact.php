<?php
Class Contact extends Controller
{
    function index()
    {
       
        $data['page_title'] =  "Contact Us";

        $this->view("ecommerce/contact", $data);
    }

  
}