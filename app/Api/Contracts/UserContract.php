<?php

namespace euro_hms\Api\Contracts;

interface UserContract
{
    /*
     * Get All Users
     *
     * @return response
     */
    public function getAllUsers();

    /*
     * Get Users By Register Type
     *
     * @return response
     */
    public function getUsersByRegisterType($data);

    /*
     * Create New User
     *
     * @param  array $api_key,$data
     * @return response
     */

    public function create($request);

    /*
     * Edit User
     *
     * @param  array $api_key,$user_id,$data
     * @return response
     */
    public function edit($userId);

    /*
     * Update User
     *
     * @param  array $api_key,$user_id,$data
     * @return response
     */
    public function update($request, $userId);

    /*
     * Delete User
     *
     * @param  array $api_key,$user_id
     * @return response
     */

    public function delete($id);
}
