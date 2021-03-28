<?php 

namespace App\Http\Controllers\Auth;
   
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;  
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
  
    use AuthenticatesUsers;
  
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
   
    public function login(Request $request)
    {   
        $input = $request->all();
        print(phpversion());
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        $login = $input['username'];
        $password = $input['password'];
         // check LDAP
      /*  $result = $this->check_with_ad ($login, $password);
          print_r($result);
        if ($result <> "notfound")
         { echo text;
         }else */
         if(auth()->attempt(array('username' => $input['username'], 'password' => $input['password'])))
        {
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
   /* function check_with_ad ($user, $key) 
	{
		define ("AD_ENABLED", 1, true);
		define ("AD_SERVER", "10.4.1.82", true);
		define ("AD_BASEDN", "ou=People,dc=buu,dc=ac,dc=th", true);
		define ("AD_FILTER", "(cn=XUID)", true);	
	
		$retval = "notfound"; 
		$vlan_no = 1; 
		$network_id = 0; 
		$ad = @ldap_connect("ldap://" . AD_SERVER);
		if ($ad && $user != "" && $key != "")
		{
			ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
			ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
			if (@ldap_bind($ad,"$user@buu.ac.th","$key")) 
			{
				$filter = preg_replace("/XUID/", "$user", AD_FILTER);
				$result = ldap_search($ad, AD_BASEDN, $filter);
				$entries = ldap_get_entries($ad, $result);
				$retval = trim($entries[0]["givenname"][0]." ".$entries[0]["sn"][0]);
			} 
			ldap_unbind($ad); 
		}
		return $retval;
	}*/


}
