<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *     name="Products",
 *     description="Endpoints de produtos"
 * )
 *
 * @OA\PathItem()
 */
class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * @OA\Get(
     *     path="/products",
     *     summary="Lista todos os produtos",
     *     tags={"Products"},
     *     @OA\Response(response=200, description="Lista de produtos")
     * )
     */
    public function index()
    {
        return response()->json($this->productService->getAll());
    }

    /**
     * @OA\Get(
     *     path="/products/{id}",
     *     summary="Mostra um produto pelo ID",
     *     tags={"Products"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Produto encontrado"),
     *     @OA\Response(response=404, description="Produto não encontrado")
     * )
     */
    public function show($id)
    {
        return response()->json($this->productService->getById($id));
    }
}
