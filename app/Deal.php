<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    //
    protected $table = 'deals';

    protected $fillable = ['companyName', 'companyType','companyIndustry', 'Address ','telephone', 'email','AmountToRaise', 'image','detailedDescription', 'businessPlan','MOU', 'certificateOfRegistration','financialStatement', 'cashFlowStatement ','contractDocument', ' auditedAccounts'];
}
