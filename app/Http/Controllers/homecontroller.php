<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\student;

use App\loan;

class homecontroller extends Controller
{
    public function addqry(Request $req)
    {
    	$stud = new student();
    	$stud->name = $req->input('name');
    	$stud->cid = $req->input('cid');
    	$stud->no = $req->input('no');
    	$stud->address = $req->input('address');
        $stud->pasw = $req->input('pasw');
    	if ($stud->save()) {
    		echo"
    		<script>
    		alert('Successfully Registered');
    		window.location='form';
    		</script>
    		";
    	}
    }
    public function userLogin(Request $req)
    {
        $un = $req->input('name');
        $pw = $req->input('pasw');
        $adminx = student::where('name','=',$un)
                        ->where('pasw','=',$pw)
                        ->get();
        if(count($adminx)>0)
        {
            $uname = student::where('name','=',$un)
                        ->where('pasw','=',$pw)
                        ->value('name');
            session()->put('name', $uname);         
            return redirect('userwelcome'); 
        }
        else
        {
            echo "
            <script>
            alert('user doesn't exist);
            window.location='Userlogin';
            </script>
            ";
        }
    }
     public function alogout()
    {
        session()->forget('name');
        session()->flush();
        return redirect('Userlogin');
    }

    public function edit($id)
    {
    	$res = student::where('id','=',$id)->get();
    	return view('edit',compact('res'));
    }
    public function editqry(Request $req)
    {
    	$n = $req->input('name');
    	$rn = $req->input('rno');
    	$no = $req->input('no');
    	$a = $req->input('address');
    	$id = $req->input('id');

    	$update = student::where('id','=',$id)->update(['name'=>$n,'rno'=>$rn,'no'=>$no,'address'=>$a]);
    	if($update == true)
    	{
    		echo"
    		<script>
    		alert('Updated');
    		window.location='/form';
    		</script>
    		";
    	}
    	else
    	{
    		echo"
    		<script>
    		alert('Error');
    		window.location='/form';
    		</script>
    		";
    	}
    }
    public function delete($id)
    {
    	$delete = student::where('id','=',$id)->delete();
    	if($delete == true)
    	{
    		echo"
    		<script>
    		alert('deleted');
    		window.location='/form';
    		</script>
    		";
    	}
    	else
    	{
    		echo"
    		<script>
    		alert('Error');
    		window.location='/form';
    		</script>
    		";
    	}

    }
    public function addloanqry(Request $req)
    {
        $stud = new loan();
        $stud->loantype = $req->input('loantype');
        $stud->amount = $req->input('amount');
        $stud->cid = $req->input('cid');
        $stud->branchno = $req->input('branchno');
        $stud->accno = $req->input('accno');

        if ($stud->save()) {
            echo"
            <script>
            alert('Successfully Registered');
            window.location='userwelcome';
            </script>
            ";
        }
}
}
