<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\society;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function socityIndex()
    {
        $societyIndexs = society::all();
        return view('admin.society', compact('societyIndexs'));
    }
    public function socityCreate()
    {
        return view('admin.society');
    }
    public function socityStore(Request $request)
    {
        $societydata = request()->validate([
            'name' => 'required|max:100',
            'address' => 'required|max:255',
            'contact_info' => 'required|max:255',
        ]);
        society::create($societydata);
        return redirect()->route('admin.socity.index')->with('success', 'Socity Added Successfully');
    }

    public function socityEdit($id)
    {
        $society = society::find($id);
        return view('admin.society', compact('society'));
    }

    public function socityUpdate(Request $request, society $socityUpdate)
    {
        $socityUpdate = request()->validate([
            'username' => 'required|max:50',
            'userpassword' => 'required|max:255',
            'name' => 'required|max:100',
            'category' => 'required|max:50',
        ]);
        society::update($socityUpdate);
        return redirect()->route('admin.socity')->with('success', 'Member Updated Successfully');
    }
    public function socityDestroy(society $socity)
    {
        $socity->delete();
        return redirect()->route('admin.socity.index')->with('success', 'Member Deleted Successfully');
    }





    public function loadApply()
    {
        return view('admin.loadApply');
    }
    public function loanCollection()
    {
        return view('admin.loanCollection');
    }

    public function shareCollection()
    {
        return view('admin.shareCollection');
    }
    public function denytoApprove()
    {
        return view('admin.denytoApprove');
    }


    // socity controller



    // Member Controller

    // public function member()
    // {
    //     return view('admin.member');
    // }


}
