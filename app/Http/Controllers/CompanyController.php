<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public  function construct(){
        $this->middleware('auth');
    }
    public function index(){

        $companies = Company::all();
        return view('admin.company.company',[
            'companies'=>$companies
        ]);
    }

    public  function addCompany(){
        return view('admin.company.add-company');
    }

    public function saveCompany(Request $request){
        $companyImage = $request->file('com_logo');
        $imageName = $companyImage->getClientOriginalName();
        $directory = 'admin/images/company-images/';
        $imageUrl = $directory.$imageName;
        $companyImage->move($directory,$imageName);


        $company = new Company();
        $company->com_name = $request->com_name;
        $company->com_email = $request->com_email;
        $company->com_logo = $imageUrl;
        $company->com_website=$request->com_website;
        $company->save();

        return back()->with('message','Company Saved Successfully');



    }
    public  function editCompany($id)
    {
        $company = Company::find($id);
        return view('admin.company.edit-company', [
            'company' => $company

        ]);
    }

    public  function Updatecompany(Request $request)
    {
        $company = Company::find($request->id);

        $companyImage = $request->file('com_logo');
        if ($companyImage) {
            unlink($company->com_logo);
            $imageName = $companyImage->getClientOriginalName();
            $directory = 'admin/images/company-images/';
            $imageUrl = $directory . $imageName;
            $companyImage->move($directory, $imageName);

            $company->com_name = $request->com_name;
            $company->com_email = $request->com_email;
            $company->com_logo = $imageUrl;
            $company->com_website=$request->com_website;
            $company->save();
        }
        else{
            $company->com_name = $request->com_name;
            $company->com_email = $request->com_email;
            $company->com_website = $request->com_website;
            $company->save();


        }

        return back()->with('message', 'Company Information Updated Successfully');

    }


    public  function DeleteCompany($id){

        $company = Company::find($id);
        unlink($company->com_logo);
        $company->delete();

        return back();

    }

}
