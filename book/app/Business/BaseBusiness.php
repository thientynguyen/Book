<?php

namespace App\Business;


class BaseBusiness
{
    /**
     * Function return business fail
     * @access public
     * @param $message string
     * @param $code number
     * @return array
     */
    public function returnFail($message, $code)
    {
        return [
            'data' => null,
            'message' => $message,
            'code' => $code
        ];
    }

    /**
     * Function return business success
     * @access public
     * @param null $data
     * @return array
     */
    public function returnSuccess($data = null)
    {
        return [
            'data' => $data,
            'message' => "success",
            'code' => 200
        ];
    }
}
