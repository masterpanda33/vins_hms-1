<?php

namespace euro_hms\Repositories;

use euro_hms\Models\User;

class UserRepository
{
    public function getAllUsers()
    {
        /*  Use Join for Fetch Club Income Data with Club Table */
        return User::all();
    }


}
