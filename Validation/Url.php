<?php
/**
 * @package         Arastta Form Component
 * @copyright   Copyright (C) 2015 Arastta Association. All rights reserved. (arastta.org)
 * @copyright   Copyright (C) 2009-2013 Luke Korth
 * @license         GNU General Public License version 3; see LICENSE.txt
 */

namespace Arastta\Component\Form\Validation;

use Arastta\Component\Form\Validation;

class Url extends Validation
{
    
    protected $message = "Error: %element% must contain a url (e.g. http://www.google.com).";

    public function isValid($value)
    {
        if ($this->isNotApplicable($value) || filter_var($value, FILTER_VALIDATE_URL)) {
            return true;
        }
        
        return false;
    }
}
