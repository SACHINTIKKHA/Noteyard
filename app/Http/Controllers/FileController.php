<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\newmail;
use App\Mail\adminmail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use Carbon\Carbon;
class FileController extends Controller
{
    public function studentregister(Request $sap){
        $path = 'uploads/default.jpg';
        $var=DB::table('users')->insert([
            'first'=>$sap->first,
            'last'=>$sap->last,
            'contact'=>$sap->contact,
            'email'=>$sap->email,
            'password' => Hash::make($sap->password),
            'dob'=>$sap->dob,
            'father'=>$sap->father,
            'mother'=>$sap->mother,
            'image'=>$path

        ]);return redirect('studentlogin');
    }
    public function loginpage(Request $load){
        $query1 = DB::table('admin')->where('email', $load->email)->first();
            if ($query1 && Hash::check($load->password, $query1->password)) {
            session()->flush();
            session([
            'name' => $query1->name,
            'adminid'=>$query1->id,
            'email' => $query1->email
            ]);
            return redirect('admindashboard');
        }return back()->with('error', 'Invalid email or password');
    }
    public function list(){
            $data1=DB::table('users')->get();
            return view('admin.studentlist',compact('data1'));

    }
    public function stlogin(Request $log){    
            $user = DB::table('users')->where('email', $log->email)->first();
                if ($user && Hash::check($log->password, $user->password)) {
                $log->session()->regenerate();
                session([
                'id' => $user->id,
                'name' => $user->first,
                'email' => $user->email,
                'last' => $user->last,
                'con' => $user->contact,
                'father'=>$user->father,
                'mother'=>$user->mother,
                'image'=>$user->image
            ]);
            return redirect('/studentdashboard');
        }   return back()->with('error', 'Invalid email or password');
    }
    public function stdel($id){
            $del=DB::table('users')->where('id',$id)->delete();
            return redirect('studentlist');
    }
    public function exit(Request $req){
            $req->session()->flush();
            $req->session()->invalidate();
            $req->session()->regenerateToken();
            return redirect('home');
    }
    public function fileuploaddata(Request $upl){
            $upl->validate([
                'file'=>'required|file|mimes:jpg,png,pdf|max:2048'
                ]);
                    if($upl->hasFile('file')){
                    $file=$upl->file('file');
                    $filename = time().'_'.$file->getClientOriginalName();
                    $path=$file->storeAs('uploads',$filename,'public');
                    }
                    $file=DB::table('notes')->insert([
                    'name'=>$upl->name,
                    'title'=>$upl->title,
                    'description'=>$upl->description,
                    'file'=>$path,
                    'createdat'=>now()->format('d/m/Y'),
                    'updatedat'=>'N/A',
                    'filetype'=>$upl->plan
                ]);return redirect('document');
    }
    public function fetchfile(){
            $hash=DB::table('notes')->get();
            return view ('admin.adminnotes',compact('hash'));
    }
    public function editing($id){
            $desk=DB::table('notes')->where('id',$id)->first();
                if($desk){
                    return view('admin.editfile',compact('desk'));
        }
    }
    public function newdata(Request $upl,$id){
            if($upl->hasFile('file')){
                $file=$upl->file('file');
                $filename = time().'_'.$file->getClientOriginalName();
                $path=$file->storeAs('uploads',$filename,'public');
            }
                $del=DB::table('notes')->where('id',$id)->update([
                'name'=>$upl->name,
                'title'=>$upl->title,
                'description'=>$upl->description,
                'file'=>$path,
                'updatedat'=>now()->format('d/m/Y'),
                ]);return redirect('document');
    }
    public function del($id){
            $delete=DB::table('notes')->where('id',$id)->delete();
            return redirect('document');
    }
    public function subscription(Request $sub){
            $sub->validate([
            'file'=>'required|file|mimes:jpg,png,jpeg|max:500',
            'validity'=>'required|numeric|min:50|max:365'
            ]);
                if($sub->hasFile('file')){
                    $file=$sub->file('file');
                    $filename=time().'_'.$file->getClientOriginalName();
                    $path=$file->storeAs('uploads',$filename,'public');
                    }
                    $value1=DB::table('subscription')->insert([
                    'title'=>$sub->title,
                    'description'=>$sub->description,
                    'image'=>$path,
                    'amount'=>$sub->price,
                    'validity'=>$sub->validity
                    ]);return redirect('subscriptionlist');
    }
    public function today(){
            $dt=DB::table('notes')->latest('id')->first();
            $date=Carbon::now()->format('Ymd');
            $crax=$dt ? $dt->id:0;
            $uniq='NOTE/'.$date.'/'.str_pad($crax+1,3,'0',STR_PAD_LEFT);
            return view('admin.upload',compact('uniq'));
    }
    public function addnewuser(Request $sap){
            $var=DB::table('users')->insert([
            'first'=>$sap->first,
            'last'=>$sap->last,
            'contact'=>$sap->contact,
            'email'=>$sap->email,
            'password'=>$sap->password,
            'dob'=>$sap->dob,
            'father'=>$sap->father,
            'mother'=>$sap->mother
            ]);
                if($var)
                $data1=DB::table('student')->get();
                return view('admin.studentlist',compact('data1'));
    }
    public function sublist(){
            $data=DB::table('subscription')->get();
            return view('admin.subscriptionlist',compact('data'));
    } 
    public function subediting($id){
            $tab=DB::table('subscription')->where('id',$id)->first();
            return view('admin.subscriptionedit',compact('tab'));
    }
    public function subupdate(Request $upl,$id){
            if($upl->hasFile('file')){
            $file=$upl->file('file');
            $filename = time().'_'.$file->getClientOriginalName();
            $path=$file->storeAs('uploads',$filename,'public');
            }$data=DB::table('subscription')->where('id',$id)->update([
            'title'=>$upl->title,
            'description'=>$upl->description,
            'image'=>$path,
            'amount'=>$upl->price,
            'validity'=>$upl->validity
            ]);return redirect('subscriptionlist');
    }
    public function delsub($id){
            $val=DB::table('subscription')->where('id',$id)->delete();
            return redirect('subscriptionlist');
    }
    public function freeloginfile(){
            $file=DB::table('notes')->where('filetype','free')->get();
            return view('homes',compact('file'));
    }
    public function verify($id){
            $userId = session('id');
            $pay = DB::table('payment')->where('userid', $userId)->exists();
            $file = DB::table('notes')->where('id', $id)->first();
                if (!$file) {
                return back()->with('error', 'File not found');
                }
                if ($pay) {
                return response()->download(public_path('storage/' . $file->file));
                }else{
                    if ($file->filetype == 'free') {
                    return response()->download(public_path('storage/' . $file->file));
                    }return back()->with('error', 'Please buy subscription');
                }
    }
    public function newsub(){
            $paytab=DB::table('payment')->where('userid',session('id'))->exists();
            if($paytab){
            return redirect('planactivated');
            }else{
            $tab=DB::table('subscription')->get();
            return view('student.newsubscription',compact('tab'));
            }
    }
    public function other($id){
            $say=DB::table('subscription')->where('id',$id)->first();
            return view('student.new2subscription',compact('say'));
    }
    public function sendmail($id){
            return redirect('pay/'.$id);
    }
    public function next($id){
            return view('student.pay',compact('id'));
    }
    public function submit(Request $gateway, $id){
            $db = DB::table('subscription')->where('id', $id)->first();

            $file = $gateway->file('file');
            $filename = time().'_'.$file->getClientOriginalName();
            $path = $file->storeAs('uploads', $filename, 'public');
            $date=Carbon::now();
            $validity=(int)$db->validity;
            $addval=$date->copy()->addDays($validity);
            $useddays=(int)$date->diffInDays(Carbon::now());
            $leftdays=$validity-$useddays;

            DB::table('payment')->insert([
            'userid'  => session('id'),
            'planid'  => $db->id,
            'utr'     => $gateway->utr,
            'status'  => "pending",
            'date'    => Carbon::now()->format('d/m/Y'),
            'amount'  => $gateway->amount,
            'image'   => $path,
            'leftdays'=>$leftdays
            ]);
            return redirect('studentdashboard');
    }
    public function currency(Request $upp,$id){
            $pack=DB::table('subscription')->where('id',$id)->first();
            $planid="$pack->id";
            $validity="$pack->validity";
            $amount="$pack->amount";
            $add=DB::table('payment')->insert([
            'planid'=>$planid,
            'amount'=>$upp->amount,
            'utr'=>$upp->utr,
            'status'=>"pending",
            'date'=>$date,
            'userid'=>session('id'),
            ]);
            return redirect('studentdashboard');
    }
    public function pay(){
            $data=DB::table('payment')->get();
            return view('admin.paymentuser',compact('data'));
    }
    public function accept($id){
            $data=DB::table('payment')->where('id',$id)->update([
            'status'=>"Accepted"
            ]);
            $mail=DB::table('payment')->join('users','users.id',"=",'payment.userid')->where('payment.id',$id)->select('users.email')->first();
            $to=$mail->email;
            mail::to($to)->send(new adminmail);
            return redirect('paymentuser');
    }
    public function reject($id){
            $data=DB::table('payment')->where('id',$id)->update([
            'status'=>"Rejected",
            ]);return redirect('paymentuser');

    }
    public function allfile(){
            $join = DB::table('payment')->join('users', 'users.id', '=', 'payment.userid')->where('payment.status', 'Accepted')->where('userid', session('id'))->first();
            if ($join) {
            $new = DB::table('payment')->join('subscription','subscription.id','=','payment.planid')->select('subscription.*')->where('userid',session('id'))->first();
            $new2= DB::table('payment')->join('subscription','subscription.id','=','payment.planid')->select('payment.*')->where('userid',session('id'))->first();
            return view('student.activatedplan', compact('new','new2'));
            } else {
            return redirect('emptyactivatedplan');
            }
    }
    public function notesdata(){
            $data=DB::table('notes')->orderBy('title','desc')->where('filetype','free')->get();
            return view('notes',compact('data'));
    }
    public function freefile(){
            $selected=DB::table('favourite')->join('notes','notes.id','=','favourite.notesid')->select('notes.*')->orderBy('favourite.title','desc')->limit(6)->get();
            $count=$selected->count();
            if($count<6){
                $ids=$selected->pluck('id');
                $remain=6-$count;
                $left=DB::table('notes')->whereNotIn('id',$ids)->orderBy('title','desc')->limit($remain)->get();
                $selected=$selected->merge($left);
            }else{
                $selected=$selected;
            }
            return view ('home',compact('selected',));
    }
    public function userchange(Request $newuser,$id){
            $new=DB::table('users')->where('id',$id)->update([
            'first'=>$newuser->first,
            'last'=>$newuser->last,
            'father'=>$newuser->father,
            'mother'=>$newuser->mother
            ]);
            return redirect('dashboard');
    }
    public function img(Request $imgreq,$id){
            $imgreq->validate([
            'image'=>'required|image|mimes:jpg,png,jpeg|max:2048']);
            $file = $imgreq->file('image');
            $filename = time().'_'.$file->getClientOriginalName();
            $path=$file->storeAs('upload',$filename,'public');
            $imgdb=DB::table('users')->where('id',$id)->update([
            'image'=>$path
        ]);session(['image'=>$path]);
        return redirect('dashboard');
    }
    public function favour(){
            $nofav=DB::table('favourite')->where('userid',session('id'))->exists();
            if(!$nofav){
                return view('student.nofav');
            }else{
                $fav=DB::table('favourite')->where('userid',session('id'))->join('notes','notes.id','=','favourite.notesid')->select('notes.*')->get();
                return view('student.myfav',compact('fav'));
            }
    }   
    public function likes($id){
            $fav = DB::table('favourite')->where('notesid', $id)->where('userid',session('id'))->exists();
            if (!$fav) {
                $note = DB::table('notes')->where('id', $id)->select('title')->first();
                DB::table('favourite')->insert([
                'notesid' => $id,
                'userid'  => session('id'),
                'title'   => $note->title
                ]);
            } else {

                 DB::table('favourite')->where('notesid', $id)->where('userid', session('id'))->delete();
            }
                return back();
    }
    public function allfilesdata(){
            $payment=DB::table('users')->where('id',session('id'))->exists();
            if($payment){
                $notes=DB::table('notes')->get();
                return view('ebook.allfile',compact('notes'));
            }
    }
    public function allfreefile(){
            $payment=DB::table('users')->where('id',session('id'))->exists();
            if($payment){
                $notes=DB::table('notes')->where('filetype','free')->paginate(3);
                return view('ebook.freefile',compact('notes'));
            }else{
                $book=DB::table('notes')->where('filetype','free')->get();
                return view('ebookfree.ebookfreefile',compact('book'));
            }
    }
    public function allpaidfile(){
    
            $payment=DB::table('users')->where('id',session('id'))->exists();
            if($payment){
                $notes=DB::table('notes')->where('filetype','subscription')->paginate(3);
                return view('ebook.paidfile',compact('notes'));
            }else{
                $book=DB::table('notes')->where('filetype','subscription')->get();
                return view('ebookfree.ebookpaid',compact('book'));
            }
    }
    public function ebooks(){
            $check=DB::table('users')->where('id',session('id'))->exists();
            if($check){
                $notes=DB::table('notes')->paginate(3);
                return view('ebook.allfile',compact('notes'));
            }else{
                $book=DB::table('notes')->get();
                return view('ebookfree.ebooklandingpage',compact('book'));
            }
    }
    public function sendotp(Request $req){
            $otp=rand(000000,999999);
            $email=DB::table('users')->where('email', $req->email)->value('email');
            $newmail=$req->email;
            if($email==$newmail){
                echo "email are same";
                $send=DB::table('otp')->insert([
                'userid'=>session('id'),
                'otp'=>$otp
            ]); 
            $to=$newmail;
            session(['newemail' => $newmail]);
            Mail::to($to)->send(new newmail($otp));
            return redirect('enterotp');
            }
    }
    public function passup(Request $newreq){
            $data = DB::table('otp')->where('userid', session('id'))->latest('id')->value('otp');
            if ($newreq->otp != $data) {
                return back()->with('error', 'Invalid OTP. Password not updated');
            }
            if ($newreq->password != $newreq->cpassword) {
                return back()->with('error', 'Password and Confirm Password do not match');
            }
            DB::table('users')->where('id', session('id'))->update([
            'password' => Hash::make($newreq->password)
             ]);
            return redirect('studentlogin')->with('success', 'Password Updated Successfully');
    }
    public function nologin($id){
            $table=DB::table('users')->where('id',session('id'))->exists();
            if(!$table){
            return view('student.studentlogin');
            }
    }
    public function pur (){
            $fetch=DB::table('payment')->join('subscription','subscription.id','=','payment.planid')->where('payment.userid',session('id'))->select('payment.*','subscription.amount','subscription.validity','subscription.title')->get();
            return view('student.purchasehistory',compact('fetch'));
    }
}
