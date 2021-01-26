<?php





foreach ($getUserByID as $user) {
    echo $user->ID_Usuario;
    echo $user->name;
    echo $user->last_name;
    echo $user->email;
  }