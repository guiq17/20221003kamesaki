<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use Illuminate\Support\Str;

class SchoolController extends Controller
{
    public function fillSchool() {
        $school = new School();
        $uuid = (string)Str::uuid();
        $school->fill([
            'uuid' =>  $uuid,
            'name' => 'COACHTECH',
        ]);
        $school->save();
    }
    public function createSchool() {
        $uuid = (string)Str::uuid();
        School::create([
            'uuid' =>  $uuid,
            'name' => 'COACHTECH-Pro',
        ]);
    }
    public function insertSchool() {
        $school = new School();
        $uuid = (string)Str::uuid();
        $school::insert([
            'uuid' =>  $uuid,
            'name' => 'COACHTECH-Lab',
        ]);
    }
}
