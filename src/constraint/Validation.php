<?php

namespace App\src\constraint;

class Validation
{
    public function validate($data, $name)
    {
        if ($name === 'User') {
            $userValidation = new UserValidation();
            $errors = $userValidation->check($data);
            return $errors;
        } elseif ($name === 'UpdatePassword') {
            $updatePassword = new UpdatePasswordValidation();
            $errors = $updatePassword->check($data);
            return $errors;
        } elseif ($name === 'Article') {
            $articleValidation = new ArticleValidation();
            $errors = $articleValidation->check($data);
            return $errors;
        } elseif ($name === 'Comment') {
            $commentValidation = new CommentValidation();
            $errors = $commentValidation->check($data);
            return $errors;
        } elseif ($name === 'Thumb') {
            $thumbValidation = new ThumbValidation();
            $errors = $thumbValidation->check($data);
            return $errors;
        } elseif ($name === 'Contact') {
            $contactValidation = new ContactValidation();
            $errors = $contactValidation->check($data);
            return $errors;
        }
    }
}
