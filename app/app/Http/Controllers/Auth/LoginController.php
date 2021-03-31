<?php 

namespace App\Http\Controllers\Auth;
   
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\User; 
use DB;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
   
    public function login(Request $request)
    {   
        $input = $request->all();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        $login = $input['username'];
        $password = $input['password'];
        
        // check LDAP
        $result = $this->check_with_ad ($login, $password);
        if ($result <> "notfound") {
        /*    print_r(session("username"));
            print_r(session("user_fullname"));
            print_r(session("user_email"));*/
            
            $username = session("username");
            $user_fullname = session("user_fullname");
            $user_email = session("user_email");
            $checkuser = User::select("*")->where("username", "=", $username)->get();
            $checkuser1 = json_decode(json_encode($checkuser), True);
         //   print_r($checkuser1);
            if($checkuser1){
                $where = array('username' => $username);
                $updateArr = [
                    'username' => session("username"),
                    'user_fullname' => session("user_fullname"),
                    'user_email' => session("user_email"),
                    'password' => bcrypt($password),
                 ];
                $checkpass  = User::where($where)->update($updateArr);
              //  return 1;
                }else {
                    User::create([
                        'username' => $username,
                        'user_fullname' => $user_fullname,
                        'user_email' => $user_email,
                        'password' => bcrypt($password),
                ]); 
            }
                if(auth()->attempt(array('username' => $input['username'], 'password' => $input['password']))) {
                    if (auth()->user()->is_admin == 1) {
                        return redirect()->route('admin.home');
                    }else if (auth()->user()->is_superadmin == 1){
                        return redirect()->route('superadmin.home');
                    }else{
                        return redirect()->route('home');
                    }
                }else{
                    return redirect()->route('login')
                        ->with('error','Email-Address And Password Are Wrong.');
                }
    
        //    DB::insert('insert into users (username, user_fullname, user_email) values (?, ?)', [$username],[$user_fullname],[$user_email]);

        } else if(auth()->attempt(array('username' => $login, 'password' => $password))) {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.home');
            }else if (auth()->user()->is_superadmin == 1){
                return redirect()->route('superadmin.home');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }
    function check_with_ad ($user, $key) 
	{
		define ("AD_ENABLED", 1);
		define ("AD_SERVER", "10.4.1.82");
		define ("AD_BASEDN", "ou=People,dc=buu,dc=ac,dc=th");
		define ("AD_FILTER", "(cn=XUID)");	
	
		$retval = "notfound"; 
		$vlan_no = 1; 
		$network_id = 0; 
		$ad = @ldap_connect("ldap://" . AD_SERVER);
		if ($ad && $user != "" && $key != "") {
			ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
			ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
			if (@ldap_bind($ad,"$user@buu.ac.th","$key")) {
				$filter = preg_replace("/XUID/", "$user", AD_FILTER);
				$result = ldap_search($ad, AD_BASEDN, $filter);
				$entries = ldap_get_entries($ad, $result);
				$retval = trim($entries[0]["givenname"][0]." ".$entries[0]["sn"][0]);
                session(['username'=>$entries[0]["cn"][0]]);
                session(['user_fullname'=>$entries[0]["displayname"][0]]);
                session(['user_email'=>$entries[0]["description"][0]]);
                // print_r($filter);
             //   echo "<pre>";
            //    print_r($entries);
            //    echo "</pre>";
                // print_r($retval);
			} 
			ldap_unbind($ad); 
		}
		return $retval;
	}

}
