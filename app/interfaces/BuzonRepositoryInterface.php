<?php
namespace App\Interfaces;
use Illuminate\Http\Request;

interface BuzonRepositoryInterface
{
    public function storeBuzon(Request $request);
}
