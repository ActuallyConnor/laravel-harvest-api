<?php


namespace Actuallyconnor\LaravelHarvestApi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MockHarvestInvoicesController extends Controller
{

    public function getInvoices(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client_id'     => 'int|nullable',
            'project_id'    => 'int|nullable',
            'updated_since' => 'string|nullable',
            'from'          => 'string|nullable',
            'to'            => 'string|nullable',
            'state'         => 'string+nullable',
            'page'          => 'int|nullable',
            'per_page'      => 'int|nullable',
        ]);

        if ($validator->fails()) {
            return response($validator->getMessageBag(), 400);
        }

        $data = (object) [
            "invoices"      => [
                (object) [
                    "id"                   => 13150403,
                    "client_key"           => "21312da13d457947a217da6775477afee8c2eba8",
                    "number"               => "1001",
                    "purchase_order"       => "",
                    "amount"               => 288.9,
                    "due_amount"           => 288.9,
                    "tax"                  => 5,
                    "tax_amount"           => 13.5,
                    "tax2"                 => 2,
                    "tax2_amount"          => 5.4,
                    "discount"             => 10,
                    "discount_amount"      => 30,
                    "subject"              => "Online Store - Phase 1",
                    "notes"                => "Some notes about the invoice.",
                    "state"                => "open",
                    "period_start"         => "2017-03-01",
                    "period_end"           => "2017-03-01",
                    "issue_date"           => "2017-04-01",
                    "due_date"             => "2017-04-01",
                    "payment_term"         => "upon receipt",
                    "sent_at"              => "2017-08-23T22:25:59Z",
                    "paid_at"              => null,
                    "paid_date"            => null,
                    "closed_at"            => null,
                    "recurring_invoice_id" => null,
                    "created_at"           => "2017-06-27T16:27:16Z",
                    "updated_at"           => "2017-08-23T22:25:59Z",
                    "currency"             => "EUR",
                    "client"               => (object) [
                        "id"   => 5735776,
                        "name" => "123 Industries"
                    ],
                    "estimate"             => null,
                    "retainer"             => null,
                    "creator"              => (object) [
                        "id"   => 1782884,
                        "name" => "Bob Powell"
                    ],
                    "line_items"           => [
                        (object) [
                            "id"          => 53341602,
                            "kind"        => "Service",
                            "description" => "03/01/2017 - Project Management: [9:00am - 11:00am] Planning meetings",
                            "quantity"    => 2,
                            "unit_price"  => 100,
                            "amount"      => 200,
                            "taxed"       => true,
                            "taxed2"      => true,
                            "project"     => (object) [
                                "id"   => 14308069,
                                "name" => "Online Store - Phase 1",
                                "code" => "OS1"
                            ]
                        ],
                        (object) [
                            "id"          => 53341603,
                            "kind"        => "Service",
                            "description" => "03/01/2017 - Programming: [1:00pm - 2:00pm] Importing products",
                            "quantity"    => 1,
                            "unit_price"  => 100,
                            "amount"      => 100,
                            "taxed"       => true,
                            "taxed2"      => true,
                            "project"     => (object) [
                                "id"   => 14308069,
                                "name" => "Online Store - Phase 1",
                                "code" => "OS1"
                            ]
                        ]
                    ]
                ],
                (object) [
                    "id"                   => 13150378,
                    "client_key"           => "9e97f4a65c5b83b1fc02f54e5a41c9dc7d458542",
                    "number"               => "1000",
                    "purchase_order"       => "1234",
                    "amount"               => 10700.0,
                    "due_amount"           => 0.0,
                    "tax"                  => 5.0,
                    "tax_amount"           => 500.0,
                    "tax2"                 => 2.0,
                    "tax2_amount"          => 200.0,
                    "discount"             => null,
                    "discount_amount"      => 0.0,
                    "subject"              => "Online Store - Phase 1",
                    "notes"                => "Some notes about the invoice.",
                    "state"                => "paid",
                    "period_start"         => null,
                    "period_end"           => null,
                    "issue_date"           => "2017-02-01",
                    "due_date"             => "2017-03-03",
                    "payment_term"         => "custom",
                    "sent_at"              => "2017-02-01T07:00:00Z",
                    "paid_at"              => "2017-02-21T00:00:00Z",
                    "paid_date"            => "2017-02-21",
                    "closed_at"            => null,
                    "recurring_invoice_id" => null,
                    "created_at"           => "2017-06-27T16:24:30Z",
                    "updated_at"           => "2017-06-27T16:24:57Z",
                    "currency"             => "USD",
                    "client"               => (object) [
                        "id"   => 5735776,
                        "name" => "123 Industries"
                    ],
                    "estimate"             => (object) [
                        "id" => 1439814
                    ],
                    "retainer"             => null,
                    "creator"              => (object) [
                        "id"   => 1782884,
                        "name" => "Bob Powell"
                    ],
                    "line_items"           => [
                        (object) [
                            "id"          => 53341450,
                            "kind"        => "Service",
                            "description" => "50% of Phase 1 of the Online Store",
                            "quantity"    => 100.0,
                            "unit_price"  => 100.0,
                            "amount"      => 10000.0,
                            "taxed"       => true,
                            "taxed2"      => true,
                            "project"     => (object) [
                                "id"   => 14308069,
                                "name" => "Online Store - Phase 1",
                                "code" => "OS1"
                            ]
                        ]
                    ]
                ]
            ],
            "per_page"      => 100,
            "total_pages"   => 1,
            "total_entries" => 2,
            "next_page"     => null,
            "previous_page" => null,
            "page"          => 1,
            "links"         => (object) [
                "first"    => "https://api.harvestapp.com/v2/invoices?page=1&per_page=100",
                "next"     => null,
                "previous" => null,
                "last"     => "https://api.harvestapp.com/v2/invoices?page=1&per_page=100"
            ]
        ];

        return response(json_encode($data));
    }

    /**
     * @param $invoiceId
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function getInvoice($invoiceId)
    {
        $data = (object) [
            "id"                   => 13150378,
            "client_key"           => "9e97f4a65c5b83b1fc02f54e5a41c9dc7d458542",
            "number"               => "1000",
            "purchase_order"       => "1234",
            "amount"               => 10700.0,
            "due_amount"           => 0.0,
            "tax"                  => 5.0,
            "tax_amount"           => 500.0,
            "tax2"                 => 2.0,
            "tax2_amount"          => 200.0,
            "discount"             => null,
            "discount_amount"      => 0.0,
            "subject"              => "Online Store - Phase 1",
            "notes"                => "Some notes about the invoice.",
            "state"                => "paid",
            "period_start"         => null,
            "period_end"           => null,
            "issue_date"           => "2017-02-01",
            "due_date"             => "2017-03-03",
            "payment_term"         => "custom",
            "sent_at"              => "2017-02-01T07=>00=>00Z",
            "paid_at"              => "2017-02-21T00=>00=>00Z",
            "paid_date"            => "2017-02-21",
            "closed_at"            => null,
            "recurring_invoice_id" => null,
            "created_at"           => "2017-06-27T16=>24=>30Z",
            "updated_at"           => "2017-06-27T16=>24=>57Z",
            "currency"             => "USD",
            "client"               => (object) [
                "id"   => 5735776,
                "name" => "123 Industries",
            ],
            "estimate"             => (object) [
                "id" => 1439814,
            ],
            "retainer"             => null,
            "creator"              => (object) [
                "id"   => 1782884,
                "name" => "Bob Powell",
            ],
            "line_items"           => [
                (object) [
                    "id"          => 53341450,
                    "kind"        => "Service",
                    "description" => "50% of Phase 1 of the Online Store",
                    "quantity"    => 100.0,
                    "unit_price"  => 100.0,
                    "amount"      => 10000.0,
                    "taxed"       => true,
                    "taxed2"      => true,
                    "project"     => (object) [
                        "id"   => 14308069,
                        "name" => "Online Store - Phase 1",
                        "code" => "OS1",
                    ],
                ],
            ],
        ];

        return response(json_encode($data));
    }
}
