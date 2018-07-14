<?php
class Home extends MY_Controller
{
function __construct(){
parent::__construct();
}
function index(){
echo "test halaman HMVC berhasil";
}
function tes(){
echo "tes segment 2 berhasil";
}
}