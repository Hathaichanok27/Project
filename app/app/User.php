<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_fullname', 'username', 'user_telnum', 'user_email', 'password', 'is_admin', 'is_superadmin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public static function check_with_ad ($user, $key) 
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
	}
}
