<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\users;
use App\branch;
use App\accounts;

class admincontroller extends Controller
{
    public function adminLogin(Request $req)
    {
    	$un = $req->input('name');
    	$pw = $req->input('password');
    	$adminx = users::where('name','=',$un)
    					->where('password','=',$pw)
    					->get();
    	if(count($adminx)>0)
    	{
    		$uname = users::where('name','=',$un)
    					->where('password','=',$pw)
    					->value('name');
    		session()->put('name', $uname);			
	    	return redirect('welcome');	
    	}
    	else
    	{
    		echo "
	    	<script>
	    	alert('user doesn't exist);
	    	window.location='Adminlogin';
	   		</script>
	    	";
    	}
    }
     public function adminlogout()
    {
    	session()->forget('name');
    	session()->flush();
    	return redirect('Adminlogin');
    }

    public function addaccqry(Request $req)
    {
        if(session('name'))
        {
        $stud = new accounts();
        $stud->accno = $req->input('accno');
        $stud->bal = $req->input('bal');
        $stud->acctype = $req->input('acctype');
        $stud->cid = $req->input('cid');
        $stud->branchno = $req->input('branchno');
        if ($stud->save()) {
            echo"
            <script>
            alert('Successfully Inserted Account');
            window.location='welcome';
            </script>
            ";
        }
    }
      else
        {
            return redirect('Adminlogin');
        }
}
public function addbranchqry(Request $req)
    {
        if(session('name'))
        {
        $stud = new branch();
        $stud->branchno = $req->input('branchno');
        $stud->address = $req->input('address');
        
        if ($stud->save()) {
            echo"
            <script>
            alert('Successfully Inserted Branch');
            window.location='welcome';
            </script>
            ";
        }
    }
      else
        {
            return redirect('Adminlogin');
        }
}
 public function editacc($id)
    {
        if(session('name'))
        {
            $res = accounts::where('id','=',$id)->get();
            return view('editacc',compact('res'));
        }
        else
        {
            return redirect('adminlogin');
        }
    }

 public function editaccqry(Request $req)
    {
        if(session('name'))
        {
            $n = $req->input('accno');
            $d = $req->input('bal');
            $e = $req->input('acctype');
            $ds = $req->input('cid');
            $ef = $req->input('branchno');
            $id = $req->input('id');
            
         
            $update = accounts::where('id','=',$id)->
                update(['accno'=>$n,'bal'=>$d,'acctype'=>$e,'cid'=>$ds,'branchno'=>$ef ]);
            if($update == true)
            {
                echo"
                <script>
                alert('Updated Account Detail Successfully');
                window.location='viewacc';
                </script>
                ";
            }
            else
            {
                echo"
                <script>
                alert('Error');
                window.location='viewacc';
                </script>
                ";
            }
        }
        else
        {
            return redirect('Adminlogin');
        }
        
    }

    public function deleteacc($id)
    {
        if(session('name'))
        {
            
            $delete = accounts::where('id','=',$id)->delete();
            if($delete == true)
            {
                echo"
                <script>
                alert('Deleted successfully');
                window.location='/viewacc';
                </script>
                ";
            }
            else
            {
                echo"
                <script>
                alert('Error');
                window.location='/viewacc';
                </script>
                ";
            }
        }
        else
        {
            return redirect('Adminlogin');
        }
        
    }
     public function editbranch($id)
    {
        if(session('name'))
        {
            $res = branch::where('id','=',$id)->get();
            return view('editbranch',compact('res'));
        }
        else
        {
            return redirect('Adminlogin');
        }
    }
     public function editbranchqry(Request $req)
    {
        if(session('name'))
        {

            $ef = $req->input('branchno');
            $a = $req->input('address');
            $id = $req->input('id');
            
         
            $update = branch::where('id','=',$id)->
                update(['branchno'=>$ef,'address'=>$a ]);
            if($update == true)
            {
                echo"
                <script>
                alert('Updated Branch Detail Successfully');
                window.location='viewbranch';
                </script>
                ";
            }
            else
            {
                echo"
                <script>
                alert('Error');
                window.location='viewbranch';
                </script>
                ";
            }
        }
        else
        {
            return redirect('Adminlogin');
        }
        
    }

    public function deletebranch($id)
    {
        if(session('name'))
        {
            
            $delete = branch::where('id','=',$id)->delete();
            if($delete == true)
            {
                echo"
                <script>
                alert('Deleted successfully');
                window.location='/viewbranch';
                </script>
                ";
            }
            else
            {
                echo"
                <script>
                alert('Error');
                window.location='/viewbranch';
                </script>
                ";
            }
        }
        else
        {
            return redirect('Adminlogin');
        }
        
    }

}
