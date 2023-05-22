<?php

namespace App\Http\Interfaces\Admin;

interface CategoryInterface
{
    public function index($dataTable);

    public function create();

    public function store($request);

    public function edit($id);

    public function update($request, $id);

    public function destroy($id);

    public function show($id);

}
