<?php

namespace App\Services;

interface BaseInterface
{
    /**
     * Retorna todos os registros.
     *
     * @return mixed
     */
    public function getAll();

    /**
     * Retorna um registro pelo ID.
     *
     * @param int $id
     * @return mixed
     */
    public function getById(int $id);

    /**
     * Cria um novo registro.
     *
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * Atualiza um registro existente.
     *
     * @param int $id
     * @param array $data
     * @return mixed
     */
    public function update(int $id, array $data);

    /**
     * Deleta um registro pelo ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool;
}
