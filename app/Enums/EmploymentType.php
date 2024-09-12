<?php

namespace App\Enums;

enum EmploymentType: string 
{
    case FULL_TIME = 'full_time';
    case PART_TIME = 'part_time';
    case CONTRACT = 'contract';
    case FREELANCE = 'freelance';
    case INTERNSHIP = 'internship';
    case REMOTE = 'remote';
    case OTHER = 'other';
}