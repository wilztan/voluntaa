<?php

use Illuminate\Database\Seeder;
use App\Company;
use App\CompanyRole;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Company::create([
            'name'=>'Company A',
            'email'=>'companya@company.com',
            'password'=>'companya',
            'phone'=>'085754557777',
            'address'=>'company st',
            'websites'=>'companya.com',
            'status'=>'company',
            ]);
        CompanyRole::create([
            'company_id'=>1,
            'user_id'=>1,
            'company_role'=>'Chief Marketing Officer',
            'status'=>'approved',
            ]);


    	Company::create([
            'name'=>'Company B',
            'email'=>'companyb@company.com',
            'password'=>'companyb',
            'phone'=>'085754557777',
            'address'=>'company st',
            'websites'=>'companyb.com',
            'status'=>'company',
            ]);
        CompanyRole::create([
            'company_id'=>2,
            'user_id'=>1,
            'company_role'=>'HR Recruiter',
            'status'=>'approved',
            ]);


    	Company::create([
            'name'=>'Company C',
            'email'=>'companyc@company.com',
            'password'=>'companyc',
            'phone'=>'085754557777',
            'address'=>'company st',
            'websites'=>'companyc.com',
            'status'=>'company',
            ]);
        CompanyRole::create([
            'company_id'=>3,
            'user_id'=>1,
            'company_role'=>'Director',
            'status'=>'approved',
            ]);


    	Company::create([
            'name'=>'Company D',
            'email'=>'companyd@company.com',
            'password'=>'companyd',
            'phone'=>'085754557777',
            'address'=>'company st',
            'websites'=>'companyd.com',
            'status'=>'company',
            ]);
        CompanyRole::create([
            'company_id'=>4,
            'user_id'=>1,
            'company_role'=>'Public Relation Staff',
            'status'=>'approved',
            ]);


    	Company::create([
            'name'=>'Company E',
            'email'=>'companye@company.com',
            'password'=>'companye',
            'phone'=>'085754557777',
            'address'=>'company st',
            'websites'=>'companye.com',
            'status'=>'company',
            ]);
        CompanyRole::create([
            'company_id'=>5,
            'user_id'=>1,
            'company_role'=>'Head Editor',
            'status'=>'approved',
            ]);


    	Company::create([
            'name'=>'Company F',
            'email'=>'companyf@company.com',
            'password'=>'companyf',
            'phone'=>'085754557777',
            'address'=>'company st',
            'websites'=>'companyf.com',
            'status'=>'company',
            ]);
        CompanyRole::create([
            'company_id'=>6,
            'user_id'=>1,
            'company_role'=>'General Manager',
            'status'=>'approved',
            ]);
    }
}
