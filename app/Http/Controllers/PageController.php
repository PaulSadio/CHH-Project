<?php

namespace App\Http\Controllers;

use App\Models\addmember;
use App\Models\Adminmemo;
use App\Models\Memberss;
use App\Models\Proposals;
use App\Models\Registrations;
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

    public function fundraiser() {
        return view('admin.treasuryfundraiser');
    }

    public function evaluation() {
        return view('admin.evaluation');
    }

    public function treasury() {
        return view('admin.treasury');
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

    public function view(Memberss $membersss) {
        return view('admin.view', ['membersss'=>$membersss]);
    }
    
}
