<?php

namespace App\Http\Controllers;

use App\Services\InvoiceService;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *     name="Invoices",
 *     description="Endpoints de faturas"
 * )
 *
 * @OA\PathItem()
 */
class InvoiceController extends Controller
{
    protected $invoiceService;

    public function __construct(InvoiceService $invoiceService)
    {
        $this->invoiceService = $invoiceService;
    }

    /**
     * @OA\Get(
     *     path="/invoices",
     *     summary="Lista todas as faturas",
     *     tags={"Invoices"},
     *     @OA\Response(response=200, description="Lista de faturas")
     * )
     */
    public function index()
    {
        return response()->json($this->invoiceService->getAll());
    }

    /**
     * @OA\Get(
     *     path="/invoices/{id}",
     *     summary="Mostra uma fatura pelo ID",
     *     tags={"Invoices"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Fatura encontrada"),
     *     @OA\Response(response=404, description="Fatura não encontrada")
     * )
     */
    public function show($id)
    {
        return response()->json($this->invoiceService->getById($id));
    }
}
