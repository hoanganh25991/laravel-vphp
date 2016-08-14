<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pd;
use App\PdRecord;
use Auth;
use Db;

class PdController extends Controller
{
    public function index() {

    }

    public function create() {
    	return view('pd.create');
    }

    public function store(Request $request) {
    	$user = Auth::user();
    	$pd = new Pd;
    	$pd->amount = $request->amount;
    	$user->pds()->save($pd);
    	return $pd;
    }

    public function show() {

    }

    public function matched(Pd $pd) {
        $pdRecords = PdRecord::where('pd_id', $pd->id)->where('sender_id', Auth::user()->id)->pluck('receiver_id')->toArray();
        return view('pd.matched', compact('pd','pdRecords'));
    }

    public function senderConfirm(Pd $pd, $receiverId) {
        $pdRecord = new PdRecord;
        $pdRecord->sender_id = Auth::user()->id;
        $pdRecord->receiver_id = $receiverId;
        $pdRecord->amount = $pd->amount/3;
        $pd->pdRecords()->save($pdRecord);
        
        // Check total of amount of total PdRecord relate to this PD
        $pdRecords = PdRecord::where('pd_id', $pd->id)->pluck('amount');
        $sum = 0;
        foreach ($pdRecords as $key => $value) {
            $sum += $value;
        }
        if ($pd->amount == $sum) {
            return 'R-Wallet increased';
        } 
        return back();
        
        return PD::where('id', $pd->id)->with('pdRecords')->get();
    }

    public function receiverConfirm(Pd $pd, $receiverId) {
        $pdRecord = new PdRecord;
        $pdRecord->sender_id = 1;
        $pdRecord->receiver_id;
        // return PD::where('id', $pd->id)
    }
}
