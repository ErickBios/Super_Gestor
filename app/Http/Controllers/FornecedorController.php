<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index ()
    {
        $fornecedores = [
                            0 => ['Nome' =>'Erick Bios - Forne 1', 
                                'Status' => 'N', 
                                'CNPJ' => '04151564',
                                'DDD' => '', //São Paulo - SP
                                'Teleforne' => '0000-0000'
                            ],
                            1 => ['Nome' =>'New Youk - Forne 2', 
                                'Status' => 'S', 
                                'CNPJ' => null,
                                'DDD' => '32', //Fortaleza - CE
                                'Teleforne' => '0000-0001'                                
                             ],
                            2 => ['Nome' =>'Marlor Brando - Forne 3', 
                            'Status' => 'S', 
                            'CNPJ' => null,
                            'DDD' => '94', //Pará - PA
                            'Teleforne' => '0000-0002'                                
                            ]

                        ];

          
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
