<?php

namespace App\Services\Company;

interface CompanyServiceInterface
{

    /**
     * Create Company
     *
     * @param $request
     * @return mixed
     */
    public function createCompany($request);
}
