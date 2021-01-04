<?php

namespace App\constraint;

use App\config\Parameter;

class ContactValidation extends Validation
{
    private $errors = [];
    private $constraint;

    public function __construct()
    {
        $this->constraint = new Constraint();
    }

    public function check(Parameter $post)
    {
        foreach ($post->all() as $key => $value) {
            $this->checkField($key, $value);
        }
        return $this->errors;
    }

    private function checkField($name, $value)
    {
        if ($name === 'name') {
            $error = $this->checkName($name, $value);
            $this->addError($name, $error);
        } elseif ($name === 'email') {
            $error = $this->checkEmail($name, $value);
            $this->addError($name, $error);
        } elseif ($name === 'message') {
            $error = $this->checkMessage($name, $value);
            $this->addError($name, $error);
        }
    }

    private function addError($name, $error)
    {
        if ($error) {
            $this->errors += [
                $name => $error
            ];
        }
    }

    private function checkName($name, $value)
    {
        if ($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('Nom', $value);
        }
    }

    private function checkEmail($name, $value)
    {
        if ($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('Email', $value);
        }
        if ($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('Email', $value, 2);
        }
        if ($this->constraint->haveArobase($name, $value)) {
            return $this->constraint->haveArobase('Email', $value, 2);
        }
    }

    private function checkMessage($name, $value)
    {
        if ($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('Message', $value);
        }
    }
}
