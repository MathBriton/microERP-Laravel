<?php

namespace App\Swagger;

use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     title="MicroERP API",
 *     version="1.0.0",
 *     description="Documentação da API do microERP",
 * )
 *
 * @OA\Server(
 *     url=L5_SWAGGER_CONST_HOST,
 *     description="Servidor local"
 * )
 */
class SwaggerInfo {}
