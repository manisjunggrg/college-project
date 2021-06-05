<?php
if (!function_exists('flash')) :

    function flash($type, $message)
    {
        return app(\Kathford\Lib\Flash::class)->notify($type, $message);
    }

endif;


if (!function_exists('is_active')) :

    /**
     * Check if given route is active
     *
     * @return boolean
     */
    function is_active(string $route)
    {
        return request()->route()->getName() === $route;
    }

endif;
