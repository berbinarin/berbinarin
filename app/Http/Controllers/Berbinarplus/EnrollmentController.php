<?php

namespace App\Http\Controllers\Berbinarplus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berbinarp_enrollment;

class EnrollmentController extends Controller
{
    public function getClassId($className)
    {
        $class = [
            'Jobseekers' => 1,
            'Product Management' => 2,
            'Human Resources' => 3,
            'Graphic Design' => 4
        ];

        return $class[$className];
    }
    // Function to create enrollment
    public function createEnrollment($userId, $className)
    {

        $classId = $this->getClassId($className);
        
        Berbinarp_enrollment::create([
            'user_id' => $userId,
            'class_id' => $classId,
            'transfer_evidance' => '',
            'class_progress' => 0,
            'enrollment_date' => now(),
            'expired_date' => now()->addYear(), // Assuming the expiration is one year from enrollment date
            'completed_date' => null,
        ]);

        //return $enrollment;
    }

}
