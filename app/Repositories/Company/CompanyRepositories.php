<?php

namespace App\Repositories\Company;

use App\Http\Resources\CompanyResource;
use App\Models\Company;
use App\Services\Company\CompanyServiceInterface;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CompanyRepositories implements CompanyRepositoriesInterface
{
    private $serviceCompany;

    public function __construct(CompanyServiceInterface $serviceCompany)
    {
        $this->serviceCompany = $serviceCompany;

    }

    /**
     * Get user Company
     *
     * @return array|AnonymousResourceCollection
     */
    public function get()
    {
        return CompanyResource::collection(
               Company::where('user_id',
                auth()->user()->id)
                ->get());
    }

    /**
     * Create company
     *
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        return $this->serviceCompany->createCompany($request);
    }
}
