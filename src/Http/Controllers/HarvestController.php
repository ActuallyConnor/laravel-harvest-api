<?php

namespace Actuallyconnor\LaravelHarvestApi\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HarvestController extends Controller
{
    /**
     * @param  \Illuminate\Http\Request  $request
     *
     * @return Response
     */
    public function getClients(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'is_active'     => 'bool',
            'updated_since' => 'string',
            'page'          => 'int',
            'per_page'      => 'int'
        ]);

        if ($validator->fails()) {
            return response($validator->getMessageBag(), 400);
        }

        $data = [
            "clients"       => [
                (object) [
                    "id"            => 5735776,
                    "name"          => "123 Industries",
                    "is_active"     => true,
                    "address"       => "123 Main St.\r\nAnytown, LA 71223",
                    "statement_key" => 1234567890987654321,
                    "currency"      => "EUR",
                    "created_at"    => "2017-06-26T21 => 02 => 12Z",
                    "updated_at"    => "2017-06-26T21 => 34 => 11Z",
                ],
                (object) [
                    "id"            => 5735774,
                    "name"          => "ABC Corp",
                    "is_active"     => true,
                    "address"       => "456 Main St.\r\nAnytown, CT 06467",
                    "statement_key" => 1234567890987654321,
                    "currency"      => "USD",
                    "created_at"    => "2017-06-26T21 => 01 => 52Z",
                    "updated_at"    => "2017-06-26T21 => 27 => 07Z",
                ],
            ],
            "per_page"      => 100,
            "total_pages"   => 1,
            "total_entries" => 2,
            "next_page"     => null,
            "previous_page" => null,
            "page"          => 1,
            "links"         => (object) [
                "first"    => "https://api.harvestapp.com/v2/clients?page=1&per_page=100",
                "next"     => null,
                "previous" => null,
                "last"     => "https://api.harvestapp.com/v2/clients?page=1&per_page=100",
            ],
        ];

        return response(json_encode($data));
    }

    /**
     * @param $clientId
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|Response
     */
    public function getClient($clientId)
    {
        $data = (object) [
            "id"            => 5735776,
            "name"          => "123 Industries",
            "is_active"     => true,
            "address"       => "123 Main St.\r\nAnytown, LA 71223",
            "statement_key" => 1234567890987654321,
            "created_at"    => "2017-06-26T21:02:12Z",
            "updated_at"    => "2017-06-26T21:34:11Z",
            "currency"      => "EUR"
        ];

        return response(json_encode($data));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     *
     * @return Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function postClient(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'string',
            'is_active' => 'bool',
            'address'   => 'string',
            'currency'  => 'string',
        ]);

        if ($validator->fails()) {
            return response($validator->getMessageBag(), 400);
        }

        $validated = $validator->validated();

        $data = (object) [
            "id"            => 5737336,
            "name"          => $validated['name'],
            "is_active"     => $validated['is_active'] ?: null,
            "address"       => $validated['address'] ?: null,
            "statement_key" => 1234567890987654321,
            "created_at"    => "2017-06-26T21=>39=>35Z",
            "updated_at"    => "2017-06-26T21=>39=>35Z",
            "currency"      => $validated['currency'] ?: null
        ];

        return response(json_encode($data));
    }
}
