<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Taken_Exam;
class Comprehensive_Exam extends Model
{
    use HasFactory;
    protected $table = 'comprehensive_exam'; 
    public $timestamps = false;
    protected $primaryKey = 'examId';
    protected $fillable = [
        'year', 'season', 'description', 'pdfPath',
    ];


    public function takenExams()
    {
        return $this->hasMany(Taken_Exam::class, 'examId', 'examId');
    }
}
