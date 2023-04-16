<?php

namespace App\Interfaces;

interface HistoryRepositoryInterface 
{
    public function getAllHistories();
    public function getJobsHistory();
    public function getEducationHistory();
    public function getSkills();
}