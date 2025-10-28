<?php

namespace App\Http\Controllers;

use App\Services\CustomerService;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

/**
 * @OA\Tag(name="Customers", description="Endpoints de clientes")
 * @OA\PathItem()  <-- ESSENCIAL
 */
class CustomerController extends Controller
{
    protected $service;

    public function __construct(CustomerService $service)
    {
        $this->service = $service;
    }

    /**
     * @OA\Get(
     *     path="/customers",
     *     summary="Lista todos os clientes",
     *     tags={"Customers"},
     *     @OA\Response(response=200, description="Lista de clientes")
     * )
     */
    public function index()
    {
        return response()->json($this->service->getAll());
    }

    /**
     * @OA\Get(
     *     path="/customers/{id}",
     *     summary="Mostra um cliente pelo ID",
     *     tags={"Customers"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Cliente encontrado"),
     *     @OA\Response(response=404, description="Cliente não encontrado")
     * )
     */
    public function show($id)
    {
        return response()->json($this->service->getById($id));
    }
}
