<?php
namespace App\Services;
/**
* 
*/
interface PropertyService
{
	public function add($request);

	public function listAll();

	public function find($id);

	public function updateStatus(array $request);
}