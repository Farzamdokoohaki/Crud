<?php

namespace CRUD\Controller;

use CRUD\Model\Actions;

class PersonController
{
    public function switcher($uri,$request)
    {
        switch ($uri)
        {
            case Actions::CREATE:
                $this->createAction($request);
                break;
            case Actions::UPDATE:
                $this->updateAction($request);
                break;
            case Actions::READ:
                $this->readAction($request);
                break;
            case Actions::READ_ALL:
                $this->readAllAction($request);
                break;
            case Actions::DELETE:
                $this->deleteAction($request);
                break;
            default:
                break;
        }
    }

    public function createAction($request)
    {
$helper = new PersonHelper();
$person = new person();
$person->setFirstName($request["firstName"]);
$person->setLastName($request["lastName"]);
$person->setUserName($request["username"]);
if($helper->insert($person)){
	echo "Success";
}else{
	echo "Error";
    }

    public function updateAction($request)
    {
$helper = new PersonHelper();
$person = new Person();
$person->setId($request["id"]);
$person->setFirstName($request["firstName"]);
$person->setLastName($request["lastName"]);
$person->setUserName($request["username"]);
if($helper->update($person)){
	echo "Success";
}
    }

    public function readAction($request)
    {
$helper = new PersonHelper();
$person = $helper->fetch(1);
echo $person->getFirstName()."".$person->getLastName()."".$person->getUsername();
    }
    public function readAllAction($request)
    {
$helper = new PersonHelper();
    }

    public function deleteAction($request)
    {
if ($request->isMethod('POST')) {
        $id = $request->get('id');
    }
    }

}