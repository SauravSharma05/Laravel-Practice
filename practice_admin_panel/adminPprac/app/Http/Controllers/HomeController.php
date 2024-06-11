<?php

namespace App\Http\Controllers;

use App\Models\Banker;
use App\Models\Client;
use App\Models\Saledeed;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function reg_mort()
    {
        $banker_id = Banker::all();
        return view('reg_mortgage', compact('banker_id'));
    }
    public function reg_mort_data( Request $request)
    {

        if($request->hasFile('mortaadhar'))
        {
            $file = $request->file('mortaadhar');
            $ext = $file->getClientOriginalExtension();
            $docs =  'assets/docs/';
            $mortaadhar =  $docs.time().'.'.$ext;
            $file->move($docs,$mortaadhar);

        }
        if($request->hasFile('mortpan'))
        {
            $file = $request->file('mortpan');
            $ext2 = $file->getClientOriginalExtension();
            $docs2 =  'assets/docs/';
            $mortpan =  $docs2.time().'.'.$ext2;
            $file->move($docs2,$mortpan);
        }
        if($request->hasFile('wit1aadhar'))
        {
            $file = $request->file('wit1aadhar');
            $ext3 = $file->getClientOriginalExtension();
            $docs3 =  'assets/docs/';
            $wit1aadhar =  $docs3.time().'.'.$ext3;
            $file->move($docs3,$wit1aadhar);
        }
        if($request->hasFile('wit1pan'))
        {
            $file = $request->file('wit1pan');
            $ext4 = $file->getClientOriginalExtension();
            $docs4 =  'assets/docs/';
            $wit1pan =  $docs4.time().'.'.$ext4;
            $file->move($docs4,$wit1pan);
        }
        if($request->hasFile('wit2aadhar'))
        {
            $file = $request->file('wit2aadhar');
            $ext5 = $file->getClientOriginalExtension();
            $docs5 =  'assets/docs/';
            $wit2aadhar =  $docs5.time().'.'.$ext5;
            $file->move($docs5,$wit2aadhar);
        }
        if($request->hasFile('wit2pan'))
        {
            $file = $request->file('wit2pan');
            $ext6 = $file->getClientOriginalExtension();
            $docs6 =  'assets/docs/';
            $wit2pan =  $docs6.time().'.'.$ext6;
            $file->move($docs6,$wit2pan);
        }
        if($request->hasFile('qrcode'))
        {
            $file = $request->file('qrcode');
            $ext7 = $file->getClientOriginalExtension();
            $docs7 =  'assets/docs/';
            $qrcode =  $docs7.time().'.'.$ext7;
            $file->move($docs7,$qrcode);
        }

        Client::create([

            'name'=>$request->name,
            'mobile'=>$request->mobile,
            'mortname'=>$request->mortname,
            'mortnumber'=>$request->mortnumber,
            'wit1name'=>$request->wit1name,
            'wit2name'=>$request->wit2name,

            'mortaadhar'=>$mortaadhar,
            'mortpan'=>$mortpan,
            'wit1aadhar'=>$wit1aadhar,
            'wit1pan'=>$wit1pan,
            'wit2aadhar'=>$wit2aadhar,
            'wit2pan'=>$wit2pan,
            'qrcode'=>$qrcode,

            'banker_id'=>$request->banker_id,

        ]);
        return view('reg_mortgage');
    }

    public function saledeed_reg()
    {
        return view('saledeed');
    }
    public function saledeed_reg_store(Request $request, Saledeed $saledeed)
    {
        Saledeed::create([

            'clientname'=>$request->clientname,
            'buyername'=>$request->buyername,
            'mobile'=>$request->mobile,
            'mortnumber'=>$request->mortnumber,

            'wit1name'=>$request->wit1name,
            'wit1aadhar'=>$request->wit1aadhar,
            'wit1pan'=>$request->wit1pan,

            'wit2name'=>$request->wit2name,
            'wit2aadhar'=>$request->wit2aadhar,
            'wit2pan'=>$request->wit2pan,

            'banker_id'=>$request->banker_id,

        ]);
        return view('saledeed');
    }
}
