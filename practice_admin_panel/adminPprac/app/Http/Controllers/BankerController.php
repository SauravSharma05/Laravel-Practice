<?php

namespace App\Http\Controllers;

use App\Models\Banker;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BankerController extends Controller
{
    public function index()
    {
        return view('bankerhome');
    }
        public function bankulist()
    {
        // $userdata = Client::all();
        $userdata = DB::table('clients')
            ->join('bankers', 'clients.id', '=', 'clients.banker_id')
            ->select('clients.*')
            ->get();
            // dd($userdata);
        return view('bankeruserlist',compact('userdata'));
    }
        public function bankulist_getdata($client_id)
    {
        $data = Client::findOrFail($client_id);
        $userdata = DB::table('clients')
            ->select('clients.*')
            ->where('id','=',$client_id)
            ->get();
            // dd($userdata);
        return view('banker_edituserdata',compact('userdata'));
    }

    public function bankulist_store(Request $request)
    {
        // $data = Client::findOrFail($client_id);

        // if($request->hasFile('mortaadhar'))
        // {
        //     $file = $request->file('mortaadhar');
        //     $ext = $file->getClientOriginalExtension();
        //     $docs =  'assets/docs/';
        //     $mortaadhar =  $docs.time().'.'.$ext;
        //     $file->move($docs,$mortaadhar);
        //     $data->mortaadhar = $mortaadhar;
        // }
        // if($request->hasFile('mortpan'))
        // {
        //     $file = $request->file('mortpan');
        //     $ext2 = $file->getClientOriginalExtension();
        //     $docs2 =  'assets/docs/';
        //     $mortpan =  $docs2.time().'.'.$ext2;
        //     $file->move($docs2,$mortpan);
        //     $data->mortpan = $mortpan;
        // }
        // if($request->hasFile('wit1aadhar'))
        // {
        //     $file = $request->file('wit1aadhar');
        //     $ext3 = $file->getClientOriginalExtension();
        //     $docs3 =  'assets/docs/';
        //     $wit1aadhar =  $docs3.time().'.'.$ext3;
        //     $file->move($docs3,$wit1aadhar);
        //     $data->wit1aadhar = $wit1aadhar;
        // }
        // if($request->hasFile('wit1pan'))
        // {
        //     $file = $request->file('wit1pan');
        //     $ext4 = $file->getClientOriginalExtension();
        //     $docs4 =  'assets/docs/';
        //     $wit1pan =  $docs4.time().'.'.$ext4;
        //     $file->move($docs4,$wit1pan);
        //     $data->wit1pan = $wit1pan;
        // }
        // if($request->hasFile('wit2aadhar'))
        // {
        //     $file = $request->file('wit2aadhar');
        //     $ext5 = $file->getClientOriginalExtension();
        //     $docs5 =  'assets/docs/';
        //     $wit2aadhar =  $docs5.time().'.'.$ext5;
        //     $file->move($docs5,$wit2aadhar);
        //     $data->wit2aadhar = $wit2aadhar;
        // }
        // if($request->hasFile('wit2pan'))
        // {
        //     $file = $request->file('wit2pan');
        //     $ext6 = $file->getClientOriginalExtension();
        //     $docs6 =  'assets/docs/';
        //     $wit2pan =  $docs6.time().'.'.$ext6;
        //     $file->move($docs6,$wit2pan);
        //     $data->wit2pan = $wit2pan;
        // }
        // if($request->hasFile('qrcode'))
        // {
        //     $file = $request->file('qrcode');
        //     $ext7 = $file->getClientOriginalExtension();
        //     $docs7 =  'assets/docs/';
        //     $qrcode =  $docs7.time().'.'.$ext7;
        //     $file->move($docs7,$qrcode);
        //     $data->qrcode = $qrcode;
        // }

            Banker::create([

            'name'=>$request->name,
            'mobile'=>$request->mobile,
            'mortname'=>$request->mortname,
            'mortnumber'=>$request->mortnumber,
            'wit1name'=>$request->wit1name,
            'wit2name'=>$request->wit2name,

            'mortaadhar'=>$request->mortaadhar,
            'mortpan'=>$request->mortpan,
            'wit1aadhar'=>$request->wit1aadhar,
            'wit1pan'=>$request->wit1pan,
            'wit2aadhar'=>$request->wit2aadhar,
            'wit2pan'=>$request->wit2pan,
            'qrcode'=>$request->qrcode,

            'borname'=>$request->borname,

            'bankname'=>$request->bankname,
            'sancletter'=>$request->sancletter,
            'legreport'=>$request->legreport,
            'finalloanamt'=>$request->finalloanamt,
            'cusmobile'=>$request->cusmobile,
            'bankername'=>$request->bankername,
            'bankerno'=>$request->bankerno,

            ]);

            return redirect('/bankeruserlist');
    }
}
