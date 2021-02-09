
<?php

foreach($getUserByID as $row){
    echo $row->name;
    echo $row->last_name;
    echo $row->email;
    echo $row->password;
    echo $row->phone;
    echo $row->service;
    echo $row->description;
    echo $row->year_exp;
    echo $row->country;
    echo $row->city;
    echo $row->status;
    echo $row->role;    
}