<?php

require 'core/controller.php';



controller::model('index')->check_params($_POST);

controller::view_param('index');