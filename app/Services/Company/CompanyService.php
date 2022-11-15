<?php

namespace App\Services\Company;

use App\Models\Company;

class CompanyService implements CompanyServiceInterface
{
    /**
     * Create Company
     *
     * @param $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createCompany($request)
    {
        return response()->json([
            'message' => 'successfully added company',
            'data' => Company::create(array_merge(
                $request->all(),
                ['user_id' => 1]
            ))
        ], 201);
    }
}
