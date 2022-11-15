<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\CompanyRequest;
use App\Repositories\Company\CompanyRepositoriesInterface;
use Illuminate\Http\JsonResponse;

class CompanyController extends Controller
{
    /**
     * @var CompanyRepositoriesInterface
     */
    private $companyResponse;

    /**
     * @param CompanyRepositoriesInterface $companyResponse
     */
    public function __construct(CompanyRepositoriesInterface $companyResponse)
    {
        $this->companyResponse = $companyResponse;
    }

    /**
     * Get User Company
     *
     * @return array
     */
    public function getUserCompany()
    {
        return $this->companyResponse->get();
    }


    /**
     * Create new Company
     *
     * @param CompanyRequest $request
     * @return JsonResponse
     */
    public function createCompany(CompanyRequest $request)
    {
        return $this->companyResponse->create($request);
    }

}
