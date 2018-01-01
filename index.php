<?php
require('../AUTH/index.php');
if(!in_array('BA_DMZ_Chat', AUTH['user_groups'])) exit;



echo 'Welcome: '.AUTH['username'];

?>