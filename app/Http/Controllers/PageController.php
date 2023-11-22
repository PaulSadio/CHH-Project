<?php

namespace App\Http\Controllers;

use App\Models\addmember;
use App\Models\Adminmemo;
use App\Models\Fundraiser;
use App\Models\Memberss;
use App\Models\Proposals;
use App\Models\Registrations;
use App\Models\Remarks;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

class PageController extends Controller
{
    public function signin() {
        return view('signin');
    }
    public function admin() {
        return view('admin.adminhome');
    }

    public function member() {
        return view('member.memberhome');
    }

    public function annualfee() {
        return view('admin.treasuryannualfee');
    }

    public function evaluation() {
        $member = Memberss::all();
        return view('admin.evaluation', ['member'=>$member]);
    }
    public function view(Memberss $member, Proposals $adminproposal, Remarks $remarks) {
        $adminproposal = Proposals::all();
        $remarks = Remarks::all();
        return view('admin.view', ['member'=>$member], ['adminproposal'=>$adminproposal], ['remarks'=>$remarks]);
    }
    public function viewstore(Request $request) {
        $data = [
            'memberremark' => $request -> remark
        ];
        $newView = Remarks::create($data);
        return redirect(route('evaluation'));
    }

    public function treasury() {
        return view('admin.treasury');
    }
    public function fundraiser() {
        $fund = Fundraiser::all();
        return view('admin.treasuryfundraiser', ['fund'=> $fund]);
    }
    public function fundstore(Request $request) {
        $data = [
            'fundraiser_title' => $request -> fundraiser_title,
            'fundraiser_amount' => $request -> fundraiser_amount,
            'fundraiser_date' => $request -> fundraiser_date
        ];
        $newFund = Fundraiser::create($data);
        return redirect(route('fundraiser'));
    }


    public function adminmemo() {
        $announcement = Adminmemo::all();
        return view('admin.memo', ['announcement'=>$announcement]);
    }
    public function announcement() {
        $announcement = Adminmemo::all();
        return view('member.memberannouncement', ['announcement'=>$announcement]);
    }
    public function memostore(Request $request) {
        $data = [
            'memofile' => $request -> memofile
        ];
        $newMemo = Adminmemo::create($data);
        return redirect(route('adminmemo'));
    }


    public function attendance() {
        $attendance = Registrations::all();
        $adminproposal = Proposals::all();
        return view('admin.attendance', ['attendance'=>$attendance], ['adminproposal'=>$adminproposal]);
    }
    public function registration() {
        return view('member.memberregistration');
    }
    public function regstore(Request $request) {
        $data = [
            'eventid'=> $request -> eventid,
            'participantname'=> $request -> participantname,
            'participantid'=> $request -> participantid,
            'participantemail'=> $request -> participantemail
        ];
        $newReg = Registrations::create($data);
        return redirect(route('registration'));
    }
    

    public function addmember() {
        return view('admin.addmember');
    }
    public function adminmembers() {
        $addmember = Memberss::all();
        return view('admin.members', ['addmember'=>$addmember]);
    }
    public function store(Request $request) {
        $data = [
        'membername' => $request -> membername,
        'memberaddress'=> $request -> memberaddress,
        'memberemail'=> $request -> memberemail,
        'contactnumber'=> $request -> contactnumber,
        'memberage'=> $request -> memberage,
        'membersex'=> $request -> membersex,
        'birthday'=> $request -> birthday,
        'profilepic'=> $request ->profilepic
        ];

        $newData = Memberss::create($data);
        return redirect(route('adminmembers'));
    }
    public function update(Memberss $member, Request $request) {
        $data = [
        'membername' => $request -> membername,
        'memberaddress'=> $request -> memberaddress,
        'memberemail'=> $request -> memberemail,
        'contactnumber'=> $request -> contactnumber,
        'memberage'=> $request -> memberage,
        'membersex'=> $request -> membersex,
        'birthday'=> $request -> birthday,
        'profilepic'=> $request ->profilepic
        ];
        $member->update($data);
        return redirect(route('adminmembers'));
    }
    public function edit(Memberss $member) {
        return view('admin.adminmemberedit', ['member'=>$member]);
    }

    public function adminproposal() {
        $adminproposal = Proposals::all();
        return view('admin.proposal', ['adminproposal'=>$adminproposal]);
    }
    public function proposal() {
        return view('member.memberproposal');
    }
    public function propstore(Request $request) {
        $data = [
            'propname'=> $request -> propname,
            'proptitle'=> $request -> proptitle,
            'propdate'=> $request -> propdate,
            'proplocation'=> $request -> proplocation,
            'propfile'=> $request -> propfile
        ];
        $newProposal = Proposals::create($data);
        return redirect(route('proposal'));
    }

  
    
}
