<?php

namespace App\Repositories\Company;

interface CompanyRepositoriesInterface
{
    /**
     * Get user Company
     *
     * @return array
     */
    public function get();

    /**
     * Create Company
     *
     * @param $request
     * @return mixed
     */
    public function create($request);
}
