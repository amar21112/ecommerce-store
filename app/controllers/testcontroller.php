<?php

namespace PHPMVC\Controllers;
use PHPMVC\LIB\Validate;
use PHPMVC\Models\UserGroupPrivilegeModel;
use PHPMVC\Models\UserModel;

class TestController extends AbstractController
{
    use Validate;
    public function defaultAction()
    {
//        var_dump($this->num('34343.4343'));
//        echo '<br>';

//        var_dump($this->num('34'));
//        echo '<br>';

//        var_dump($this->int('3434'));
//        echo '<br>';

//        var_dump($this->float('34343.4343'));
//        echo '<br>';

//        var_dump($this->alpha('MOO'));
//        echo '<br>';

//        var_dump($this->alpha('moo'));
//        echo '<br>';

//        var_dump($this->alpha('اسم'));
//        echo '<br>';

//        var_dump($this->alphanum('moo345'));
//        echo '<br>';

//        var_dump($this->alphanum('اسم3424'));
//        echo '<br>';

//        var_dump($this->req(''));
//        echo '<br>';

//        var_dump($this->lt('235', 4));
//        echo '<br>';

//        var_dump($this->lt('btht', 5));
//        echo '<br>;

//        var_dump($this->gt('btht', 5));
//        echo '<br>';

//        var_dump($this->max('btht', 5));
//        echo '<br>';

//        var_dump($this->min('btht', 5));
//        echo '<br>';

//        var_dump($this->between('btht', 3, 5));
//        echo '<br>';

//        var_dump($this->between('4', 3, 5));
//        echo '<br>';

//        var_dump($this->floatLike('12.346', 2, 3));
//        echo '<br>';

//        var_dump($this->vdate('2023-07-04'));
//        echo '<br>';

//        var_dump($this->email('test@test.com'));
//        echo '<br>';

//        var_dump($this->url('https://regex101.com/'));

        ///////////////////////////////////////////////////////////////

//        $privileges = UserGroupPrivilegeModel::getPrivilegesForGroup($this->session->u->GroupId);
//        var_dump($privileges);

//        var_dump($this->session->u);

        ///////////////////////////////////////////////////////////////

//        var_dump(UserModel::getModelTableName());

        ///////////////////////////////////////////////////////////////

//        phpinfo();
    }
}