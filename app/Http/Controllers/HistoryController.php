<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\HistoryRepositoryInterface;

class HistoryController extends Controller
{
    private HistoryRepositoryInterface $historyRepository;

    public function __construct(HistoryRepositoryInterface $historyRepository) 
    {
        $this->historyRepository = $historyRepository;
    }

    public function getAll(){

        $jobs = $this->historyRepository->getJobsHistory();
        $educations = $this->historyRepository->getEducationHistory();
        $skills = $this->historyRepository->getSkills();

        return view('CV', compact('jobs', 'educations', 'skills'));

    }
}
