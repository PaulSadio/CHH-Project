<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function signin() {
        return view('signin');
    }

    public function adminproposal() {
        return view('admin.proposal');
    }

    public function admin() {
        return view('admin.adminhome');
    }

    public function member() {
        return view('members.memberhome');
    }

    public function announcement() {
        return view('members.memberannouncement');
    }

    public function registration() {
        return view('members.memberregistration');
    }

    public function proposal() {
        return view('members.memberproposal');
    }

    public function annualfee() {
        return view('admin.treasuryannualfee');
    }

    public function fundraiser() {
        return view('admin.treasuryfundraiser');
    }

    public function evaluation() {
        return view('admin.evaluation');
    }

    public function adminmembers() {
        return view('admin.members');
    }

    public function adminmemo() {
        return view('admin.memo');
    }

    public function treasury() {
        return view('admin.treasury');
    }

    public function attendance() {
        return view('admin.attendance');
    }

    public function addmember() {
        return view('admin.addmember');
    }
    public function view() {
        return view('admin.view');
    }
}
