<?php

namespace Actuallyconnor\LaravelHarvestApi\Http\Controllers;

use Illuminate\Http\Response;

class HarvestController extends Controller
{
    /**
     * @return Response
     */
    public function getClients()
    {
        $data = [
            "clients" => [
                (object) [
                    "id" => 5735776,
                    "name" => "123 Industries",
                    "is_active" => true,
                    "address" => "123 Main St.\r\nAnytown, LA 71223",
                    "statement_key" => 1234567890987654321,
                    "currency" => "EUR",
                    "created_at" => "2017-06-26T21 => 02 => 12Z",
                    "updated_at" => "2017-06-26T21 => 34 => 11Z",
                ],
                (object) [
                    "id" => 5735774,
                    "name" => "ABC Corp",
                    "is_active" => true,
                    "address" => "456 Main St.\r\nAnytown, CT 06467",
                    "statement_key" => 1234567890987654321,
                    "currency" => "USD",
                    "created_at" => "2017-06-26T21 => 01 => 52Z",
                    "updated_at" => "2017-06-26T21 => 27 => 07Z",
                ],
            ],
            "per_page" => 100,
            "total_pages" => 1,
            "total_entries" => 2,
            "next_page" => null,
            "previous_page" => null,
            "page" => 1,
            "links" => (object) [
                "first" => "https://api.harvestapp.com/v2/clients?page=1&per_page=100",
                "next" => null,
                "previous" => null,
                "last" => "https://api.harvestapp.com/v2/clients?page=1&per_page=100",
            ],
        ];

        return response(json_encode($data));
    }
}
